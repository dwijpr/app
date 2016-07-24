<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dart;

class DartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $darts = Dart::all();
        return view('dart.index', [
            'darts' => $darts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dart.create');
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
            'title' => 'required|max:255',
            'body' => 'required|min:140',
        ]);
        $request->user()->darts()->create([
            'title' => $request->title,
            'body' => $request->body,
            'cover' => $request->cover,
        ]);
        return redirect('/dart');
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
    public function edit(Dart $dart)
    {
        return view('dart.edit', [
            'dart' => $dart,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dart $dart)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required|min:140',
        ]);
        $dart->update([
            'title' => $request->title,
            'body' => $request->body,
            'cover' => $request->cover,
        ]);
        return redirect('/dart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dart $dart)
    {
        $dart->delete();
        return redirect('/dart');
    }
}
