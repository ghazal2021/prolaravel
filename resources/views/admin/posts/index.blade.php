@extends('admin.layouts.master')
@section('content')

@if(\Illuminate\Support\Facades\Session::has('add_post'))
    <div class="alert alert-success">{{session('add_post')}}</div>
@endif
@if(\Illuminate\Support\Facades\Session::has('ed_post'))
    <div class="alert alert-info">{{session('ed_post')}}</div>
@endif

@if(\Illuminate\Support\Facades\Session::has('del_post'))
    <div class="alert alert-danger">{{session('del_post')}}</div>
    @endif

    <div class="posts-list-table">
        <table class="table">
            <thead class=" thead thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">TITLE</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">STATUS</th>
                <th scope="col">SLUG</th>


            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <td><a href="{{route('posts.edit',$post->id)}}"><img src="{{$post->photo->path}}"  width="70" height="70" alt=""></a></td>
                <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
                <td>{{$post->category->name}}</td>
                <td>{{Str::limit($post->description, 50, ' (...)')}}</td>
                <td>
                    @if($post->status==0)
                        <span class="badge badge-success p-2">Active</span>
                    @else
                    <span class="badge badge-danger p-2">Deactive</span>
                    @endif

                </td>
                <td>{{$post->slug}}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
