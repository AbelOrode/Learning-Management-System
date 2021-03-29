@extends('layouts.master')
@section('title') Product @endsection
@section('content')
    <header class="masthead" style="background-size: cover; background-position: center; background-attachment: fixed; min-height: 50vh; background-image: url({{asset('backend/images/background-2.jpg')}})">
        <div class="overlay"></div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h2>E-Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($products->thumbnail) }}" alt="">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $products->title }}</h2>
                    </div>
                    <div class="card-body">
                        {{ $products->description }}
                    </div>
                    <div class="card-footer">
                        USD{{ $products->price }}
                        <br><br>
                    </div>
                    <a target="_blank" href="{{ route('shop.orderProduct', $products->id) }}" class="btn btn-primary">Checkout with Paypal</a>
                </div>
                <hr>

            </div>
        </div>
    </div>
@endsection
