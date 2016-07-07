<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pay, App\Item;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objects = Pay::all();
        return view('pays.index', [
            'objects' => $objects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('pays.create', [
            'items' => $items,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'price' => 'required|numeric|min:0',
            'datetime' => 'required|date|date_format:Y-m-d h:i:s'
        ]);
        $pay = $request->user()->pays()->create([
            'item_id' => $request->item,
            'price' => $request->price,
            'datetime' => $request->datetime,
        ]);
        return redirect('pay');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay $pay)
    {
        $items = Item::all();
        return view('pays.edit', [
            'object' => $pay,
            'items' => $items,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pay $pay)
    {
        $this->validate($request, [
            'price' => 'required|numeric|min:0',
            'datetime' => 'required|date|date_format:Y-m-d h:i:s'
        ]);
        $pay->update([
            'item_id' => $request->item,
            'price' => $request->price,
            'datetime' => $request->datetime,
        ]);
        return redirect('pay');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay $pay)
    {
        $pay->delete();
        return redirect('pay');
    }
}