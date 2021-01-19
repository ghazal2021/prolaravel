@extends('admin.layouts.master')
@section('content')
    <div class="create-box-users" style="width: 60%;margin:0 auto">
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach()
                </ul>
            </div>
        @endif
        <h2 style="text-align: center;padding: 10px 0 30px">ADD CATEGORY </h2>
        <form action="{{url('admin/category')}}" method="POST" >
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Category">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="slug" placeholder="slug">
            </div>

            <div class="form-group">
                <label for="meta-des" class="mb-2">Meta_description</label>
                <textarea class="form-control" id="meta-des" rows="3" name="meta_description"></textarea>
            </div>
            <div class="form-group">
                <label for="meta-key" class="mb-2">Meta_keywords</label>
                <textarea class="form-control" id="meta-key" rows="3" name="meta_keywords"></textarea>
            </div>

            <button type="submit" name= "submit" class="btn btn-primary btn-block mb-5">Submit</button>

        </form>



    </div>







@endsection
