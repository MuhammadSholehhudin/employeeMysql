@extends('layout.main')

@section('content')

<div class="container mt-3">

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
          <td>{{ $data->no_telpon }}</td>
          <td>
            <a type="button" class="btn btn-secondary">Edit</a>
            <a type="button" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection