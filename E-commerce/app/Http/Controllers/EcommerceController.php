<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function categoryProduct(){
        return view('front-end.category.category-content');
    }

    public function categoryProductMen(){
        return view('front-end.category.category-contentMen');
    }

    public function shortCodes(){
        return view('front-end.codes.short-codes');
    }


    public function mail(){
        return view('front-end.mail.mail');
    }


    public function singleProduct(){
        return view('front-end.singleProduct.singleProduct');
    }


}



