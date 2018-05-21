<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

@if (Session::has('success'))
      <div class="alert alert-success">
        <strong>Success:</strong> {{ Session::get('success') }}
      </div>
    @endif
@extends('layouts.app')

@section('content')




<span><b>emplyees list</b></span>
<p>this is <span style="color:blue">list of emplyees</span> !!!!.</p>

@foreach ($empleado as $employee)

	<div class="row list-group-item">
	    <div class="col-xs-8">
	  <h2>name:{{ $employee->name }}</h2>
      <h2>email:{{ $employee->email }}</h2>
      <h3>mobile number:{{ $employee->mobile }}</h3>
	    </div>
	    <div class="col-xs-4">
	        <div><a href="profile/{{ $employee->id }}/delete" class="btn btn-danger pull-right">Delete</a> 
	    
	        <a href="profile/{{ $employee->id }}/delete" class="btn btn-success">update</a>

            <a href="update/{{ $employee->id }}" class="btn btn-info">enter new attendance record</a>
	    </div>
	</div>

@endforeach

<div class="row list-group-item">
    <form method="POST" action="employeesstore"> <!-- actions adds that to url where this url call add fuction -->
    {{ csrf_field() }}
        <div class="input-group">
          <input type="text" name="name" class="form-control" placeholder="Add employee name . . .">
          
          <input type="text" name="email" class="form-control" placeholder="Add  employee email . . .">
          
          <input type="text" name="mobile" class="form-control" placeholder="Add new mobile . . .">
          
          <button class="btn btn-primary" type="submit">Add</button>
          </span>
        </div>
    </form>
</div>




@endsection


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
	@if(Session::has('message'))
		var type="{{Session::get('alert-type','info')}}"

		switch(type){
			case 'info':
		         toastr.info("{{ Session::get('message') }}");
		         break;
	        case 'success':
	            toastr.success("{{ Session::get('message') }}");
	            break;
         	case 'warning':
	            toastr.warning("{{ Session::get('message') }}");
	            break;
	        case 'error':
		        toastr.error("{{ Session::get('message') }}");
		        break;
		}
	@endif
</script>
