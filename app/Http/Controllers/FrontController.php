<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\User;

class FrontController extends Controller
{
    public function homepage(){
        return view('front.homepage');
    }

    public function openaccount(Request $request){
        if ($request->isMethod('post')) {
            //

            $validation = Validator::make($request->all(),[
                'name' => 'required|string|min:5|max:100',
                'email' => 'required|string|email|unique:users',
                'password'=> 'required|min:8',
                'confirm_password' => 'required|same:password',
            ]);
            // if( $validation->fails())
            // {
            //     return redirect('/')->with('errors', 'Validation failed');
            // }
            $users = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $role = UserRole::create([
                'user_id'=> $users->id,
                'role'=> 'user',
            ]);
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $response = [
                    'success' => 200,
                    'data' => Auth::user(),
                    'is_login' => true,
                ];
              // redirect
            }
            return redirect('/loginaccount')->with('success', 'Registration Successful');
        }else{
            return view('front.openaccount');
        }
               
    }

    public function loginaccount(Request $request)
    {

        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|string|email',
                'password'=> 'required|min:8',
            ]);
       
            $credentials = $request->only('email', 'password');
            
            if (Auth::attempt($credentials)) {
                // return redirect()->route('frontend.home')
                //             ->with('success','You have Successfully loggedin');
                $response = [
                    'success' => 200,
                    'data' => Auth::user(),
                    'is_login' => true,
                ];
                return redirect('/account/dashboard')->with('success', 'Login Successful');
            }
            
        }else{
            return view('front.loginaccount');
        }
       
    }


    public function contact(Request $request)
    {

        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|string|email',
                'password'=> 'required|min:8',
            ]);
       
            $credentials = $request->only('email', 'password');
            
            if (Auth::attempt($credentials)) {
                // return redirect()->route('frontend.home')
                //             ->with('success','You have Successfully loggedin');
                $response = [
                    'success' => 200,
                    'data' => Auth::user(),
                    'is_login' => true,
                ];
                return redirect('/contact')->with('success', 'Message Successfully Sent.');
            }
            
        }else{
            return view('front.contact');
        }
       
    }

    public function about(Request $request)
    {
        return view('front.about');
    }

    public function logout(Request $request)
    {
        Session::flush();

        Auth::logout();

        return redirect('/')->with('success','Logout Successfully');
    }

}
