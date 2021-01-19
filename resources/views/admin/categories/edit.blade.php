@extends('admin.layouts.master')
@section('content')
    <div class="create-box-users" style="width: 60%;margin:0 auto">
        <h2 style="text-align: center;padding: 10px 0 30px">EDIT USERS </h2>
        <form method="POST" action="/admin/category/{{$category->id}}" >
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name1" class="pb-1 pl-1">NAME</label>
                <input type="text" class="form-control"  name="name" id="name1" value="{{$category->name}}">
            </div>
            <div class="form-group">
                <label for="slug1" class="pb-1 pl-1">SLUG</label>
                <input type="text" class="form-control" name="slug" id="slug1" value="{{$category->slug}}">
            </div>

            <div class="form-group">
                <label for="meta-des" class="mb-2">Meta_description</label>
                <textarea class="form-control" id="meta-des" rows="3" name="meta_description">{{$category->meta_description}}</textarea>
            </div>
            <div class="form-group">
                <label for="meta-key" class="mb-2">Meta_keywords</label>
                <textarea class="form-control" id="meta-key" rows="3" name="meta_keywords">{{$category->meta_keywords}}</textarea>
            </div>




                <button type="submit" name="submit" class="btn btn-warning btn-block mb-5">EDIT</button>

        </form>


        <form action="/admin/category/{{$category->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" name="delete" class="btn btn-danger btn-block mb-5">DELETE</button>
        </form>

    </div>

@endsection
