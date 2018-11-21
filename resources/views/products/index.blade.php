@extends('layouts.main') 
@section('content2')
<div class="mt-1 ">
    <div class="row">
        <div class="col-sm-3  m-2">
            <div style="height:500px" class="border bg-white shadow-sm">

            </div>
        </div>
        <div class="col-sm row bg-white border shadow-sm m-2">
            @foreach ($ProductList as $item)

            <a class="no_effect" href="{{ action('ProductController@show', ['id'=>$item->id]) }}">
                <div style="max-height:20rem;" class="col-sm-12 border-bottom p-3">
                    <div class="row">
                        <div class="d-flex justify-content-center  align-items-center col-sm-3">

                            <img style="max-height: 250px;max-width: 250px" src="{{asset('storage/'.$item['file_bucket']['files'][0]['file_path']) }}"
                                alt="" srcset="">

                        </div>
                        <div class="col-sm">
                            <h5 class="card-title">{{ $item['product_name']}}</h5>
                            <p class="card-text">
                                {!!$item['small_desc']!!}
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <h5>
                                {{$item['price']}}
                            </h5>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection