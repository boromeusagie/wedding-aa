@extends('layouts.home')

@section('content')
    <!-- To Top -->
    <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>

    <!-- Content -->
    <section id="gla_content" class="gla_content">
       
        <!-- section -->
        <section class="gla_section gla_lg_padding gla_image_bck gla_fixed" data-stellar-background-ratio="0.2" data-image="images/back-details.jpg">

            <div class="gla_slider_flower" data-bottom-top="@class:active" data--200-bottom="@class:no_active">
            <div class="gla_slider_flower_c1 gla_slider_flower_item"></div>
            <div class="gla_slider_flower_c2 gla_slider_flower_item"></div>
            <div class="gla_slider_flower_c6 gla_slider_flower_item"></div>
            </div>
            
            <div class="container">
                <div class="card text-white transparent">
                    <div class="card-header">
                        <h3 class="card-title text-center">Choose Your Food</h3>
                        <p class="text-center">(click image for choose)</p>
                    </div>
                    <div class="card-body">
                        <form id="formMenu" action="{{ route('order-post') }}" method="post">
                            @csrf
                            <h4>.</h4>
                            <section>
                                <h3 class="card-title text-center">Appertizer</h3>
                                <div class="row text-center justify-content-center">
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="appertizer" id="zuppa" value="Zuppa Soup" class="input-hidden" required/>
                                        <label for="zuppa">
                                            <img src="images/menu/zuppa.jpg" alt="" />
                                        </label>
                                        <br>
                                        <label for="zuppa">Zuppa Soup</label>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="appertizer" id="gado" value="Gado-gado Surabaya" class="input-hidden" />
                                        <label for="gado">
                                            <img src="images/menu/gado.jpg" alt="" />
                                        </label>
                                        <br>
                                        <label for="gado">Gado-gado Surabaya</label>
                                    </div>
                                </div>
                                @error('appertizer')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </section>

                            <h4>.</h4>
                            <section>
                                <h4 class="card-title text-center">Main Course</h4>
                                <div class="row text-center justify-content-center">
                                    <div class="col-4 col-md-4">
                                        <input type="radio" name="main_course" id="sop" value="Sop Buntut" class="input-hidden" required/>
                                        <label for="sop">
                                            <img src="images/menu/sop-buntut.jpg" alt="" />
                                        </label>
                                        <br>
                                        <label for="sop">Sop Buntut</label>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <input type="radio" name="main_course" id="spaghetti" value="Spaghetti Cordon Bleu" class="input-hidden" />
                                        <label for="spaghetti">
                                            <img src="images/menu/spaghetti.jpg" alt="" />
                                        </label>
                                        <br>
                                        <label for="spaghetti">Spaghetti Cordon Bleu</label>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <input type="radio" name="main_course" id="dori" value="Grill Dori with Potato" class="input-hidden" />
                                        <label for="dori">
                                            <img src="images/menu/dori.jpg" alt="" />
                                        </label>
                                        <br>
                                        <label for="dori">Grill Dori with Potato</label>
                                    </div>
                                </div>
                                @error('main_course')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </section>

                            <h4>.</h4>
                            <section>
                                <h4 class="card-title text-center">Dessert</h4>
                                <div class="row text-center justify-content-center">
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="dessert" id="buah" value="Es Buah" class="input-hidden" required/>
                                        <label for="buah">
                                            <img src="images/menu/es-buah.jpg" alt="" />
                                        </label>
                                        <br>
                                        <label for="buah">Es Buah</label>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="dessert" id="chocolate" value="Chocolate with Ice Cream" class="input-hidden" />
                                        <label for="chocolate">
                                            <img src="images/menu/chocolate.jpg" alt="" />
                                        </label>
                                        <br>
                                        <label for="chocolate">Chocolate with Ice Cream</label>
                                    </div>
                                </div>
                                @error('dessert')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </section>

                            <h4>.</h4>
                            <section>
                                <h4 class="card-title text-center">Hot Drink</h4>
                                <div class="row text-center justify-content-center">
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="hot_drink" id="hot-tea" value="Hot Tea" class="input-hidden" required/>
                                        <label for="hot-tea">
                                            <img src="images/menu/hot-tea.jpg" alt="" />
                                        </label>
                                        <br>
                                        <label for="hot-tea">Hot Tea</label>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="hot_drink" id="jahe" value="Wedang Jahe" class="input-hidden" />
                                        <label for="jahe">
                                            <img src="images/menu/jahe.jpeg" alt="" />
                                        </label>
                                        <br>
                                        <label for="jahe">Wedang Jahe</label>
                                    </div>
                                </div>
                                @error('hot_drink')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </section>

                            <h4>.</h4>
                            <section>
                                <h4 class="card-title text-center">Cold Drink</h4>
                                <div class="row text-center justify-content-center">
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="cold_drink" id="ice-tea" value="Ice Tea" class="input-hidden" required/>
                                        <label for="ice-tea">
                                            <img src="images/menu/ice-tea.png" alt="" />
                                        </label>
                                        <br>
                                        <label for="ice-tea">Ice Tea</label>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <input type="radio" name="cold_drink" id="thai-tea" value="Thai Tea" class="input-hidden" />
                                        <label for="thai-tea">
                                            <img src="images/menu/thai-tea.jpg" alt="" />
                                        </label>
                                        <br>
                                        <label for="thai-tea">Thai Tea</label>
                                    </div>
                                </div>
                                @error('cold_drink')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </section>
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

@section('js')
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.steps.js"></script>
@endsection

@section('script')
    <script>
    $(function() {
        $('#formMenu').steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                var form = $(this);
                form.validate().settings.ignore = ":disabled,:hidden";
                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                var form = $(this);
                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";
                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                var form = $(this);
                // Submit form input
                form.submit();
            }
        }).validate({
            errorPlacement: function (error, element) {
                element.before(error);
            }
        });
    });
    </script>
@endsection