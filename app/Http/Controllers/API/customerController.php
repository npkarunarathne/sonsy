<?php

namespace App\Http\Controllers\API;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        return Customer::create([
            'Fname' => $request['Fname'],
            'Lname' => $request['Lname'],
            'No' => $request['No'],
            'City' => $request['City'],
            'Street' => $request['Street'],
            'NicNo' => $request['NicNo']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($CustomerID)
    {
        //$customerDetails = DB::table('customers')->find($CustomerID);
        $customerDetails = Customer::findOrFail($CustomerID);
        return $customerDetails;
        /* $customerDetails = DB::table('Customer')->find($id);
        return $customerDetails; */
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
