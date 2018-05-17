@extends('layouts.app')

@section('content')


<span><b>update page</b></span>

@foreach ($records as $employee)

@if($employee->employee==$x)
<div class="row list-group-item">
    <div class="col-xs-8">

    

  <h2>date:{{ $employee->date }}</h2>
  
  <h3>status:{{ $employee->status }}</h3>

  <h3>working hours:{{ $employee->workinghour }}</h3>
   
</div>

@endif
@endforeach

<div class="row list-group-item">
    <form method="POST" action="../recordsstore/{{$x}}">
    {{ csrf_field() }} <!-- actions adds that to url where this url call add fuction -->
        <div class="input-group">
          <input type="date" name="date" class="form-control" placeholder="Add date . . .">
          
          <input type="text" name="workinghour" class="form-control" placeholder="Add  working hours . . .">
          
          <input type="text" name="status" class="form-control" placeholder="Add status . . .">
          
          <button class="btn btn-primary" type="submit">Add</button>
          </span>
        </div>
    </form>
</div>





@endsection
