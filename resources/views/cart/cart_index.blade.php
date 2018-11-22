@extends('layouts.main') 
@section('content')
<div class="row">
    <div class="col-8">

        <div class="card mt-5">
            <div class="card-header">
                My Cart
            </div>
            <div class="card-body">
                @foreach ($CartList as $item)
                <div class="row mb-2 mx-1 mb-3 border-bottom pb-3">
                    <div class="col-3 d-flex flex-column align-items-center justify-content-center">
                        <img style="max-height: 200px;max-width: 250px" src="{{asset('storage/'.$item['product']['file_bucket']['files'][0]['file_path']) }}"
                            alt="" srcset="">
                    </div>
                    <div class="col d-flex flex-column justify-content-between">
                        <div>
                            <h4>
                                {{$item['product']['product_name']}}
                            </h4>
                            <h6>
                                {{$item['product']['price']}}
                            </h6>
                        </div>
                        {!! Form::model($item,['action' => ["CartController@setQuantity","id"=>$item['id']],"method"=>"post"])!!}
                        <div class="input-group input-group-sm align-self-end">
                            <div class="input-group-prepend" id="button-addon3">
                                {{Form::submit('-' ,['class' => 'btn px-3 font-weight-bold btn-info',"name"=>"operation" ])}}

                            </div>
                            {{Form::text('item_count',null ,[ "class"=>"form-control text-center", "aria-label"=>"Example text with two button addons",
                            "aria-describedby"=>"button-addon3" ])}} {{-- <input type="text"
                                class="form-control" placeholder="" aria-label="Example text with two button addons" aria-describedby="button-addon3">                            --}}
                            <div class="input-group-append" id="button-addon3">
                                {{Form::submit('+' ,['class' => 'btn px-3 font-weight-bold btn-info',"name"=>"operation" ])}}

                            </div>
                        </div>
                        {!! Form::close() !!}


                    </div>
                    <div class="col" style="
                    height: 100%;
                    font-size: .6rem;
                ">
                        {!!$item['product']['small_desc']!!}

                    </div>
                    <div class="col d-flex align-items-end justify-content-end">
                        {!! Form::open(['action' => ["CartController@destroy","id"=>$item['id']],"method"=>"post"])!!} {{Form::submit('Remove' ,['class'
                        => 'btn btn-danger',"name"=>"operation" ])}} {!! Form::close() !!}

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-4">

        <div class="card mt-5">
            <div class="card-header">
                Price Details
            </div>
            <div class="card-body">
                <div style="border-bottom: 1px dashed gray;padding-bottom:.8rem;margin:0px;" class="row">
                    <div class="col-6">Price</div>
                    <div class="col-6">{{$PriceDetails['Total']}}</div>
                    <div class="col-6">Delivary</div>
                    <div class="col-6">{{$PriceDetails['Delivary']}}</div>
                </div>
                <div style="padding-top:.8rem;margin:0px;" class="row">
                    <div class="col-6">Amount Payable</div>
                    <div class="col-6">{{$PriceDetails['TotalSum']}}</div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary btn-block">Place Order</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection