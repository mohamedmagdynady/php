@extends('layouts.app')

@section('content')


<span><b>my profiel</b></span>
<p>this is <span style="color:blue">list of emplyees</span> !!!!.</p>
<br>
<h1>name:  <span style="color:blue">{{ Auth::user()->name }} </h1>

<hr>
<h1>email:  <span style="color:blue">{{ Auth::user()->email }} </h1>
<hr>
<h1>type:  <span style="color:blue">{{ (Auth::user()->type==1)?'admin':'user' }} </h1>




@endsection
