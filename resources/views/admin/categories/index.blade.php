@extends('layouts.admin')


@section('content')


<h1>All Catagories lists</h1>


<div class="col-sm-4">



    {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}


        </div>
        <div class="form-group">

            {!! Form::submit('create categories',['class'=>'btn btn-primary']) !!}

        </div>
          {!! Form::close() !!}
</div>

<div class="col-sm-8">

    @if($categories)

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created</th>
                <th>updated</th>
            </tr>
            </thead>


            @foreach($categories as $category)
                <tbody>
                <tr class="success">
                    <td>{{$category->id}}</td>
                    <td><a href="{{route('admin.categories.edit',$category->id)}}" class="hrf">{{$category->name}}</a></td>
                    <td>{{$category->created_at->diffForHumans()}}</td>
                    <td>{{$category->updated_at->diffForHumans()}}</td>
                </tr>
                @endforeach
                </tbody>
        </table>


    @endif



</div>
    @endsection