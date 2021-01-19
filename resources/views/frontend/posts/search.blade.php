@extends('frontend.layouts.master')
@section('navigation')
@include('partials.navigation',['categories'=>$categories])
@endsection
@section('content')
    <h3 class="mt-3 mb-3">The result for your search : {{$query}}</h3>
    @foreach($posts as $post)
        <div class="post-box ">

            <h5 class="my-2">{{$post->title}}</h5>
            <h6>Written By:{{ $post->user->name}}</h6>
            <hr>
            <h6>Date: {{$post->created_at}}</h6>
            <hr>
            <img src="{{$post->photo->path}}" alt="" width="650px" height="350px" style="border-radius: 15px">
            <p class="mt-4" style="line-height: 28px;padding: 10px 55px 10px 0;">
                {{$post->description}} </p>

        </div><!---end post box ---->
        <hr class="mb-4">

    @endforeach

@endsection
<!----------------- sidebar start from here ------------>
@section('sidebar')
    @include('partials.sidebar',['categories'=>$categories])

@endsection

