@extends('student\layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Course : {{ $students->course }}</p>
        <p class="card-text">Grade : {{ $students->grade }}</p>
        <p class="card-text">Email : {{ $students->email }}</p>
  </div>

    </hr>

  </div>
</div>
