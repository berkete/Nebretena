@extends('layouts.admin')


@section('content')

    <h1>Users</h1>

  <table class="table">
      <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created</th>
            <th>Updated</th>

            {{--<th>Password</th>--}}
        </tr>
      </thead>
      <tbody>

      @if($users)

        @foreach($users as $user)
        <tr class="success">
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>{{$user->is_active==1 ?'Active': 'Not Active'}}</td>

            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
            {{--<td>{{$user->password}}</td>--}}
        </tr>

          @endforeach
        @endif

      </tbody>
    </table>
    @endsection