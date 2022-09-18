<?php

namespace App\Http\Controllers;

use App\Models\CustomerTransaction;
use App\Models\ParticipantDetials;
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

        //create a
    
        
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
            //get the particant who wons the product
            $participant =  ParticipantDetials::where('name', $item['owner'])->first();
            //check if return_custoer is null
            if($participant->return_customer == null){
                //if null set it to 1
                 //create an array of user_id
                    $data = array($user_id);
                    //convert the array to json
                    $data = json_encode($user_id);
                    $totalPoints = $item['quantity'];
                    //update participant details
                    ParticipantDetials::where('name', $item['owner'])->update([
                        'return_customer' => $data,
                        'points' => $totalPoints,
                    ]);
    
            }else{
                //first get the return customer
                $return_customer = $participant->return_customer;
                //convert the json to array
                $return_customer = json_decode($return_customer);
                //check if the user id is in the array
                if(in_array($user_id, $return_customer)){
                    //if the user id is in the array
                    //if quantity is 1 add 2 points else add 4 points
                    if($item['quantity'] == 1){
                        $totalPoints = $participant->points + 2;
                    }else{
                        $totalPoints = $participant->points + 4;
                    }
                    //update participant details
                    ParticipantDetials::where('name', $item['owner'])->update([
                        'points' => $totalPoints,
                    ]);
                    
                }else{
                    //if the user id is not in the array
                    //add the user id to the array
                    array_push($return_customer, $user_id);
                    //convert the array to json
                    $return_customer = json_encode($return_customer);
                    //get the points
                    $points = $participant->points;
                    //add the quantity to the points
                    $totalPoints = $points + $item['quantity'];
                    //update participant details
                    ParticipantDetials::where('name', $item['owner'])->update([
                        'return_customer' => $return_customer,
                        'points' => $totalPoints,
                    ]);
                }
            

            }



            //
            //decrease the quantity of the product
            ProductDetails::where('id', $item['id'])->decrement('quantity_left', $item['quantity']);


        }
        echo "success";

    }
}
