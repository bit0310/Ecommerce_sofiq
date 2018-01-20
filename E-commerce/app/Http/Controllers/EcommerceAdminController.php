<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceAdminController extends Controller
{
    public function checkout(){
        return view('front-end.checkout.checkout');
    }


    public function login(){
        return view('front-end.login.login');
    }

    public function registered(){
        return view('front-end.registered.registered');
    }




}
