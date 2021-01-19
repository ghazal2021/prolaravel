@extends('admin.layouts.master')
@section('content')

    <div class="users-list-table">
@if(\Illuminate\Support\Facades\Session::has('edit_user'))
    <div class="alert alert-warning" >
        <p>{{session('edit_user')}}</p>

    </div>
@endif

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">ROLES</th>
                <th scope="col">STATUS</th>
                <th scope="col">EDIT</th>
                <th scope="col">DELETE</th>


            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>

                    <td><img src="{{$user->photo ? $user->photo->path : "http://www.placehold.it/400"}}" style="border-radius: 15px" alt="" width="60" height="60"></td>
{{--                    @if($user->photo_id)--}}
{{--                    <td><img src="{{$user->photo->path}}" alt="" width="70" height="70" style="border-radius: 20px"> </td>--}}
{{--                     @else--}}
{{--                       <td><div class="imgone" style="width: 50px;height: 50px;background: darkgray;border-radius: 20px"></div></td>--}}
{{--                    @endif--}}


                    <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>

                    <td>
                        <ul>
                            @foreach($user->roles as $role)
                                <li>{{$role->name}}</li>
                            @endforeach
                        </ul>
                    </td>

                    <td>
                      @if($user->status == 0)
                        <span class="badge badge-danger" style="padding: 10px;font-size: 15px" >Diactive</span>
                          @else
                          <span  class="badge badge-success" style="padding: 10px;font-size: 15px;width: 75px">Active</span>
                          @endif


                    </td>

                    <td>
                        <form action="admin/users/{{$user->id}} " method="POST">
                            @csrf
                            <input type="hidden" name="_method"  value="PATCH">
                            <a href="/admin/users/{{$user->id}}/edit" class="btn btn-warning">EDIT</a>
                        </form>

                    </td>

                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
