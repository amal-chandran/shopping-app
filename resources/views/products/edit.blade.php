@extends('layouts.main') 
@section('content')
<div>
    {!! Form::model($ProductData,['action' => ["ProductController@update",$ProductData->id],"method"=>"put"], 'files' => true)
    !!}
    <div>
    @include('products.product_details_form')
    </div>
    {!! Form::close() !!}
</div>
@endsection