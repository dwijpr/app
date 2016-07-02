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
        )->get()->groupBy(function($pay) {
            $pay->item = Item::find($pay->item_id);
            $pay->datetime = Carbon::parse($pay->datetime);
            return $pay->datetime->format('Y-m-d');
        });
        return view('home', [
            'gpays' => $gpays,
            'items' => Item::all(),
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'item' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'datetime' => 'required|date|date_format:Y-m-d h:i:s'
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
        return redirect('home');
    }
}
