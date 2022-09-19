<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

  public function index() {

         return view('login');
  }

 public function login(Request $request) {
    //login user using the user model
    $user = User::where('email', $request->email)->first();

    //check if user exists
    if($user) {
        //check if password matches
        if(Hash::check($request->password, $user->password)) {
            //login user
            //Auth::login($user);
            //redirect to dashboard
            //store name in session
            $request->session()->put('id', $user->id);
            //store user role
            $request->session()->put('role', $user->role);
            return redirect()->route('dashboard');
        }
    }
    // else return redirect()->route('login'):


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
            //password must be confirmed
            "password" => ["required","confirmed", "min:4"],

            //passw

        ]);

        $user = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "contact" => $request->input("contact"),
            "password" => Hash::make($request->input("password")),
            "role" => "user",
        ]);

    } catch (\Exception $ex) {
        dd($ex->getMessage());
        // return back()->withInput()->withErrors(["error" => $ex->getMessage()]);
    }
    //store user id in session
    $request->session()->put('id', $user->id);
    //store user role in session
    $request->session()->put('role', $user->role);
    return redirect()->route('dashboard')->with("status", "Welcome");
}

public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            return redirect('/');
    }
}
