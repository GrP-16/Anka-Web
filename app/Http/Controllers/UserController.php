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

   //create a view that orders participants by points

 public function login(Request $request) {
    // try {
         //code...

    //login user using the user model
    $user = User::where('email', $request->email)->first();

    //check if user exists
    if($user) {
       // dd(Hash::check($request->password, $user->password));
        //check if password matches
        if(Hash::check($request->password, $user->password)) {
            //login user
            //Auth::login($user);
            //redirect to dashboard
            //store name in session
            $request->session()->put('id', $user->id);
            //store user role
            $request->session()->put('role', $user->role);
            $request->session()->put('name', $user->name);

             if($user->role=='admin'){
                return redirect()->route('dashboard');
             }
             else{
                return redirect()->route('productDetails')->with("status", "Welcome");

             }


        } else {
            return back()->withErrors(['error' => 'Invalid details']);
        }
    }
    // else return redirect()->route('login'):
  //  } catch (\Exception $th) {
       // dd($th->getMessage());
   // }

    }

 public function create(){
        return view('register');
    }

    // save user details
 public function store(Request $request){
    // try {
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

   // } catch (\Exception $ex) {
    //    dd($ex->getMessage());
        // return back()->withInput()->withErrors(["error" => $ex->getMessage()]);
   // }
    //store user id in session

    $request->session()->put('id', $user->id);
    //store user role in session
    $request->session()->put('role', $user->role);
    $request->session()->put('name', $user->name);
    return redirect()->route('productDetails')->with("status", "Welcome");
}

public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            return redirect('/');
    }
}
