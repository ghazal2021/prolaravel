<!doctype html>
<html lang="en">
<head>
    @yield('styles')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!----css-----  >

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-------------dropzone ------------------->



    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />

    <!--------------------- font ----------->
    <!-- font-family: 'Lato', sans-serif; -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,700&display=swap" rel="stylesheet">

    <!------- links from mix-------->

    <link rel="stylesheet" href="{{ asset('css/all.css')}}">
    <script src="{{ asset('js/all.js')}}" type="application/javascript"></script>
    <title>Hello, world!</title>
</head>
<body>
<!----------------------------- start from here ------------------------------------------->



<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="#" data-toggle="collapse" data-target="#sidebar" aria-hidden="true">Admin Panel <i class="fa fa-angle-double-right ml-3 h5" data-toggle="collapse" data-target="#sidebar" aria-hidden="true"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-5">
            <li class="nav-item ">
                <a class="nav-link head" href="{{route('dashboard.index')}}">Dashboard<span class="iconify ml-2 " data-icon="simple-line-icons:speedometer" data-inline="false" style="color: green"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link head" href="#">Users <i class="fa fa-user ml-1" aria-hidden="true" style="color:#008cff"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link head" href="#">Setting<i class="fa fa-cog ml-1" aria-hidden="true" style="color:red"></i></a>
            </li>
        </ul>

    </div>

    <nav class="navbar navbar-nav d-none d-md-flex ">

        <!-------------------- drop down 1 bell -------------------------->
        <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="badge badge-pill badge-danger">5</span><i class="fa fa-bell ml-2 mr-2" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <!-------------------- drop down 2 tasks -------------------------->
        <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="badge badge-pill badge-info">8</span><i class="fa fa-tasks ml-2 mr-2" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <!-------------------- drop down 3 comment -------------------------->
        <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="badge badge-pill badge-success">3</span><i class="fa fa-comment ml-2 mr-2" aria-hidden="true "></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <!-------------------- drop down 4 img -------------------------->
        <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="" alt="" width="50" height="50" style="border-radius: 50%">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>

        </div>
    </nav><!---- end Nav right ---->
</nav><!--- nav left  end --->

<!------------------------------------------ end header --------------------------------------------->
<div class="container-fluid">
    <div class="row">
        <div  id="sidebar" class=" col-6  col-sm-5 col-md-2 side collapse show bg-dark ">
            <ul class="nav d-flex flex-column collapsed">

                <li class="nav-item py-2">
                    <a href="" class="nav-link" style="font-size: 1em">Hello Dear : Ghazal</a>
                </li>
                <!--1 user -->
                <li class="nav-item">
                    <a class="nav-link py-1" data-toggle="collapse" href="#submenu1" role="button" aria-expanded="false" aria-controls="submenu1">
                        <i class="fa fa-user mr-1" aria-hidden="true"></i> Users <i class="fa fa-chevron-down float-right" aria-hidden="true"></i>
                </li>
                <div class="collapse boxsubmenu" id="submenu1">
                    <a class="subitem  " href="{{route('users.create')}}"><i class="fa fa-user-plus mr-2 ml-2" aria-hidden="true"></i>Add User</a>
                    <a class="subitem" href="{{route('users.index')}}"> <i class="fa fa-users mr-2 ml-2" aria-hidden="true"></i>Users List</a>

                </div>
                <!--2 Post -->
                <li class="nav-item">
                    <a class="nav-link py-1 " data-toggle="collapse" href="#submenu2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-folder-open mr-1" aria-hidden="true"></i>  Posts <i class="fa fa-chevron-down float-right" aria-hidden="true"></i>
                </li>
                <div class="collapse boxsubmenu" id="submenu2">
                    <a class="subitem" href="{{route('posts.create')}}"><span class="iconify " data-icon="simple-line-icons:pencil" data-inline="false"></span><i class="fa fa-plus mr-2" aria-hidden="true"></i>New Post</a>
                    <a class="subitem" href="{{route('posts.index')}}"><i class="fa fa-folder mr-2 ml-2" aria-hidden="true"></i>Posts List</a>
                </div>
                <!-- 3 comment-->
                <li class="nav-item">
                    <a class="nav-link py-1" data-toggle="collapse" href="#submenu3" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-comment mr-1  " aria-hidden="true"></i> Comments <i class="fa fa-chevron-down float-right" aria-hidden="true"></i>
                </li>
                <div class="collapse boxsubmenu" id="submenu3">
                    <a class="subitem" href="{{route('comments.index')}}"><span class="iconify mr-2 ml-2" data-icon="simple-line-icons:bubbles" data-inline="false"></span>Comments List</a>
                    <a class="subitem" href=""><span class="iconify mr-2 ml-2" data-icon="simple-line-icons:bubbles" data-inline="false"></span>Edit Comment</a>
                </div>

                <!---4  category-->
                <li class="nav-item">
                    <a class="nav-link py-1" data-toggle="collapse" href="#submenu4" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="iconify mr-1" data-icon="simple-line-icons:grid" data-inline="false"></span> <i class="fa fa-align-center mr-1" aria-hidden="true"></i>Categories <i class="fa fa-chevron-down float-right" aria-hidden="true"></i>
                </li>
                <div class="collapse boxsubmenu" id="submenu4">
                    <a class="subitem" href="{{route('category.create')}}"><i class="fa fa-plus-square mr-2 ml-2" aria-hidden="true"></i>New Category</a>
                    <a class="subitem" href="{{route('category.index')}}"> <span class="iconify mr-2 ml-2" data-icon="simple-line-icons:list" data-inline="false"><i class="fa fa-list-ul" aria-hidden="true"></i></span> Category List</a>

                </div>
                <!--- 5 media-->
                <li class="nav-item">
                    <a class="nav-link py-1 " data-toggle="collapse" href="#submenu5" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="iconify mr-1" data-icon="simple-line-icons:camrecorder" data-inline="false"></span> Media <i class="fa fa-chevron-down float-right" aria-hidden="true"></i>
                </li>
                <div class="collapse boxsubmenu" id="submenu5">
                    <a class="subitem" href="{{route('photos.create')}}"> <span class="iconify mr-2 ml-2" data-icon="simple-line-icons:cloud-upload" data-inline="false"></span>Upload File</a>
                    <a class="subitem" href="{{route('photos.index')}}"> <span class="iconify mr-2 ml-2" data-icon="simple-line-icons:drawer" data-inline="false"></span>Files List</a>

                </div>
            </ul>
        </div><!---- col-2 ----->
        <div id="main-content" class="col-md-10 main-content col-12 p-4 ml-auto" style="width: 100%;">
        @yield('content')
            <!--------------------------------------------- card Start from here ------------------------------------>
{{--            <div class="box2-cards ">--}}
{{--                <div class="row">--}}
{{--                    <!-- card 1 --->--}}
{{--                    <div class="col-6 col-sm-6 col-md-3">--}}
{{--                        <div class="card text-white bg-info mb-3" >--}}
{{--                            <div class="card-body">--}}
{{--                                <h3 class="card-title">260</h3>--}}
{{--                                <p class="card-text">Posts</p>--}}
{{--                                <canvas id="Chart1" class="w-100" height="85"></canvas>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- card 2 --->--}}
{{--                    <div class="col-6 col-sm-6 col-md-3">--}}
{{--                        <div class="card text-white bg-success mb-3" >--}}
{{--                            <div class="card-body">--}}
{{--                                <h3 class="card-title">522</h3>--}}
{{--                                <p class="card-text">Categories</p>--}}
{{--                                <canvas id="Chart2" class="w-100" height="85"></canvas>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- card 3 --->--}}
{{--                    <div class="col-6 col-sm-6 col-md-3">--}}
{{--                        <div class="card text-white bg-warning mb-3" >--}}
{{--                            <div class="card-body">--}}
{{--                                <h3 class="card-title">1588</h3>--}}
{{--                                <p class="card-text">Files</p>--}}
{{--                                <canvas id="Chart3" class="w-100" height="85"></canvas>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- card 4 --->--}}
{{--                    <div class="col-6 col-sm-6 col-md-3">--}}
{{--                        <div class="card text-white bg-danger mb-3" >--}}
{{--                            <div class="card-body">--}}
{{--                                <h3 class="card-title">608</h3>--}}
{{--                                <p class="card-text">Users</p>--}}
{{--                                <canvas id="Chart4" class="w-100" height="85"></canvas>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- row caro box-->--}}
{{--            </div><!----box2-cards--->--}}

{{--            <!--------------------------------------------- card End from here ------------------------------------>--}}
{{--            <div class="row row3  mt-5" >--}}
{{--                <div class="col-12 col-md-6">--}}
{{--                    <h3 class="mb-3">Latest News</h3>--}}

{{--                    <table class="table">--}}
{{--                        <thead class="thead-light">--}}

{{--                        <tr>--}}
{{--                            <th scope="col">Title</th>--}}
{{--                            <th scope="col">Category</th>--}}
{{--                            <th scope="col">Date</th>--}}

{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}

{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div><!---- last News---->--}}
{{--                <div class="col-12 col-md-6">--}}
{{--                    <h3 class="mb-3">Users</h3>--}}
{{--                    <table class="table mb-5">--}}
{{--                        <thead class="thead-light">--}}

{{--                        <tr>--}}
{{--                            <th scope="col">Name</th>--}}
{{--                            <th scope="col">Email</th>--}}
{{--                            <th scope="col">Date</th>--}}

{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}

{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Mark</td>--}}
{{--                            <td>Otto</td>--}}
{{--                            <td>@mdo</td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div><!----Users---->--}}
{{--            </div><!--- row3 ---->--}}

{{--            <div class="footer d-flex align-items-end ">--}}
{{--                <p>2020 CreativeLabsPowered by Ghazal </p>--}}
{{--            </div>--}}



        </div><!---- col-10 ----->

    </div>
</div>

<div class="3" style="margin-bottom:800px">		</div>


<!------------------------------------------- end Here----------------------------------------------->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


<!------- links from mix-------->
<script src="{{asset('public/js/all.js')}}"></script>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>



    $('#sidebar').on('hide.bs.collapse', function (e){
        if( e.target == this){
            $('#main-content').removeClass('col-md-10');
        }
    })
    $('#sidebar').on('show.bs.collapse', function (e){
        if(e.target ==this){
            $('#main-content').addClass('col-md-10');
        }
    })





    var ch1 = $('#Chart1');
    var Chart1 = new Chart (ch1, {
        type: 'line',
        data:{
            labels:[ 'one','two','three','four','five','six','seven'],
            datasets:[{
                data:[12000,11900,12700,14000,13500,15000,14500],
                backgroundColor:'#6bccdb',
                borderColor:'white',
                pointBackgroundColor:'blue',
            }]
        },
        options:{
            scales:{
                yAxes:[{
                    display:false
                }],
                xAxes:[{
                    display:false
                }]
            },
            legend:{
                display:false
            },
            layout:{
                padding:{
                    left:5,
                    right:5,
                    top:5,
                    bottom:10,
                }
            }
        }
    });

    var ch2 = $('#Chart2');
    var Chart2 = new Chart (ch2, {
        type: 'bar',
        data:{
            labels:[ 'one','two','three','four','five','six','seven'],
            datasets:[{
                data:[12000,11900,12700,14000,13500,15000,14500],
                backgroundColor:'#4bcb68',
                borderColor:'white',
                pointBackgroundColor:'0c8f29',
            }]
        },
        options:{
            scales:{
                yAxes:[{
                    display:false
                }],
                xAxes:[{
                    display:false
                }]
            },
            legend:{
                display:false
            },
            layout:{
                padding:{
                    left:5,
                    right:5,
                    top:5,
                    bottom:10,
                }
            }
        }
    });



    var ch3 = $('#Chart3');
    var Chart3 = new Chart (ch3, {
        type: 'doughnut',
        data:{
            labels:[ 'one','two','three','four','five','six','seven'],
            datasets:[{
                data:[12000,11900,12700,14000,13500,15000,14500],
                backgroundColor:'#fedd84',
                borderColor:'white',
                pointBackgroundColor:'0c8f29',
            }]
        },
        options:{
            scales:{
                yAxes:[{
                    display:false
                }],
                xAxes:[{
                    display:false
                }]
            },
            legend:{
                display:false
            },
            layout:{
                padding:{
                    left:5,
                    right:5,
                    top:5,
                    bottom:10,
                }
            }
        }
    });




    var ch4 = $('#Chart4');
    var Chart4 = new Chart (ch4, {
        type: 'line',
        data:{
            labels:[ 'one','two','three','four','five','six','seven'],
            datasets:[{
                data:[20000,30000,40000,35000,40000,40000,60000],
                backgroundColor:'#e67c86',
                borderColor:'white',
                pointBackgroundColor:'white',
            }]
        },
        options:{
            scales:{
                yAxes:[{
                    display:false
                }],
                xAxes:[{
                    display:false
                }]
            },
            legend:{
                display:false
            },
            layout:{
                padding:{
                    left:5,
                    right:5,
                    top:5,
                    bottom:10,
                }
            }
        }
    });

</script>
@yield('scripts')

</body>
</html>
