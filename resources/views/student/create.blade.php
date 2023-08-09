
@extends('student\layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
        <label>Grade</label></br>
        <input type="text" name="grade" id="grade" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="Email" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
