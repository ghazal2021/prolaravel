@extends('admin.layouts.master')
@section('content')
    <div class="edit-box-posts" style="width: 60%;margin:0 auto">
        <h2 style="text-align: center;padding: 10px 0 30px">EDIT POST </h2>
        <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group"><!--- TITLE   ----->
                <label for="posttitle" >Title</label>
                <input type="text" class="form-control mt-2" id="posttitle" name="title"
                       value="{{$post->title}}">
            </div>
            <div class="form-group"><!---  SLUG  ----->
                <label for="postslug">Slug</label>
                <input type="text" class="form-control mt-2" id="postslug" name="slug"  value="{{$post->slug}}" >
            </div>
            <div class="form-group"><!--- CATEGORY   ----->

                <label for="postCategory">Category</label>
                <select class="form-control mt-2 mb-4" id="postCategory" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group pt-2"><!--- status   ----->
                <label for="exampleFormControlSelect1" class="pb-1 pl-1">STATUS</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                    <option value="0">ACTIVE</option>
                    <option value="1">DIACTIVE</option>
                </select>
            </div>


                <div class="form-group mt-4 "><!---  old photo img  ----->
                    <img src="{{$post->photo->path}}" width="300" height="200" alt="">
               </div>
                <div class="form-group"><!---  old photo name  ----->
                    <input type="text" class="form-control mt-2" value="{{$post->photo->path}}" disabled >
               </div>
                <div class="form-group mb-4"><!--- PHOTO   ----->
                    <label for="postPhoto">Image</label>
                    <input type="file" class="form-control-file mt-2" id="postPhoto" name="photo_id">
                </div>
                <div class="form-group"><!--- DESCRIPTION   ----->
                    <label for="postdescription">Description</label>
                    <textarea class="form-control mt-2" id="postdescription" rows="3" name="description"> {{$post->description}}</textarea>
                </div>

                <div class="form-group"><!--- META_DESCRIPTION   ----->
                    <label for="postMetaDescription">Meta_description</label>
                    <textarea class="form-control mt-2" id="postMetaDescription" rows="3" name="meta_description"> {{$post->meta_description}}</textarea>
                </div>
                <div class="form-group"><!--- META_KEYWORDS   ----->
                    <label for="postMetaKeywords">Meta_keywords</label>
                    <textarea class="form-control mt-2" id="postMetaKeywords" rows="3" name="meta_keywords"> {{$post->meta_keywords}}</textarea>
                </div>


                <button type="submit" class="btn btn-success btn-block mb-5">EDIT</button>
        </form>

        <form action="/admin/posts/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-block">DELETE</button>

        </form>


    </div>

@endsection
