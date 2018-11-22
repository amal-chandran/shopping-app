@extends('layouts.main') 
@section('content')
<div>
    {!! Form::open(['action' => "ProductController@store", 'files' => true]) !!}
    <div>
    @include('products.product_details_form')
    </div>
    {!! Form::close() !!}
</div>
@endsection