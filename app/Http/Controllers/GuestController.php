<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //

    function index()
    {
        $guests = Guest::with('user')->get();
         return view('home',['guests'=>$guests]);
    }
}
