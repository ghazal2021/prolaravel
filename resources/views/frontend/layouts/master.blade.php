<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('head')
    <!----css-----  >

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
          integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
          crossorigin="anonymous"/>

    <!--------------------- font ----------->
    <!-- font-family: 'Lato', sans-serif; -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <!-- font-family: 'Caveat', cursive; -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
</head>
<body>
<!----------------------------- start from here ------------------------------------------->
@yield('navigation')
<!------------------------------navbar finished---------------------------->
<!------------------------------Carosel start---------------------------->
{{--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--    <div class="carousel-inner">--}}
{{--        <div class="carousel-item active">--}}
{{--            <img src="images\as1.jpg" class="d-block w-100" height="300" alt="..." width="100%">--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img src="images/as2.jpg" class="d-block w-100" height="300" alt="...">--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img src="images/as3.jpg" class="d-block w-100" height="300" alt="...">--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img src="images/as4.jpg" class="d-block w-100" height="300" alt="...">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Previous</span>--}}
{{--    </a>--}}
{{--    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Next</span>--}}
{{--    </a>--}}
{{--</div>--}}
<!------------------------------Carosel END---------------------------->
<div class="main-box" style="margin-bottom: 500px">
    <div class="container">
        <div class="row">
            <div class="col-9 ">

                @yield('content')

            </div>

            <div class="col-3 sidebar" style=" width: 100%;height: 600px"><!---sidebar start----->

                @yield('sidebar')
            </div><!-----sidebar finished ----->

        </div>
    </div>
</div>

<!----------------------------------- end Here----------------------------------------->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"--}}
{{--        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>--}}

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

<script src="js/iconify.min.js"></script>


<script src="js/Chart.js.2.9.4.js" type="text/javascript"></script>
<script src="js/main.js"></script>

</body>
</html>
