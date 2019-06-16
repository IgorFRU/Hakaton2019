<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Customer;
use App\Address;
use App\AdrCity;
use App\AdrStreetType;
use App\AdrNumber;
use App\AdrStreet;
use Illuminate\Http\Request;
use Fomvasss\Dadata\Facades\DadataSuggest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array (
            'customers' => Customer::simplePaginate(5),
        );
        return view('dashboard/customers', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array (
            'customer' => [],
        );
        
        return view('dashboard/customer_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        Customer::create($request->all());
        
        return redirect()->route('dashboard.customer.index')->with('success', 'Покупатель успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $data = array (
            'addresses' => Address::where('customer_id', $customer->id)->get(),
            'cities' => AdrCity::get(),
            'street_type' => AdrStreetType::get(),
            'street' => AdrStreet::get(),
            'number' => AdrNumber::get(),
            'addr' => Address::get(),
            'customer_id' => $customer->id
        );

        

        // dd($customer->id, $data);
        return view('dashboard/address', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
