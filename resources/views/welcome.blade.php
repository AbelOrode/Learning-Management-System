
@extends('layouts.master')

@section('title')Welcome to the best e-learning platform @endsection

@section('content')
    <header class="masthead" style="background-size: cover; background-position: center; background-attachment: fixed; min-height: 100vh; background-image: url({{asset('backend/images/background.jpg')}})">
        <div class="overlay"></div>
        <div class="container p-5">

            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading mb-4">
                        <h2><span class="text-uppercase"><b>you have a vision</b></span><br></h2>
                        <p class="lead d-none d-sm-block text-uppercase">we have a way to get you there</p>
                        <p class="lead"><a class="btn btn-lg  btn-bold btn-outline-info" href="{{ route('register') }}">Get Started</a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="{{route('singlePost', $post->id)}}">
                            <h5 class="post-title">
                                {{ $post->title }}
                            </h5>
                        </a>
                        <p class="post-meta">
                            <a href="#">{{$post->user->name}} ({{$post->user->usertype}})</a>
                            on <span>{{date_format($post->created_at, 'F d, Y')}}</span> &nbsp;
                            | <i class="fa fa-fw fa-comment" aria-hidden="true">&nbsp;{{$post->comments->count()}}</i>
                        </p>
                    </div>
                    <hr>
            @endforeach
{{--            {{$posts->links()}}--}}
            </div>
        </div>
    </div>
@endsection
