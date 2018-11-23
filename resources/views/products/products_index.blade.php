@extends('layouts.main') 
@section('content')
<div class="mt-1 ">
    <div class="row">
        <div class="col-sm-3  m-2">
            <div style="height:500px" class="border p-3 bg-white shadow-sm">
                <h5 class="border-bottom pb-3">Filters</h5>
                <div>
                    <h6>RAM</h6>
                    @for ($i = 2; $i
                    <=6; $i++) <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck{{$i}}">
                        <label class="custom-control-label" for="customCheck{{$i}}">{{$i}}GB</label>
                </div>
                @endfor
                <div>
                    <h6 class="mt-3">Brand</h6>
                    @foreach (array( "Honor", "Huawei", ) as $item)
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck{{$item}}">
                        <label class="custom-control-label" for="customCheck{{$item}}">{{$item}}GB</label>
                    </div>
                    @endforeach

                </div>
                <div>
                    <h6 class="mt-3">Customer Ratings</h6>
                    @foreach (array( "4★ & above", "3★ & above", "2★ & above", "1★ & above", ) as $item)
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck{{$item}}">
                        <label class="custom-control-label" for="customCheck{{$item}}">{{$item}}GB</label>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm row bg-white border shadow-sm m-2">
        @foreach ($ProductList as $item)

        <div style="max-height:20rem;" class="col-sm-12 border-bottom p-3">
            <a class="no_effect col-sm" href="{{ action('ProductController@show', ['id'=>$item->id]) }}">
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

                        <ul style="font-size: .86rem;">
                            <li class="text-muted">EMI starting from ₹266/month</li>
                            <li class="text-muted">Cash on Delivery</li>
                            <li class="text-muted">Net banking & Credit/ Debit/ ATM card</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection