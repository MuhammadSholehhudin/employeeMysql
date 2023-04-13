@extends('layout.main')

@section('content')

<div class="container mt-5"> `
    <h3 class="mb-3">Edit Data</h3>
<form method="POST" action="{{ url('employee/'.$data->id) }}">
    <input type="hidden" name="_method" value="PUT"></input>
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name"  name="name" value="{{ $data->name }}">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <input type="text" class="form-control" id="gender" name="gender"  value="{{ $data->gender}}">
  </div>
  <div class="mb-3">
    <label for="no-telphone" class="form-label">No. Telphone</label>
    <input type="number" class="form-control" name="no_telphone" id="no_telphone"  value="{{$data->no_telphone}}">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection