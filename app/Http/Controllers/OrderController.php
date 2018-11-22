<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Payment;
use App\Order;
use App\Address;
use App\Cart;

class OrderController extends Controller
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
        $User = Auth::user();
        $Address = $User->address;
        $CartList=User::with("cart.product.file_bucket.files")->find(Auth::id())->cart;
        $PriceDetails=array();

        $TotalPrice=0;

        foreach ($CartList as $key => $value) {
            $TotalPrice+=$value['product']['price'];
        }

        $PriceDetails['Total']=$TotalPrice;
        $PriceDetails['Delivary']=200;
        $PriceDetails['TotalSum']= $PriceDetails['Delivary']+$PriceDetails['Total'];

        return view('order.order_create')->with(['Address'=>$Address,'CartList'=>$CartList, 'PriceDetails'=> $PriceDetails]);
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
        $User=Auth::user();
        $newPayment=new Payment();

        $PriceDetails=array();

        $TotalPrice=0;

        foreach ($User->cart as $key => $value) {
            $TotalPrice+=$value['product']['price'];
        }

        $PriceDetails['Total']=$TotalPrice;
        $PriceDetails['Delivary']=200;
        $PriceDetails['TotalSum']= $PriceDetails['Delivary']+$PriceDetails['Total'];

        $input = $request->only([
            "address_selection" 
        ]);

        $input['address_id']=$input['address_selection'];

        $newPayment->fill(['method'=>"COD",'amount'=>$PriceDetails['TotalSum']]);

        $User->payments()->save($newPayment);

        
        foreach ($User->cart as $key => $value) {
        
            $input['item_id']=$value['item_id'];
            $input['item_count']=$value['item_count'];
            $input['payment_id']=$newPayment->id;

            $newOrder=new Order();

            $newOrder->fill($input);


            $User->orders()->save($newOrder);

            Cart::find($value['id'])->delete();

        }

        return redirect()->back()->with(['complete'=>"true"]);
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
