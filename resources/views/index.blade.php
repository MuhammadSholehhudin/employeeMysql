@extends('layout.main')

@section('content')

<div class="container mt-3">

@if(session('added'))
  <div class="alert alert-success">{{session('added')}}</div>
@elseif(session('deleted'))
  <div class="alert alert-danger">{{session('deleted')}}</div>
@elseif(session('edited'))
  <div class="alert alert-success">{{session('edited')}}</div>
@endif


<a type="button" class="btn btn-primary mb-2" href="{{ url('employee/create') }}">Add Data</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Gender</th>
          <th scope="col">No. Telephone</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            @foreach($datas as $data)
          <th scope="row">{{ $data->id }}</th>
          <td>{{ $data->name }}</td>
          <td>{{ $data->gender }}</td>
          <td>{{ $data->no_telphone }}</td>
          <td>
            <form action="{{ url('employee/'.$data->id)}}" method="POST">
              @csrf
            <a href="{{ url('employee/'.$data->id.'/edit')}}" type="button" class="btn btn-secondary">
              Edit
            </a>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection