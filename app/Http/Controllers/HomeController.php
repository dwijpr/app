<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Dart;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $darts = Dart::orderBy('created_at', 'desc')->get();
        return view('home', [
            'darts' => $darts,
        ]);
    }
}
