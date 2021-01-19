@extends('frontend.layouts.master')

@section('head')
    <meta name="description" content="{{$post->meta_description}}">
    <meta name="keywords" content="{{$post->meta_keywords}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection

@section('navigation')
    @include('partials.navigation',['categories'=>$categories])
@endsection

@section('content')

    @if(\Illuminate\Support\Facades\Session::has('add-cm'))
        <div class="alert alert-success">{{session('add-cm')}}</div>
    @endif

    <div class="post-box  mb-5">

        <h2 class="my-2">{{$post->title}}</h2>
        <h4>Written By: {{$post->user->name}}</h4>
        <hr>
        <h4>Date:{{$post->created_at}}</h4>
        <hr>
        <img src="{{$post->photo->path}}" alt="" width="500px" height="300px" style="border-radius: 15px">
        <p class="mt-4" style="line-height: 28px;padding: 10px 55px 10px 0;">
            {{$post->description}}
        </p>


    </div><!---end post box ---->
    <!--------------------------comment from---------------------------->
    <h4 class="text-center mt-5"> What Do Your Think ?</h4>
    <hr style="background: #09849e; width: 300px; height: 0.5px;">
    <form method="POST" action="{{route('frontend.comments.store',$post->id)}}">
        @csrf
        <div class="form-group">

            <input type="text" class="form-control" name="name" placeholder="name">

        </div>
        <div class="form-group">

            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <!-----------------------comment from END---------------------------->
    <h4 class="text-center mt-5"> Other Comments:</h4>
    <hr style="background: #09849e; width: 300px; height: 1.5px;">
    <!-----------------------------------comment---------------------->

        @include('partials.comments',['comments'=>$post->comments,'post'=>$post])



@endsection

@section('sidebar')
    @include('partials.sidebar',['categories'=> $categories])
@endsection

