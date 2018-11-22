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
        @if ($ButtonsVisible) {!! Form::model($item,['action' => ["CartController@setQuantity","id"=>$item['id']],"method"=>"post"])!!}
        <div class="input-group input-group-sm align-self-end">
            <div class="input-group-prepend" id="button-addon3">
                {{Form::submit('-' ,['class' => 'btn px-3 font-weight-bold btn-info',"name"=>"operation" ])}}

            </div>
            {{Form::text('item_count',null ,[ "class"=>"form-control text-center", "aria-label"=>"Example text with two button addons",
            "aria-describedby"=>"button-addon3" ])}} {{-- <input type="text" class="form-control" placeholder=""
                aria-label="Example text with two button addons" aria-describedby="button-addon3"> --}}
            <div class="input-group-append" id="button-addon3">
                {{Form::submit('+' ,['class' => 'btn px-3 font-weight-bold btn-info',"name"=>"operation" ])}}

            </div>
        </div>
        {!! Form::close() !!} @endif


    </div>
    <div class="col" style="
    height: 100%;
    font-size: .6rem;
">
        {!!$item['product']['small_desc']!!}

    </div>
    <div class="col d-flex align-items-end justify-content-end">
        @if ($ButtonsVisible) {!! Form::open(['action' => ["CartController@destroy","id"=>$item['id']],"method"=>"post"])!!} {{Form::submit('Remove'
        ,['class' => 'btn btn-danger',"name"=>"operation" ])}} {!! Form::close() !!} @endif

    </div>
</div>
@endforeach