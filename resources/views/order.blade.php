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
                            <div id="formMenu">
                                <h4>Appertizer</h4>
                                <section>
                                    <h4 class="card-title text-center">Appertizer</h4>
                                    <div class="row text-center">
                                        <div class="col-6 col-md-6">
                                            <input type="radio" name="appertizer" id="zuppa" value="Zuppa Soup" class="input-hidden" />
                                            <label for="zuppa">
                                                <img src="images/menu/zuppa.jpg" alt="" />
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <input type="radio" name="appertizer" id="gado" value="Zuppa Soup" class="input-hidden" />
                                            <label for="gado">
                                                <img src="images/menu/gado.jpg" alt="" />
                                            </label>
                                        </div>
                                    </div>
                                </section>

                                <h4>Main Course</h4>
                                <section>
                                    <h4 class="card-title text-center">Main Course</h4>
                                    <div class="row text-center">
                                        <div class="col-4 col-md-4">
                                            <input type="radio" name="main" id="sop" value="Sop Buntut" class="input-hidden" />
                                            <label for="sop">
                                                <img src="images/menu/sop-buntut.jpg" alt="" />
                                            </label>
                                        </div>
                                        <div class="col-4 col-md-4">
                                            <input type="radio" name="main" id="spaghetti" value="Spaghetti Cordon Bleu" class="input-hidden" />
                                            <label for="spaghetti">
                                                <img src="images/menu/spaghetti.jpg" alt="" />
                                            </label>
                                        </div>
                                        <div class="col-4 col-md-4">
                                            <input type="radio" name="main" id="dori" value="Grill Dori with Potato" class="input-hidden" />
                                            <label for="dori">
                                                <img src="images/menu/dori.jpg" alt="" />
                                            </label>
                                        </div>
                                    </div>
                                </section>

                                <h4>Dessert</h4>
                                <section>
                                    <h4 class="card-title text-center">Dessert</h4>
                                    <div class="row text-center">
                                        <div class="col-6 col-md-6">
                                            <input type="radio" name="dessert" id="buah" value="Es Buah" class="input-hidden" />
                                            <label for="buah">
                                                <img src="images/menu/es-buah.jpg" alt="" />
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <input type="radio" name="dessert" id="chocolate" value="Chocolate with Ice Cream" class="input-hidden" />
                                            <label for="chocolate">
                                                <img src="images/menu/chocolate.jpg" alt="" />
                                            </label>
                                        </div>
                                    </div>
                                </section>

                                <h4>Hot Drink</h4>
                                <section>
                                    <h4 class="card-title text-center">Hot Drink</h4>
                                    <div class="row text-center">
                                        <div class="col-6 col-md-6">
                                            <input type="radio" name="hot-drink" id="hot-tea" value="Hot Tea" class="input-hidden" />
                                            <label for="hot-tea">
                                                <img src="images/menu/hot-tea.jpg" alt="" />
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <input type="radio" name="hot-drink" id="jahe" value="Wedang Jahe" class="input-hidden" />
                                            <label for="jahe">
                                                <img src="images/menu/jahe.jpeg" alt="" />
                                            </label>
                                        </div>
                                    </div>
                                </section>

                                <h4>Cold Drink</h4>
                                <section>
                                    <h4 class="card-title text-center">Cold Drink</h4>
                                    <div class="row text-center">
                                        <div class="col-6 col-md-6">
                                            <input type="radio" name="cold-drink" id="ice-tea" value="Ice Tea" class="input-hidden" />
                                            <label for="ice-tea">
                                                <img src="images/menu/ice-tea.png" alt="" />
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <input type="radio" name="cold-drink" id="thai-tea" value="Thai Tea" class="input-hidden" />
                                            <label for="thai-tea">
                                                <img src="images/menu/thai-tea.jpg" alt="" />
                                            </label>
                                        </div>
                                    </div>
                                </section>
                            </div>
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
    <script src="js/jquery.steps.min.js"></script>
@endsection

@section('script')
    <script>
    $(function() {
        $('#formMenu').steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "slideLeft"
        });
    });
    </script>
@endsection