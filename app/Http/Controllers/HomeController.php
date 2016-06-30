<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
        ]);
    }
}
