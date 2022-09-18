<?php

namespace App\Http\Controllers;

use App\Http\Resources\DashboardResource;
use App\Models\CustomerTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
         $total_buyers = CustomerTransaction::count();
         //total price for a column called totalprice
         $total_sales = CustomerTransaction::sum('totalprice');
        return view('dashboard.index', compact('total_buyers', 'total_sales'));



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
        $users = DB::table('productdetails')->select('*')->get();
        return view('customer.productdetails')->with('users', $users);
    }

    public function showCustomers(){
        $users = DB::table('customertransactions')->select('*')->get();
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
}
