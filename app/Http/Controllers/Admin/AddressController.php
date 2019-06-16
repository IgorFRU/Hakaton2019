<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->address);
        $link = 'https://geocode-maps.yandex.ru/1.x/?geocode="'.$request->address.'"&key=1fa209b0-77f2-4207-9ea6-f62bcf60db62==&results=1';
        $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $link);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                curl_close($curl);

            $p = xml_parser_create();
            xml_parse_into_struct($p, $response, $vals, $index);
            xml_parser_free($p);

            $coordinate = explode(' ', $vals[143]['value']);
            $value = $coordinate[1].', '.$coordinate[0];
                // dd($value);


        $address = Address::create($request->all());
        
        Address::where('id', $address->id)
        ->update(['coordinate' => $value]);
        
        
        return redirect()->route('dashboard.customer.show', ['customer' => $request->customer_id])->with('success', 'Покупатель успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
