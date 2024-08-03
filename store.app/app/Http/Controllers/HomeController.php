<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.home');
    }
    public function shop(){
        return view('layouts.shop');
    }
    public function single(){
        return view('layouts.singleproduct');
    }
    public function cart(){
        return view('layouts.cart');
    }
    public function checkout(){
        return view('layouts.checkout');
    }
    public function confirmorder(){
        return view('layouts.confirmorder');
    }
    public function blog(){
        return view('layouts.blog');
    }
    public function blogdetail(){
        return view('layouts.blogdetail');
    }
    public function userlogin(){
        return view('layouts.userlogin');
    }
    public function contact(){
        return view('layouts.contact');
    }
    public function trackorder(){
        return view('layouts.trackorder');
    }
   

}

