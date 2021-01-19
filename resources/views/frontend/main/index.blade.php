@extends('frontend.layouts.master')
@section('head')
    <meta name="description" content=" my weblog that you can find so many amazing things here ">
    <meta name="keywords" contenet=" china , lnguage, english , culture, chinese food , ">
@endsection
@section('navigation')

@include('partials.navigation',['categories'=>$categories])
@endsection
@section('content')
    <h3 class="mt-3 mb-3">Latest Posts</h3>
    @foreach($posts as $post)
        <div class="post-box ">

            <h5 class="my-2"><a href="{{route('frontend.posts.show',$post->slug)}}">{{$post->title}}</a></h5>
            <h6>Written By:{{ $post->user->name}}</h6>
            <hr>
            <h6>Date: {{$post->created_at}}</h6>
            <hr>
            <a href="{{route('frontend.posts.show',$post->slug)}}"><img src="{{$post->photo->path}}" alt="" width="650px" height="350px" style="border-radius: 15px"></a>
            <p class="mt-4" style="line-height: 28px;padding: 10px 55px 10px 0;">
                {{Str::limit($post->description, 150, ' (...)')}} </p>
            <div class="btn-box d-flex justify-content-end">
                <a class="btn btn-primary" href="{{route('frontend.posts.show',$post->slug)}}" role="button"
                   style="margin-right: 80px;">Read
                    More...</a>

            </div>
        </div><!---end post box ---->
        <hr class="mb-4">

    @endforeach
    <div class="col-12">
        {{$posts->links()}}
    </div>
@endsection
<!----------------- sidebar start from here ------------>
@section('sidebar')
@include('partials.sidebar',['categories'=>$categories])

@endsection

