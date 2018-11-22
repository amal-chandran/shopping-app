@extends('layouts.profile') 
@section('content_title',"Edit Address") 
@section('content_profile') {!! Form::model($AddressData,['action'
=> ["AddressController@update",Route::current()->parameter('id'),$AddressData->id],"method"=>"put", 'files' => true]) !!}
    @include('profile.address.address_details_form') {!! Form::close() !!}
@endsection