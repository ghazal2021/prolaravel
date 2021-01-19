@extends('admin.layouts.master')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('comment-edit'))
        <div class="alert alert-success">{{session('comment-edit')}}</div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('comment-del'))
        <div class="alert alert-danger">{{session('comment-del')}}</div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('comment-acc'))
        <div class="alert alert-success">{{session('comment-acc')}}</div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('comment-rej'))
        <div class="alert alert-danger">{{session('comment-rej')}}</div>
    @endif

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CM</th>
            <th scope="col">POST</th>
            <th scope="col">STATUS</th>
            <th scope="col">STATUS+</th>
            <th scope="col">DATE</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>


        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->id}}

                <td><a href="{{route('comments.show',$comment->id)}}">{{Str::limit($comment->description,20,'(...)')}}</a></td>
                <td>{{$comment->post->title}}</td>

<td>
    @if($comment->status==0)
        Active
    @else
    Inactive
        @endif

</td>
                    <td>
                        @if($comment->status == 0)
                            <a href="{{route('comments.actions',$comment->id)}}" class="btn btn-success">Active</a>
                    @else
                            <a href="{{route('comments.actions',$comment->id)}}" class="btn btn-danger">Inactive</a>
                        @endif
                    </td>

                <td>{{$comment->created_at}}</td>

                <td><a href="{{route('comments.edit', $comment->id)}}" class="btn btn-warning">Edit</a></td>
                <td> <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method"  value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form></td>

            </tr>
        @endforeach
        </tbody>
    </table>






@endsection
