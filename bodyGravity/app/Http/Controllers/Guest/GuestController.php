<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view('guest.index');
    }



    public function about(){
        return view('guest.about');
    }


    public function program(){
        return view('guest.program');
    }

    public function contact() {
        return view('guest.contact');
    }
}
