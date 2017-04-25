<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToBuyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shopping_list()
    {
        return view('shopping_list');
    }
}
