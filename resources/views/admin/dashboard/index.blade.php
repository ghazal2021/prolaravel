@extends('admin.layouts.master')
@section('content')

    <div class="box2-cards ">
        <div class="row">
            <!-- card 1 --->
            <div class="col-6 col-sm-6 col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <h3 class="card-title">{{$postsCount}}</h3>
                        <p class="card-text">Posts</p>
                        <canvas id="Chart1" class="w-100" height="85"></canvas>
                    </div>
                </div>
            </div>
            <!-- card 2 --->
            <div class="col-6 col-sm-6 col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h3 class="card-title">{{$categoriesCount}}</h3>
                        <p class="card-text">Categories</p>
                        <canvas id="Chart2" class="w-100" height="85"></canvas>
                    </div>
                </div>
            </div>
            <!-- card 3 --->
            <div class="col-6 col-sm-6 col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h3 class="card-title">{{$photosCount}}</h3>
                        <p class="card-text">Files</p>
                        <canvas id="Chart3" class="w-100" height="85"></canvas>
                    </div>
                </div>
            </div>
            <!-- card 4 --->
            <div class="col-6 col-sm-6 col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h3 class="card-title">{{$usersCount}}</h3>
                        <p class="card-text">Users</p>
                        <canvas id="Chart4" class="w-100" height="85"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- row caro box-->
    </div><!----box2-cards--->
    <!--------------------------------------------- card End from here ------------------------------------>
    <div class="row row3  mt-5 mb-5">
        <div class="col-12 col-md-6 ">
            <h3 class="mb-3">Latest Posts</h3>

            <table class="table table-striped">
                <thead class="thead-dark">

                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Date</th>

                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>

                        <td>{{$post->title}}</td>
                        <td>{{$post->category->name}}</td>
                        <td>{{$post->created_at}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!---- last Post Table END---->

        <div class="col-12 col-md-6">
            <h3 class="mb-3">Users</h3>
            <table class="table table-striped">
                <thead class="thead-dark">

                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">status</th>
                    <th scope="col">Date</th>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><img src="{{$user->photo->path}}" width="50" height="50" alt="" style="border-radius: 50%">
                        </td>
                        <td>{{$user->name}}</td>
                        <td>
                            @if($user->status== 1)
                                <span class="badge badge-success p-2">Active</span>
                            @else
                                <span class="btn btn-danger p-2">Inactive</span>
                            @endif
                        </td>
                        <td>{{$user->created_at}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!----last Users Table END---->
    </div><!--- row3 ---->

    <div class="footer d-flex align-items-end ">
        <p>2020 CreativeLabsPowered by Ghazal </p>
    </div>


@endsection
