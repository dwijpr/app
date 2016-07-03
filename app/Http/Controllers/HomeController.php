<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Item, App\Pay, Carbon\Carbon, stdClass;

class HomeController extends Controller
{
    public function __construct() {
        $this->user = request()->user();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gpays = Pay::where('user_id', $request->user()->id)->select(
            'id', 'price', 'datetime','item_id'
        )->orderBy('order', 'asc')->get()->groupBy(function($pay) {
            $pay->item = Item::find($pay->item_id);
            $pay->datetime = Carbon::parse($pay->datetime);
            return $pay->datetime->format('Y-m-d');
        });
        foreach ($gpays as $pays) {
            $pays->total = 0;
            foreach ($pays as $pay) {
                $pays->total += $pay->price;
            }
        }
        $gkeys = $gpays->keys()->toArray();
        rsort($gkeys);
        $total = $request->user()->pays()->sum('price');
        $max_date =  Carbon::parse($request->user()->pays()->max('datetime'));
        $min_date =  Carbon::parse($request->user()->pays()->min('datetime'));
        $_year_months = year_months_list($max_date, $min_date);
        rsort($_year_months);
        $year_months = [];
        foreach ($_year_months as $year_month) {
            $_year_month = explode('-', $year_month);
            $_ = new stdClass;
            $_->date = Carbon::parse($year_month);
            $_->price = $request->user()->pays()
                    ->whereYear('datetime', '=', $_year_month[0])
                    ->whereMonth('datetime', '=', $_year_month[1])
                    ->sum('price');
            $year_months[$year_month] = $_;
        }
        return view('home', [
            'view_path' => 'home.index',
            'gkeys' => $gkeys,
            'gpays' => $gpays,
            'items' => Item::all(),
            'total' => $total,
            'year_months' => $year_months,
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'item' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'datetime' => 'required|date|date_format:Y-m-d'
        ]);
        $item = Item::where('name', $request->item)->first();
        if (!$item) {
            $item = Item::create([
                'name' => $request->item,
            ]);
        }
        $pay = $request->user()->pays()->create([
            'item_id' => $item->id,
            'price' => $request->price,
            'datetime' => $request->datetime,
        ]);
        $order = $request->user()->pays()->where(
            'datetime', $request->datetime
        )->count();
        $pay->order = $order;
        $pay->save();
        return redirect('home');
    }

    public function update(Request $request, Pay $pay) {
        $pay->datetime = Carbon::parse($pay->datetime);
        if ($request->up and $pay->order > 1) {
            $payUp = $request->user()->pays()
                ->where('datetime', $pay->datetime->format('Y-m-d'))
                ->where('order', $pay->order-1)->first();
            $pay->order--;
            $payUp->order++;
            $pay->save();
            $payUp->save();
        } elseif ($request->down and !(($request->user()->pays()->where(
            'datetime', $pay->datetime->format('Y-m-d')
        )->count())==$pay->order)) {
            $payDown = $request->user()->pays()
                ->where('datetime', $pay->datetime->format('Y-m-d'))
                ->where('order', $pay->order+1)->first();
            $pay->order++;
            $payDown->order--;
            $pay->save();
            $payDown->save();
        }
        return redirect('home');
    }

    public function destroy(Request $request, Pay $pay) {
        $pay->delete();
        return redirect('home');
    }
}
