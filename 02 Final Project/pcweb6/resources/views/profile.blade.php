@extends('layouts.app')

@section('content')
<script>
    $(document).ready(function(){
      $("#contAnimate").addClass("animate__animated animate__flip");
      setTimeout(function () {
    $("#contAnimate").removeClass("animate__animated animate__flip");
    }, 1000);

      $("#profileBG").addClass("animate__animated animate__backInUp animate__delay-0.5s");
      setTimeout(function () {
    $("#profileBG").removeClass("animate__animated animate__backInUp animate__delay-0.5s");
    }, 1000);
      
      $("#profileImg").addClass("animate__animated animate__zoomIn animate__delay-0.5s");
      setTimeout(function () {
    $("#profileImg").removeClass("animate__animated animate__zoomIn animate__delay-0.5s");
    }, 1000);

      $("#postAnimate").addClass("animate__animated animate__rotateIn animate__delay-0.8s");
      setTimeout(function () {
    $("#postAnimate").removeClass("animate__animated animate__rotateIn animate__delay-0.8s");
    }, 1000);

    $("#btnAnimate").addClass("animate__animated animate__zoomIn animate__delay-0.8s");
      setTimeout(function () {
    $("#btnAnimate").removeClass("animate__animated animate__zoomIn animate__delay-0.8s");
    }, 1000);



    });
</script>
{{-- Jquery Animate Script --}}
<script>


// Onload Animation




// contAnimate
var contAnimate = () => {
    $("#contAnimate").addClass("animate__animated animate__jackInTheBox");
    setTimeout(function () {
    $("#contAnimate").removeClass("animate__animated animate__jackInTheBox");
    }, 1000);
};
// profileBG
var profileBG = () => {
    $("#profileBG").addClass("animate__animated animate__flip");
    setTimeout(function () {
    $("#profileBG").removeClass("animate__animated animate__flip");
    }, 1000);
};

// profileImg
var profileImg = () => {
    $("#profileImg").addClass("animate__animated animate__jello");
    setTimeout(function () {
    $("#profileImg").removeClass("animate__animated animate__jello");
    }, 1000);
};
// Username
var userAnimate = () => {
    $("#userAnimate").addClass("animate__animated animate__flipInX");
    setTimeout(function () {
    $("#userAnimate").removeClass("animate__animated animate__flipInX");
    }, 1000);
};
// Author
var authorAnimate = () => {
    $("#authorAnimate").addClass("animate__animated animate__wobble");
    setTimeout(function () {
    $("#authorAnimate").removeClass("animate__animated animate__wobble");
    }, 1000);
};
// BodyTxt
var bodyTxtAnimate = () => {
    $("#bodyTxtAnimate").addClass("animate__animated animate__rotateIn");
    setTimeout(function () {
    $("#bodyTxtAnimate").removeClass("animate__animated animate__rotateIn");
    }, 1000);
};
// Edit Button
var editBtnAnimate = () => {
    $("#editBtnAnimate").addClass("animate__animated animate__wobble");
    setTimeout(function () {
    $("#editBtnAnimate").removeClass("animate__animated animate__wobble");
    }, 1000);
};
// Post
var postAnimate = () => {
    $("#postAnimate").addClass("animate__animated animate__swing");
    setTimeout(function () {
    $("#postAnimate").removeClass("animate__animated animate__swing");
    }, 1000);
};

// All
var allAnimate = () => {
// contAnimate

    $("#contAnimate").addClass("animate__animated animate__jackInTheBox");
    setTimeout(function () {
    $("#contAnimate").removeClass("animate__animated animate__jackInTheBox");
    }, 1000);

// profileBG

    $("#profileBG").addClass("animate__animated animate__flip");
    setTimeout(function () {
    $("#profileBG").removeClass("animate__animated animate__flip");
    }, 1000);


// profileImg

    $("#profileImg").addClass("animate__animated animate__jello");
    setTimeout(function () {
    $("#profileImg").removeClass("animate__animated animate__jello");
    }, 1000);

// Username

    $("#userAnimate").addClass("animate__animated animate__flipInX");
    setTimeout(function () {
    $("#userAnimate").removeClass("animate__animated animate__flipInX");
    }, 1000);

// Author

    $("#authorAnimate").addClass("animate__animated animate__wobble");
    setTimeout(function () {
    $("#authorAnimate").removeClass("animate__animated animate__wobble");
    }, 1000);

// BodyTxt

    $("#bodyTxtAnimate").addClass("animate__animated animate__rotateIn");
    setTimeout(function () {
    $("#bodyTxtAnimate").removeClass("animate__animated animate__rotateIn");
    }, 1000);

// Edit Button

    $("#editBtnAnimate").addClass("animate__animated animate__wobble");
    setTimeout(function () {
    $("#editBtnAnimate").removeClass("animate__animated animate__wobble");
    }, 1000);

// Post

    $("#postAnimate").addClass("animate__animated animate__swing");
    setTimeout(function () {
    $("#postAnimate").removeClass("animate__animated animate__swing");
    }, 1000);
};
</script>
{{-- Works only if script in the same page. 
    Not working if script in script.js --}}

{{-- Animate Buttons --}}
<div class="container">
    <div id="btnAnimate" class="mx-auto mt-3 mb-4 ">
        <button class="btn btn-outline-dark" onclick="contAnimate()">
        Container
        </button>
        <button class="btn btn-outline-dark" onclick="profileBG()">
        Profile BG
        </button>
        <button class="btn btn-outline-dark" onclick="profileImg()">
        Profile Img
        </button>
        <button class="btn btn-outline-dark" onclick="userAnimate()">
        Username
        </button>
        <button class="btn btn-outline-dark" onclick="authorAnimate()">
        Author
        </button>
        <button class="btn btn-outline-dark" onclick="bodyTxtAnimate()">
        Body Text
        </button>
        <button class="btn btn-outline-dark" onclick="editBtnAnimate()">
        Edit Button
        </button>
        <button class="btn btn-outline-dark" onclick="postAnimate()">
        Post
        </button>
        <button class="btn btn-outline-dark" onclick="allAnimate()">
        ALL
        </button>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        
        {{-- User Profile --}}
        <div class="col-md-3">
            <div id="contAnimate" class="card bg-dark align-items-center" style="padding-bottom: 20px;">
                {{-- profile BG --}}
                <img id="profileBG" src="/storage/{{ $profile['background'] }}" style="width: 100%;" />
                {{-- profile Img --}}
                <img id="profileImg" src="/storage/{{ $profile['image'] }}" class="rounded-circle shadow mb-3" width="150" height="150" style="margin-top: -80px" />
                
                {{-- Username --}}
                <div class="text-center mt-4">
                    <h2 id="userAnimate" class="text-light">{{ $user['name'] }}</h2>
                    {{-- Author --}}
                    <div id="authorAnimate" class="mt-n2 text-secondary"><small>Author</small></div>
                </div>
                
                {{-- Profile Description --}}
                <div class="card-body">
                    {{-- <h5 style="text-align: center">Your Profile</h5> --}}
                    <p id="bodyTxtAnimate" class="text-muted" style="text-align: center">{{ $profile['description']}}</p>
                </div>
                
                {{-- Edit profile Hyperlink --}}
                <div class="mb-3">
                    <a id="editBtnAnimate" class="btn btn-sm btn-outline-light" href="/profile/edit">&#9998; &nbsp; 
                        Edit Profile</a>
                </div>
            </div>
        </div>

        {{-- Posts --}}
        <div id="postAnimate" class="col-md-9">
            {{-- <div class="bg-light">
                <form enctype="multipart/form-data" method="post" style="display: flex; align-items: center">
                    <img src="/storage/{{ $profile['image'] }}" class="rounded-circle" width="40" height="40" style="margin: 0 10px" />
                    
                    
                    <div class="">
                        <a class="btn btn-md btn-success" href="/post/create">
                            &#8853; Create Post</a>
                    </div>
                </form>
            </div> --}}
            
            {{-- Posts --}}
            @foreach($posts as $post)
                <div class="card bg-outline-dark p-4 mb-3">
                    <div style="card-body">
                        
                        <div class="d-flex justify-content-end">
                        {{-- Edit Btn --}}
                        <div  class="ml-auto">
                        <a class="btn btn-sm btn-outline-dark" href="/post/{{$post->id}}/edit">&#9998; &nbsp;Edit &nbsp;</a>
                        
                        {{-- Delete Btn --}}
                        <a class="btn btn-sm btn-outline-danger" href="/post/delete/{{$post->id}}">&#8854; Delete</a>
                        
                        </div>                

                        </div>
                        
                        {{-- Post Title --}}
                        <div class="card-body">
                            <h3 class="display-4 text-center">{{ $post->title }}</h3>
                        </div>    
                                                
                        {{-- Post Image --}}
                        <div class="mx-auto">
                            <a href="/post/{{$post->id}}">
                                <img class="shadow-lg p-2 mb-4 bg-white rounded mx-auto d-block" style="height: 400px;" src="/storage/{{$post->image}}">
                            </a>
                        </div>

                        {{-- Caption --}}
                        <div class="my-4">
                        <span>{{ $post->caption }}</span><br />
                        </div>
                    
                        
                    </div>

                    
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection

