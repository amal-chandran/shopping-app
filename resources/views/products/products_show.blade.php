@extends('layouts.main') 
@section('content')
<div class="mt-4 border shadow-sm bg-white p-4">

    <div class="row">
        <div class=" col-6">
            <div class="d-flex justify-content-center align-items-top">

                @if (!empty($ProductData['file_bucket']))
                <div>
                    @foreach ($ProductData['file_bucket']['files'] as $item)

                    <img style="max-height: 400px;max-width: 400px" src="{{ asset('storage/'.$item['file_path']) }}"> @endforeach
                </div>
                @endif
            </div>
            <h4 class="border-bottom pb-1">Review</h4>
            {!! Form::open(['action' => ["ReviewController@addReview","id"=>$ProductData['id']],"method"=>"post", 'files' => true]) !!}
    @include('review.review_form'){!! Form::close() !!} @component('components.review_list',['ReviewData'=>$ReviewData])
            @endcomponent

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
                        {!! Form::open(['action' => ["CartController@addItem","id"=>$ProductData['id']],'class'=>"w-100"]) !!} {{Form::submit('ADD
                        TO CART' ,['class' => 'btn py-3 font-weight-bold btn-primary btn-block mr-4',"name"=>"operation"
                        ])}} {!! Form::close() !!}

                        <button class="btn py-3 ml-2 font-weight-bold btn-primary btn-block mt-0">BUY NOW</button>
                    </div>
                </div>
                <div class="col-12">
                    {!!$ProductData['detailed_desc'] !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection