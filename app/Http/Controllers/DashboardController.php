<?php

namespace App\Http\Controllers;

use App\Http\Resources\DashboardResource;
use App\Models\CustomerTransaction;
use App\Models\ParticipantDetials;
use App\Models\ProductDetails;
use App\Models\RecentBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
         //count total buyers and distinct by user_id
            $total_buyers = RecentBooking::distinct('user_id')->count('user_id');
         //return paricipant with the highest points
         $maxValue = ParticipantDetials::min('points');
          $detials = ParticipantDetials::where('points', $maxValue)->first();
        //   dd($detials->name);
         //total price for a column called totalprice
         $total_sales = RecentBooking::sum('totalcost');

         $qty = RecentBooking::sum('quantity');
         $qtylft = ProductDetails::sum('quantity_left');
         $pdtsbgt = $qty - $qtylft;
         $percentagesale = ($pdtsbgt/$qty)*100;
        return view('dashboard.index', compact('total_buyers', 'total_sales','maxValue', 'detials','percentagesale'));



    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function participant() {
        $users = DB::table('participantdetails')->select('*')->get();
        return view('customer.participantdetails')->with('users', $users);

    }

    public function showTabularReports(){
        $users = DB::table('tabularreports')->select('*')->get();

        return view('reports.tabularreports')->with('users', $users);

    }

    public function showTabularRecents(Request $request){
        //get user id from the session
        $user_id = $request->session()->get('id');
        $users = DB::table('recentbookings')->select('*')->where('user_id', $user_id)->get();
        return view('customer.recentbookings')->with('users', $users);
    }


    public function showProductDetails(){
        //show product details where quantity is greater than 0
        //$users = DB::table('productdetails')->select('*')->where('quantity', '>', 0)->get();

        $users = ProductDetails::where('quantity_left', '>', 0)->get();
        return view('customer.productdetails')->with('users', $users);
    }

    public function showCustomers(){
        //distinct users by user_id

        $users = DB::table('recentbookings')->select('*')->get();
        return view('reports.customertransactions')->with('users', $users);
    }
    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function productgraph(Request $request)
    {
        //get all products and their quantity left
        $products = ProductDetails::all();

        return  Response::json($products);

    }
    public function getpoints(Request $request)
    {
        //get all products and their quantity left
        $details = ParticipantDetials::all();

        return  Response::json($details);

    }
}
