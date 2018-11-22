@extends('layouts.main') 
@section('content') {!! Form::open(['action' => "OrderController@store", 'files' => true]) !!}

<div id="smartwizard">
    <ul>
        <li><a href="#step-1">Delivay Address<br /><small>Select Delivay Address</small></a></li>
        <li><a href="#step-2">Order Summary<br /><small>Summary of Order</small></a></li>
        <li><a href="#step-3">Payment<br /><small>Select payment option</small></a></li>
        <li><a href="#step-4">Order Status<br /><small>Completion step</small></a></li>
    </ul>

    <div>

        <div id="step-1" class="">
            @component('components.address_list',["Address" => $Address,"ButtonsVisible"=>false]) @endcomponent
        </div>
        <div id="step-2" class="">
            <div class="m-4">
                @component('components.cart_list',['CartList'=>$CartList,"ButtonsVisible"=>false]) @endcomponent
            </div>
        </div>
        <div id="step-3" class="">
            <div class="row m-5">
                <div class="col-8">
                    <div class="accordion border-bottom" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-black" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Cash On Delivay
                                      </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    The Payment Will be Collected in Delivay site
                                    <div class="mt-2">
                                        <button class="btn btn-primary">
                                            Make Payment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    @component('components.cart_price',['PriceDetails'=>$PriceDetails]) @endcomponent

                </div>
            </div>
        </div>

        <div id="step-4" class="">
            Order Placed check orders for more details

        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection