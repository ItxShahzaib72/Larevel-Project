<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function admin(){
        if(Auth::user()->status =="Active"){
           if(Auth::user()->role =="Admin"){
            return view('adminlayouts.admin');

           }
           else{
                  return redirect('/');

           }
        }
        else{
            return redirect()->back();
        }

        
    }
}
