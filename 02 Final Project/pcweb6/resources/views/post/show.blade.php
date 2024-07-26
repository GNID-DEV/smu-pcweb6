@extends('layouts.app')

@section('content')

{{-- Animate --}}

<script>
    $(document).ready(function(){
      $("#postAnimate").addClass("animate__animated animate__jackInTheBox");

      $("#titleTxt").addClass("animate__animated animate__flipInX animate__delay-0s");
      
      $("#movieTxt").addClass("animate__animated animate__flash animate__delay-0.5s");

      $("#descTxt").addClass("animate__animated animate__lightSpeedInRight animate__delay-0.6s");
      
      $("#postTxt").addClass("animate__animated animate__fadeInUp animate__delay-0.7s");
      
      $("#btnAnimate").addClass("animate__animated animate__swing animate__delay-0.8s");
     
    });
</script>

<div class="container">
   
    <div class="row justify-content-md-center">
        
        {{-- Image --}}
        <div id="postAnimate" class="col-sm">
            <img class="w-100 shadow p-2 mb-4 bg-white" src="/storage/{{ $post->image }}">
        </div>

        {{-- Write-up --}}
        <div class="col-sm">
            <div class="d-flex justify-content-between mt-3">
                
                {{-- Post Title --}}
                <div class="mt-5">
                <h3 id="titleTxt" class="display-4">{{ $post->title }}</h3>
                </div>  
                
                {{-- <div class="">
                <h2 class="">{{$user->name}}</h2>
                </div> --}}

                <div class="">
                <a id="btnAnimate" class="btn btn-outline-dark" href="{{ route('profile') }}">Back</a>
                </div>
            </div>
            <div id="movieTxt" class="mt-n3">
            <small  class="">Movie Title</small>
            </div>
            <div class="mt-5">
            <h4 id="descTxt" class=""> Description</h4>
            <p id="postTxt" class="mt-3"> {{$post->caption}}</p>
            </div>
        </div>

    </div>
    
</div>
@endsection
