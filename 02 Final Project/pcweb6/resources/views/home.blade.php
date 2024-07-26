@extends('layouts.app')

@section('content')

{{-- Animate --}}

<script>
    $(document).ready(function(){
      $("#contAnimate").addClass("animate__animated animate__jackInTheBox");

      $("#descTxt").addClass("animate__animated animate__backInUp animate__delay-0.5s");
      
      $("#nameTxt").addClass("animate__animated animate__zoomIn animate__delay-1s");
     
    });
</script>

{{--  --}}

<div id="contAnimate" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card border-dark mb-3 p-5">
                <div class="alert alert-dismissible alert-secondary">
                    <h1 id="descTxt" >{{ __('Dashboard') }}</h1>
                </div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 id="nameTxt" class="text-muted">{{ __('Welcome') }} <span class="text-danger">{{ Auth::user()->name }}</span> ! </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

