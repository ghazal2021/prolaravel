@extends('admin.layouts.master')
@section('content')

    <div class="users-list-table">
        @if(\Illuminate\Support\Facades\Session::has('add_cat'))
            <div class="alert alert-success">
                <p>{{session('add_cat')}}</p>

            </div>
        @endif
            @if(\Illuminate\Support\Facades\Session::has('ed_cat'))
                <div class="alert alert-success">
                    <p>{{session('ed_cat')}}</p>

                </div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('del_cat'))
                <div class="alert alert-danger">
                    <p>{{session('del_cat')}}</p>

                </div>
            @endif

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">SLUG</th>
                <th scope="col">META_DES</th>
                <th scope="col">META_KEY</th>
                <th scope="col">EDIT</th>
                <th scope="col">DELETE</th>


            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->meta_description}}</td>
                    <td>{{$category->meta_keywords}}</td>
                    <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-warning">EDIT</a></td>

                    <td>
                        <form action="{{route('category.destroy',$category->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method"  value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
