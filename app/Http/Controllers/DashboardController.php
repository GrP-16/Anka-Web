<?php

namespace App\Http\Controllers;

use App\Http\Resources\DashboardResource;
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
        $users = DB::table('customertransactions')->select('*')->get();
        return view('dashboard.index')->with('total_buyers', $users);

        $pr = DB::table('customertransactions')->select('totalprice')->get();
        return view('dashboard.index')->with('totalpx', $pr);

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

    public function showTabularRecents(){
        $users = DB::table('recentbookings')->select('*')->get();
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
