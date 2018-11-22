<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $CartList=User::with("cart.product.file_bucket.files")->find(Auth::id())->cart;

        // $CartList=Auth::user()->cart;
        $PriceDetails=array();

        $TotalPrice=0;

        foreach ($CartList as $key => $value) {
            $TotalPrice+=$value['product']['price'];
        }

        $PriceDetails['Total']=$TotalPrice;
        $PriceDetails['Delivary']=200;
        $PriceDetails['TotalSum']= $PriceDetails['Delivary']+$PriceDetails['Total'];

        return view("cart.cart_index")->with(['CartList'=>$CartList,"PriceDetails"=>$PriceDetails]);
    }

    public function addItem($id)
    {
       $CartItem= Cart::firstOrNew(["item_id"=>$id,"user_id"=>Auth::id()],["item_count"=>1]);

$CartItem->save();

        return redirect()->action("CartController@index");        
    }
    public function setQuantity(Request $request,$id)
    {
        $Operation=$request->input("operation");

        $SelectedCart=Cart::find($id);
        if($Operation=="+"){
            $SelectedCart->item_count=$request->input('item_count')+1;
        }elseif($Operation=="-"){
            $SelectedCart->item_count=$request->input('item_count')-1;
        }

        $SelectedCart->save();

        return redirect()->back();

    }

    public function destroy($id)
    {
        $SelectedCart=Cart::find($id);
$SelectedCart->delete();
return redirect()->back();

    }
}
