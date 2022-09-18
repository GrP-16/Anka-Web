<?php

namespace App\Http\Controllers;

use App\Models\CustomerTransaction;
use App\Models\ProductDetails;
use App\Models\RecentBooking;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //create store function
    public function store(Request $request){
        //validate the request

        //get the cart items from the request
        $cart = $request->cart;
        //get the user id from the request session
        $user_id = $request->session()->get('id');
        
        
        
        //loop through the cart items
        foreach($cart as $item){
            //create a new order
             RecentBooking::create([
                'product' => $item['product'],
                'quantity' => $item['quantity'],
                'unitprice' => $item['price'],
                'totalcost' => $item['price']* $item['quantity'],
                'deliveryaddress' => $request->address,
                "user_id" => $user_id,
            ]);
            //decrease the quantity of the product
            ProductDetails::where('id', $item['id'])->decrement('quantity_left', $item['quantity']);


        }
        echo "success";

    }
}
