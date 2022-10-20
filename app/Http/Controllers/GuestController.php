<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestRequest;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    //

    function index()
    {
        $guests = Guest::with('user')->get();
         return view('home',['guests'=>$guests]);
    }

    function create(){
        
        return view('guestlogin');
    }

    function store(GuestRequest $request){

        // $user = Auth::user();
        $data['user_id'] = Auth::user()->id;
        $data['Email'] = $request->email;
        $data['name'] = $request->name;
        $data['password'] = $request->password;
       
        Guest::create($data);
        return redirect()->route('guest.index')->with('success', 'Post Created Successfully');
    }
}
