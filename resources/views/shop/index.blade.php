@extends('layouts.master')

@section('content')
    <header class="masthead" style="background-size: cover; background-position: center; background-attachment: fixed; min-height: 50vh; background-image: url({{asset('backend/images/background-2.jpg')}})">
        <div class="overlay"></div>
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h2 class="display-3"><span class="text-uppercase"><b>E-Shop</b></span><br></h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($products as $product)
                    <div class="post-preview">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset($product->thumbnail) }}" width="100" alt="">
                            </div>
                            <div class="col-md-9">
                                <a href="{{route('shop.singleProduct', $product->id)}}">
                                    <h5 class="post-title">
                                        {{ $product->title }}
                                    </h5>
                                </a>
                                <p class="post-meta">{{ $product->price }} USD</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                {{--            {{$posts->links()}}--}}
            </div>
        </div>
    </div>
@endsection
