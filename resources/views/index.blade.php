@extends('layouts.struct') 
@section('body')
<link rel="stylesheet" href="{{asset('css/cover.css')}}">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">{{ config('app.name', 'Basic') }}</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="{{ action('ProductController@index') }}">Products</a>
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">Cover your page.</h1>
    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own
      fullscreen background photo to make it your own.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">

  </footer>
</div>
@endsection