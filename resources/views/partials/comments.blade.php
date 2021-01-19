@foreach($comments as $comment)
    <div class="row">
        <div class="col-12">
            <div class="media">
                <img src="{{$comment->post->user->photo->path}}" width="50" height="50" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0"> {{$comment->post->user->name}}</h5>
                    {{$comment->description}}

                    <div class="media mt-3  d-block">
                        <button id="div-comment-{{$comment->id}}" class="btn btn-warning btn-open"> reply</button>
                        <div class="col-12 mt-2 mb-5">
                            <div class="card form-reply " id="f-div-comment-{{$comment->id}}"
                                 style=" padding: 0 20px 10px; width: 60%;">
                                <form class="dropdown-menu p-4"  method="POST" action="{{route('comments')}}">

                                @csrf
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="parent_id"
                                           value="{{$comment->id}}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="post_id" value="{{$post->id}}">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name"
                                           value="{{$comment->post->user->name}}">
                                </div>
                                <div class="form-group">

                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>

                                </form>


{{--                                <form method="POST" action="{{route('comments')}}">--}}
{{--                                    @csrf--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="hidden" class="form-control" name="parent_id"--}}
{{--                                               value="{{$comment->id}}">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="hidden" class="form-control" name="post_id" value="{{$post->id}}">--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" class="form-control" name="name"--}}
{{--                                               value="{{$comment->post->user->name}}">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}

{{--                                        <textarea class="form-control" name="description" rows="3"></textarea>--}}
{{--                                    </div>--}}
{{--                                    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                                </form>--}}
                            </div>
                        </div>
                        @include('partials.comments',['comments'=>$comment->replies])

                    </div>


                </div>
            </div>
        </div>
    </div>
@endforeach
