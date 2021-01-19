@extends('admin.layouts.master')
@section('content')



    <h4>Post : {{$comment->post->title}}</h4>
    <hr>
    <div class="row d-flex align-items-center">
        <div class="col-2"><img src="{{$comment->post->user->photo->path}}" width="90" height="90" alt=""
                                style="border-radius: 50%;"></div>
        <div class="col-2"><h4>User ({{$comment->post->user->name}}) Said:</h4></div>
        <div class="col-2">
            @if($comment->status == 0)
                <div class="badge badge-success  p-2">Active</div>
            @else
                <div class="badge badge-danger p-2">Inactive</div>
            @endif

        </div>
        <div class="col-3">{{$comment->created_at}}</div>
    </div>

    <hr>
    <p>{{$comment->description}}</p>

    <div class="back mt-5"><a href="{{route('comments')}}" class="btn btn-info"> Back</a></div>
@endsection
