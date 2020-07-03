@extends('front.master')
@section('body')
<div class="container">
	<div class="card">
  <div class="card-header">
  	@if($singlepost->type==0)
    	<h3>Video</h3>
    @else
    	<h3>Post</h3>
    @endif
  </div>
  <div class="card-body">
  	<div class="text-center">
  		<h4 class="card-title">{{$singlepost->title}}</h4>
  		@if($singlepost->type==1)
	    <img src="{{asset($singlepost->image)}}" height="200" width="350">
	    @else
	     <iframe width="350" height="250" src="<?php echo $singlepost->body;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	     @endif
	    <p class="card-text">{{$singlepost->body}}.</p>
	    @if($singlepost->type==0)
	    <a href="#" class="btn btn-primary">Share</a>
	    @endif
  	</div>
  </div>
</div>
</div>
@endsection