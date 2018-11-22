<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
        $User = Auth::user();
        $Address = $User->address;
        return view("profile.address.address_index")->with(["Address" => $Address]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("profile.address.address_create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $AddressData = new Address;

        $input = $request->only([
            'name', 'pin', 'locality', 'mobile', 'address', 'city', 'state', 'landmark', 'type',
        ]);

        $AddressData->fill($input);
        $User = Auth::user();
        $User->address()->save($AddressData);

        return redirect()->action('AddressController@index', [Route::current()->parameter('id')]);
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
    public function edit($profile_id, $address)
    {
        //
        $AddressData = Address::find($address);
        return view("profile.address.address_edit")->with(["AddressData" => $AddressData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $profile_id, $address)
    {
        //
        $AddressData = Address::find($address);
        $input = $request->only([
            'name', 'pin', 'locality', 'mobile', 'address', 'city', 'state', 'landmark', 'type',
        ]);
        $AddressData->fill($input);
        $AddressData->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($profile_id, $address)
    {
        //
        $AddressData = Address::find($address);
        $AddressData->delete();
        return redirect()->back();

    }
}
