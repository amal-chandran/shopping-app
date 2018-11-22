@extends('layouts.profile') 
@section('content_title',"Manage Address") 
@section('content_profile')
<a href="{{ action('AddressController@create',[Route::current()->parameter('id')]) }}" class="btn btn-primary  ml-auto mb-4">Add Address</a>
<div class="list-group">
    @foreach ($Address as $item)
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex justify-content-between">
            <div>
                {{-- {{Route::getOption()}} --}}
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$item['name']}}
                        <div class="ml-2 h-6 d-inline-block font-weight-normal">
                            {{$item['mobile']}}
                        </div>

                    </h5>
                </div>
                <div>
                    {{$item['address']}} ,{{$item['city']}}, {{$item['state']}}
                </div>
                <div><b>{{$item['pin']}}</b></div>
            </div>
            <div class="d-flex flex-column">
                <a href=" {{ action('AddressController@edit',[Route::current()->parameter('id'),$item['id']]) }}" class="btn mb-1 btn-warning">
        Edit       
        </a> {!! Form::open(['action' => ["AddressController@destroy",Route::current()->parameter('id'),$item['id']],"method"=>"delete",
                'files' => true]) !!} {{Form::submit('Delete' ,['class' => 'btn btn-danger' ])}} {!! Form::close() !!}

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection