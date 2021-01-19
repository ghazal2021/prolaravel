@extends('admin.layouts.master')
@section('content')
    <div class="create-box-users" style="width: 60%;margin:0 auto">
        <h2 style="text-align: center;padding: 10px 0 30px">EDIT USERS </h2>
        <form method="POST" action="/admin/users/{{$user->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name1" class="pb-1 pl-1">NAME</label>
                <input type="text" class="form-control"  name="name" id="name1" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email1" class="pb-1 pl-1">EMAIL</label>
                <input type="email" class="form-control" name="email"id="email1" value="{{$user->email}}">

                <div class="form-group pt-2">
                    <label for="exampleFormControlSelect1" class="pb-1 pl-1">STATUS</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                        <option value="1">ACTIVE</option>
                        <option value="0">DIACTIVE</option>
                    </select>
                </div>


                <div class="form-group">
                    <div class="form-check  ">
                        @foreach($roles as $role)
                            <input class="form-check-input  " type="checkbox" id="{{$role->name}} "
                                   value="{{$role->id}}" name="roles[]"
                                   @isset($user)
                                   @if(in_array($role->id,$user->roles->pluck('id')->toArray()))
                                   checked
                            @endif
                            @endisset>
                            <label class="form-check-label " for="{{$role->name}}"
                                   style="display: block"> {{$role->name}}</label>
                        @endforeach
                    </div>
                </div>


                <div class="form-group d-flex justify-content-center">
                    <img src="{{$user->photo->path}}" width="200" height="200" alt="">
                </div>
                <div class="form-group d-flex justify-content-center">
                    <input type="text" value="{{$user->photo->path}} " disabled style="border:none; width: 100%">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="photo_id">
                </div>


                <button type="submit" name="submit" class="btn btn-warning btn-block mb-5">EDIT</button>

        </form>


        <form action="/admin/users/{{$user->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" name="delete" class="btn btn-danger btn-block mb-5">DELETE</button>
        </form>

    </div>

@endsection
