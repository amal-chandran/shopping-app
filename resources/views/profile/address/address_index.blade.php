@extends('layouts.profile') 
@section('content_title',"Manage Address") 
@section('content_profile')
<a href="{{ action('AddressController@create',[Route::current()->parameter('id')]) }}" class="btn btn-primary  ml-auto mb-4">Add Address</a>@component('components.address_list',["Address"
=> $Address,"ButtonsVisible"=>true]) @endcomponent
@endsection