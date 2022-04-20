<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
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
        return view('newproperty');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propertyName = $request->input('property_name');
        $propertyAddress = $request->input('property_address');
        $propertyCity = $request->input('city');
        $propertyCountry = $request->input('country');
        $propertyType = $request->input('property_type');
        $propertyEmail = $request->input('property_email');
        $propertyPhone = $request->input('property_phone');
        $userId = $request->input('user_id');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $province = $request->input('province');
        $zipCode = $request->input('zip_code');
        $termsConditions = $request->input('terms_conditions');

        // dd($latitude, $longitude);


        $property = Property::create([
            'user_id' => $userId,
            'name' => $propertyName,
            'property_email' => $propertyEmail,
            'phone_number' => $propertyPhone,
            'address'=>$propertyAddress,
            'property_type' => $propertyType,
            'city'=> $propertyCity,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'province' => $province,
            'zip_code' => $zipCode,
            'country' => $propertyCountry,
            'terms_conditions' => $termsConditions,
        ]);

        return redirect('home')->with(['property'=> $property]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
