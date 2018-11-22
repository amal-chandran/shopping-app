@extends('layouts.main') 
@section('content')
<div class="mt-4 border shadow-sm bg-white p-4">

    <div class="row">
        <div class="d-flex justify-content-center align-items-center col-6">
            @if (!empty($ProductData['file_bucket']))
            <div>
                @foreach ($ProductData['file_bucket']['files'] as $item)

                <img style="max-height: 400px;max-width: 400px" src="{{ asset('storage/'.$item['file_path']) }}"> @endforeach
            </div>
            @endif
        </div>
        <div class="col-6 border-left">
            <h4>
                {{$ProductData['product_name']}}
            </h4>

            <div class="row">
                <div class="col-3 text-muted font-weight-bold">Price</div>
                <div class="col-9">{{$ProductData['price']}}</div>

                <div class="col-3 text-muted font-weight-bold">Highlights</div>
                <div class="col-9">{!!$ProductData['small_desc']!!}</div>
                <div class="col-12">
                    <div class="d-flex justify-content-between mt-3 align-items-center">
                        {!! Form::open(['action' => ["CartController@addItem","id"=>$ProductData['id']],]) !!} {{Form::submit('ADD TO CART' ,['class'
                        => 'btn py-3 font-weight-bold btn-primary btn-block mr-4',"name"=>"operation" ])}} {!! Form::close()
                        !!}

                        <button class="btn py-3 font-weight-bold btn-primary btn-block mt-0">BUY NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection