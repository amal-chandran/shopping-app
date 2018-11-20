@extends('layouts.main') 
@section('content')
<div>
    {!! Form::open(['action' => "ProductController@store"]) !!}
    <div>
    @include('products.product_details_form')
    </div>
    {!! Form::close() !!}
</div>
@endsection