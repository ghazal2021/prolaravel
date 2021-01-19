@extends('admin.layouts.master')
@section('content')
    <div class="create-box-users" style="width: 60%;margin:0 auto">
        <h2 style="text-align: center;padding: 10px 0 30px">ADD USERS </h2>
        <form action="{{url('admin/users')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="email">

                <div class="form-group pt-2">
                    <label for="exampleFormControlSelect1" class="pb-1">Status</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                        <option value="1">ACTIVE</option>
                        <option value="0">DIACTIVE</option>
                    </select>
                </div>

                <div class="form-group">
                <div class="form-check  " >
                    @foreach($roles as $role)
<input class="form-check-input  " type="checkbox"  id="{{$role->name}} " value="{{$role->id}}" name="roles[]" >

                    <label class="form-check-label " for="{{$role->name}}" style="display: block"> {{$role->name}}</label>
                    @endforeach
                </div>
                </div>


            <div class="form-group">
                <input type="file" class="form-control" name="photo_id" >
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>

            <button type="submit" name= "submit" class="btn btn-primary btn-block mb-5">Submit</button>

        </form>



    </div>







@endsection
