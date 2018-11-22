@extends('layouts.main') 
@section('content')
<div class="row">
    <div class="col-8">

        <div class="card mt-5">
            <div class="card-header">
                My Cart
            </div>
            <div class="card-body">
                @component('components.cart_list',['CartList'=>$CartList,"ButtonsVisible"=>true]) @endcomponent
            </div>
        </div>
    </div>
    <div class="col-4">

        <div class="card mt-5">
            <div class="card-header">
                Price Details
            </div>
            <div class="card-body">
                @component('components.cart_price',["PriceDetails"=>$PriceDetails]) @endcomponent
                <div class="mt-3">
                    <button class="btn btn-primary btn-block">Place Order</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection