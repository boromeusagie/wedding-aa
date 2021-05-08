@extends('layouts.home')

@section('content')
<div class="gla_slider gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-color="#faf5f2" data-image="images/galleries/54.jpg">
        
    <div class="layer-filter"></div>

    <div class="gla_slider_flower">
        <div class="gla_slider_flower_c1 gla_slider_flower_item"></div>
       <div class="gla_slider_flower_c2 gla_slider_flower_item"></div>
   </div>

    <!-- Over -->
    <div class="gla_over" data-color="#9abab6" data-opacity="0"></div>

    <div class="container">


        <!-- section -->
        <section class="gla_section" data-color="#faf5f2">

            <div class="gla_slide_midtitle text-center mt-5">Annisa & Andi</div>
            <div class="container text-center">

                @auth
                    <a href="/" class="btn">TO SITE</a>
                @else
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="row text-center justify-content-md-center">
                            <div class="col-md-auto">
                                <label>
                                    Please login with phone number.
                                </label>
                                <input type="text" name="username" class="form-control form-opacity" value="{{ $username }}" hidden>
                                <input type="text" name="password" class="form-control form-opacity @error('password') is-invalid @enderror">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="submit" class="btn btn-primary submit" value="Submit">
                            </div>
                        </div>
                    </form>
                @endauth
            </div>
            <!-- container end -->
        </section>
        <!-- section end -->
    
    </div>
    <!-- container end -->


</div>
@endsection