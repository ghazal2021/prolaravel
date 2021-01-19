@extends('admin.layouts.master')
@section('content')



    <div class="posts-list-table">
        <table class="table">
            <thead class=" thead thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">USER</th>
                <th scope="col">PHOTO</th>
                <th scope="col">DATE</th>
                <th scope="col">DELETE</th>



            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)
            <tr>
                <td>{{$photo->id}}</td>
                <td>{{$photo->user->name}}</td>
                <td><img src="{{$photo->path}}" alt="" width="70" height="70"></td>
                <td>{{$photo->created_at}}</td>

                <td>
                    <form action="{{route('photos.destroy',$photo->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button  type="submit" class="btn btn-danger">DELETE</button>

                    </form>
                </td>

            </tr>
            @endforeach

            </tbody>

        </table>


    </div>
<div class="box-pag col-12  d-flex justify-content-center mt-5 ">
   <div class="pagi">
       {{$photos->links()}}
   </div>
</div>

@endsection

