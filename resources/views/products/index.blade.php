@extends('layouts.main') 
@section('content2')
<div class="mt-1 ">
    <div class="row">
        <div class="col-sm-3  m-2">
            <div style="height:500px" class="border bg-white shadow-sm">

            </div>
        </div>
        <div class="col-sm row bg-white border shadow-sm m-2">
            @foreach ($products_list as $item)
            <div style="min-height:20rem;" class="col-sm-12 border-bottom p-3">
                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm">
                        <h5 class="card-title">{{ $item['product_name']}}</h5>
                        <p class="card-text">
                            {{$item['small_desc']}}
                        </p>
                    </div>
                    <div class="col-sm">
                        <h5>
                            {{$item['price']}}
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection