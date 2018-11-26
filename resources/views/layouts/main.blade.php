@extends('layouts.struct') 
@section('body')
    @include('components.main-nav')
    @include('components.sub-nav')

<div class="container pb-2">
    @yield("content")
</div>

<div class="px-4">
    @yield("content2")
</div>
@endsection