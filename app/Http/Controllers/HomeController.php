<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Item, App\Pay, Carbon\Carbon;

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
        $gkeys = $gpays->keys()->toArray();
        rsort($gkeys);
        return view('home', [
            'gkeys' => $gkeys,
            'gpays' => $gpays,
            'items' => Item::all(),
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
