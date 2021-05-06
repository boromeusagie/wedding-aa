@extends('layouts.home')

@section('content')
    <!-- To Top -->
    <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>

    <!-- Content -->
    <section id="gla_content" class="gla_content">
       
        <!-- section -->
        <section class="gla_section gla_lg_padding gla_image_bck gla_fixed" data-stellar-background-ratio="0.2" data-image="images/app/295791.jpg">

            <div class="gla_slider_flower" data-bottom-top="@class:active" data--200-bottom="@class:no_active">
            <div class="gla_slider_flower_c1 gla_slider_flower_item"></div>
            <div class="gla_slider_flower_c2 gla_slider_flower_item"></div>
            <div class="gla_slider_flower_c6 gla_slider_flower_item"></div>
            </div>
            
            <div class="container">
                <a href="{{ route('homepage') }}" class="btn mb-3">Back to Home</a>
                <div class="card">
                    <div class="card-header text-white">
                        <h3 class="card-title text-center">Your Dresscode</h3>
                    </div>
                    <div class="card-body">
                        <img src="images/app/wear-guide.png" alt="" class="img-responsive">
                        <br>
                        @if ($user->is_mua === null)
                            <p class="text-center font-weight-bold">
                                Do you want to use MUA?<br>
                                <small class="text-muted">(additional charge for MUA Rp 300.000)</small>
                            </p>
                            <form action="{{ route('mua-store') }}" method="post">
                                @csrf
                                <div class="text-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_mua" id="inlineRadio1" value="Yes">
                                        <label class="form-check-label font-weight-normal" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_mua" id="inlineRadio2" value="No">
                                        <label class="form-check-label font-weight-normal" for="inlineRadio2">No</label>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-sm btn-primary">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

    </section>
    <!-- Content End -->
@endsection