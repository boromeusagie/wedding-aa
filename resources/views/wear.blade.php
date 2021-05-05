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
            <div class="gla_slider_flower_c3 gla_slider_flower_item"></div>
            <div class="gla_slider_flower_c4 gla_slider_flower_item"></div>
            <div class="gla_slider_flower_c5 gla_slider_flower_item"></div>
            <div class="gla_slider_flower_c6 gla_slider_flower_item"></div>
            </div>
            
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Choose Your Food</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <label>Appertizer</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Zuppa Soup</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Gado-gado Surabaya</label>
                            </div>
                            <br>

                            <label>Hot Drinks</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">Hot Tea</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                <label class="form-check-label" for="inlineRadio4">Wedang Jahe</label>
                            </div>
                            <br>

                            <label>Main Course</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                <label class="form-check-label" for="inlineRadio5">Sop Buntut</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                <label class="form-check-label" for="inlineRadio6">Spaghetti Cordon Bleu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option7">
                                <label class="form-check-label" for="inlineRadio7">Grill Dori with Potato</label>
                            </div>
                            <br>

                            <label>Cold Drinks</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio8" value="option8">
                                <label class="form-check-label" for="inlineRadio8">Thai Tea</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio9" value="option9">
                                <label class="form-check-label" for="inlineRadio9">Ice Tea</label>
                            </div>
                            <br>

                            <label>Dessert</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="option10">
                                <label class="form-check-label" for="inlineRadio10">Es Buah</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio11" value="option11">
                                <label class="form-check-label" for="inlineRadio11">Chocolate Cake with Ice Cream</label>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

    </section>
    <!-- Content End -->
@endsection