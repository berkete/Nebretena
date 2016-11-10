@extends('layouts.admin')

@section('content')


    @if(count($replies)>0)

        <h1>The replies Page!</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Owner</th>
                <th>Email</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>View post</th>
                <th>Approve/Unapprove</th>
                <th>Delete Reply</th>
                {{--<th>updated at</th>--}}
            </tr>
            </thead>
            <tbody>

            @foreach($replies as $reply)

                <tr class="success">
                    <td>{{$reply->id}}</td>
                    <td>{{$reply->author}}</td>
                    <td>{{$reply->email}}</td>
                    <td>{{str_limit($reply->body,10)}}</td>
                    <td>{{$reply->created_at->diffForHumans()}}</td>
                    <td>{{$reply->updated_at->diffForHumans()}}</td>
                    <td><a href="{{route('home.post',$reply->comment->post->id)}}"> View Post!</a>  </td>
                    <td>


                        @if($reply->is_active==1)
                            {!! Form::open(['method'=>'PATCH','action'=>['CommentRepliesController@update',$reply->id]]) !!}
                            <input type="hidden" name="is_active" value="0">
                            <div class="form-group">

                                {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}

                            </div>
                            {!! Form::close() !!}


                        @else

                            {!! Form::open(['method'=>'PATCH','action'=>['CommentRepliesController@update',$reply->id]]) !!}
                            <input type="hidden" name="is_active" value="1">
                            <div class="form-group">

                                {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}

                            </div>
                            {!! Form::close() !!}

                        @endif

                    </td>
                    <td>

                        {!! Form::open(['method'=>'DELETE','action'=>['CommentRepliesController@destroy',$reply->id]]) !!}

                        <div class="form-group">

                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}

                        </div>
                        {!! Form::close() !!}


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{--{{$replies->render()}}--}}

                @else

                    <h1>No replys</h1>
                @endif


@endsection