@extends('admin.layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{asset('/css/dropzone.css')}}">
@endsection
@section('content')
    <div class="create-box-post" style="width: 60%;margin:0 auto">
        <h2 style="text-align: center;padding: 10px 0 30px">ADD PHOTO </h2>
        <form action="{{url('admin/photos')}}" method="POST" enctype="multipart/form-data" class="dropzone">
            @csrf





        </form>





    </div>

@endsection
@section('scripts')
    <script src="{{asset('/js/dropzone.js')}}"></script>
@endsection
