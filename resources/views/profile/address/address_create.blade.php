@extends('layouts.profile') 
@section('content_title',"Create Address") 
@section('content_profile') {!! Form::open(['action'
=> ["AddressController@store",Route::current()->parameter('id')],"method"=>"post", 'files' => true]) !!}
    @include('profile.address.address_details_form')
{!! Form::close() !!}
@endsection