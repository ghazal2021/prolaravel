<div class="card mt-4">
    <h6 class="card-header" style="font-weight: bold;  color:#545464">What Are You Looking For?</h6>
    <div class="card-body">
        <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('search')}}" role="search">

            <input class="form-control mr-sm-2 text-center "  name="q" type="search" placeholder="Search for..." aria-label="Search" >
            <button class="btn btn-outline-info my-2 my-sm-0  mr-3 btn-block" type="submit">Search</button>
        </form>

    </div>
</div><!--- search card finished --->
<div class="card mt-2">
    <div class="card-header">
        <h6 style="font-weight: bold; color:#545464"> Categories</h6>
    </div>
    @foreach($categories as $category)
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-center" style="border:none"><a href="">{{$category->name}}</a></li>

        </ul>
    @endforeach

</div><!------finished---->



<div class="card mt-2">
    <div class="card-header">
        <h6 style="font-weight: bold; color:#545464"> Categories</h6>
    </div>
    @foreach($categories as $category)
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-center" style="border:none"><a href="">{{$category->name}}</a></li>

        </ul>
    @endforeach

</div>

