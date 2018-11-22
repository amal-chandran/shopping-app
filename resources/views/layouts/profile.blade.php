@extends('layouts.main') 
@section('content')

<div class="row">
    <div class="col-3">
        <div class="dropdown-menu dropdown-menu-static">
            <h4 class="dropdown-header">Account Settings</h4>

            <a class="dropdown-item {{request()->is('profile')?'active':'' }}" href="
                {{ action('ProfileController@index') }}
                ">Profile Information</a>
            <a class="dropdown-item dropdown-item-main" href="#">My Orders</a>
            <a class="dropdown-item {{request()->is('profile/*/address/*')?'active':'' }}" href="{{ action('AddressController@index',['id'=>Auth::id()]) }}">Manage Address</a>
            <a class="dropdown-item" href="#">Logout</a>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                @yield('content_title')
            </div>
            <div class="card-body">
                @yield('content_profile')
            </div>
        </div>
    </div>
</div>
@endsection