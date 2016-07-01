<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Item;

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
        $pays = $this->user->pays;
        return view('home', [
            'pays' => $pays,
            'items' => Item::all(),
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'price' => 'required|numeric|min:0',
            'datetime' => 'required|date|date_format:Y-m-d h:i:s'
        ]);
        $pay = $request->user()->pays()->create([
            'item_id' => $request->item,
            'price' => $request->price,
            'datetime' => $request->datetime,
        ]);
        return redirect('home');
    }
}
