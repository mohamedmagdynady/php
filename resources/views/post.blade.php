<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
@extends('master')

@section('content')
 <!-- Blog Entries Column -->
 

<h1 class="page-header">
    ALL POSTS PAGE
    <small>most recent posts in the blog</small>
</h1>
@foreach($empleado as $post)
<!-- First Blog Post -->
<h2>
    <a href="posts/{{$post->id}}">{{$post->title}}</a>
</h2>

@foreach($users as $user)
@if($user->id==$post->writtenby)
<p class="lead">
    by <a href="index.php">

    {{$user->name}}</a>
</p>
@endif
@endforeach
<p><span class="glyphicon glyphicon-time"></span>posted on {{$post->time}}</p>
<img src="uploads/{{$post->url}}" alt="">

<br>
<br>

<a class="btn btn-primary" href="posts/{{$post->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>
@endforeach



<div class="row list-group-item">
    <form method="post" action="addpost" enctype="multipart/form-data">
    {{ csrf_field() }}
    
        <div class="input-group">
        <label for="title">add title</label>
          <input type="text" name="title" class="form-control" placeholder="Add title . . .">
          
  <div>
  <div class="form-group">
  <label for="body">add something</label>
    <textarea class="form-control" name="body"placeholder="add content ....." rows="3"></textarea>
  </div>

   <div class="input-group">
        <label for="url">image</label>
          <input type="file" name="url" >
          
  <div>

<br>
          <span class="input-group-btn">
            <button class="btn btn-primary btn-lg" type="submit">Add new post</button>
          </span>
        </div>
    </form>
</div>

<br>
<br>
<!-- Pager -->
<ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
@stop
