@extends('layout.main')

@section('content')

<div class="container mt-5"> 
  <h3 class="mb-5">Tambahkan Data Baru</h3>
<form method="POST" action="{{ url('employee') }}">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Input your Name" name="name" required>
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <input type="text" class="form-control" id="gender" name="gender" placeholder="Input your gender" required>
  </div>
  <div class="mb-3">
    <label for="no-telphone" class="form-label">No. Telphone</label>
    <input type="number" class="form-control" name="no_telphone" id="no_telphone" placeholder="Input your number..."  required>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection