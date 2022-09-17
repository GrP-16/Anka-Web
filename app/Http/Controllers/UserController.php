<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{

  public function index() {
      
         return view('login');
  }

 public function login(){
     try {

//    $credentials = $request->only('email', 'password');
//     $user = User::where(['email' => $request->email, 'password' => $request->password]);
//            dd(Auth::login($user));
      return redirect()->intended('dashboard');

     } catch (\Exception $th) {
         dd($th->getMessage());

     }
    }

 public function create(){
        return view('register');
    }

    // save user details
 public function store(Request $request){
     try {
         $this->validate( $request, [
            "name" => ["required"],
            "email" => ["required"],
            "contact" => ["required","max:10"],
            "password" => ["required","min:4"],
        ]);

        $user = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "contact" => $request->input("contact"),
            "password" => $request->input("password")
        ]);

    } catch (\Exception $ex) {
        dd($ex->getMessage());
        // return back()->withInput()->withErrors(["error" => $ex->getMessage()]);
    }
    return redirect()->route('dashboard')->with("status", "Welcome");
}

public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            return redirect('/');
    }
}
