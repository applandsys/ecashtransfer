<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    //
    public function dashboard(){
        echo "Dashbaord";
    }

    public function profile(Request $request){
      $user_data = Auth::user();
    //  dd( $user_data);
      return view('front.profile',["data"=>$user_data]);
    }

    
    public function transfer(Request $request){
      $user_data = Auth::user();
    //  dd( $user_data);
      return view('front.transfer',["data"=>$user_data]);
    }

    
    public function transactions(Request $request){
      $user_data = Auth::user();
    //  dd( $user_data);
      return view('front.transactions',["data"=>$user_data]);
    }

    public function kyc(Request $request){
      $user_data = Auth::user();
    //  dd( $user_data);
      return view('front.kyc',["data"=>$user_data]);
    }


  //  profile
}
