@extends('layouts.home')

@section('content')
    <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>

    <!-- Music -->
    <button class="gla_music_icon icon-music" id="iconMusic">
        <i class="ti ti-control-pause"></i>
    </button>
    
    <audio id="audioMusic" autoplay loop>
        <source src="music/song.mp3" type="audio/mpeg">
    </audio>


    <!-- Slider -->
    <div class="gla_slider gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-color="#f6ecf0" data-image="images/galleries/2.jpeg">
        
        <div class="layer-filter"></div>
        <div class="gla_slider_flower">
             <div class="gla_slider_flower_c1 gla_slider_flower_item"></div>
            <div class="gla_slider_flower_c2 gla_slider_flower_item"></div>
            <div class="gla_slider_flower_c6 gla_slider_flower_item"></div>
        </div>

        <!-- Over -->
        <div class="gla_over" data-color="#9abab6" data-opacity="0"></div>

        <div class="container">


            <!-- Slider Texts -->
            <div class="gla_slide_txt gla_slide_center_middle text-center">
                <div class="gla_slide_midtitle">Annisa & Andi</div>
                <h4 style="font-size: 35px;">June 5<sup>th</sup>, 2021</h4>
            </div>
            <!-- Slider Texts End -->
        
        </div>
        <!-- container end -->

        <!-- Slide Down -->
        <a class="gla_scroll_down gla_go" href="#gla_content">
            <b></b>
            Scroll
        </a>


    </div>
    <!-- Slider End -->

    <!-- Content -->
    <section id="gla_content" class="gla_content">
       


        <!-- section -->
        <section class="gla_section">
            

            
            <div class="container text-center">

                <p><img src="images/get-married.png" data-bottom-top="@src:images/get-married.png" alt=""></p>
                <div class="row justify-content-center">
                    <div class="col-md-3 gla_round_block profile-name">
                        <div class="gla_round_im gla_image_bck" data-image="images/app/groom.jpeg"></div>
                        <h3>Fitrandi Ramadhan</h3>
                        <p class="text-muted">THE FIRST SON OF</p>
                        <p>
                            MR. RIFOL SARTUNI<br>
                            MRS. DEWI TAVIANA WALIDA
                        </p>
                        <div class="gla_footer_social">
                            <a href="https://www.instagram.com/fitrandir/" target="_blank">
                                <i class="ti ti-instagram gla_icon_box"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCH3cJlIOfATy7VK_p7KMkrw" target="_blank">
                                <i class="ti ti-youtube gla_icon_box"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="image-slider" class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="images/app/slide/1.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/2.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/3.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/4.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/5.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/6.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/7.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/8.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/9.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/10.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/11.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/12.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/13.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/14.jpeg">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="images/app/slide/15.jpeg">
                                    </li>
                                </ul>
                            </div>
                            <img src="images/slider-bg.png" alt="" class="img-responsive back-slider">
                        </div>
                    </div>
                    <div class="col-md-3 gla_round_block profile-name">
                        <div class="gla_round_im gla_image_bck" data-image="images/app/bride.jpeg"></div>
                        <h3>Annisa Fitria Rachim</h3>
                        <p class="text-muted">THE SECOND DAUGHTER OF</p>
                        <p>
                            MR. IRIANO HAROEN<br>
                            MRS. SITI RAHMA
                        </p>
                        <div class="gla_footer_social">
                            <a href="https://twitter.com/cheemmy" target="_blank">
                                <i class="ti ti-twitter-alt gla_icon_box"></i>
                            </a>
                            <a href="https://www.instagram.com/annisafrachim/" target="_blank">
                                <i class="ti ti-instagram gla_icon_box"></i>
                            </a>
                        </div>
                    </div>
                </div>
                


                

                
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

        <!-- section -->
        <section class="gla_section gla_lg_padding gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="images/app/295791.jpg">

            <div class="gla_slider_flower" data-bottom-top="@class:active" data--200-bottom="@class:no_active">
                <div class="gla_slider_flower_c1 gla_slider_flower_item"></div>
                <div class="gla_slider_flower_c2 gla_slider_flower_item"></div>
            </div>
            
            <div class="container text-center">
                <div class="row text-center">
                    <div class="col-md-3 gla_round_block event">
                        <h3>Main Ceremony</h3>
                        <div class="time-box">
                            <div class="inner-time-box">
                                <h4>07.00 - 10.00</h4>
                            </div>
                        </div>
                        <a href="http://bit.ly/NisaAndi" target="_blank">
                            <img src="images/livestream.png" alt="" class="barcode">
                        </a>
                        <br>
                        <small class="text-white">scan or click for livestream</small>
                    </div>
                    <div class="col-md-6 order-12 order-md-1 gla_round_block">
                        <p><img src="images/animations/savethedate_wh.gif" data-bottom-top="@src:images/animations/savethedate_wh.gif" height="150" alt=""></p>
                        <div class="gla_slide_midtitle .date"><span>June 5<sup>th</sup>, 2021<span></div>
                        <h4>Villa Akira,<br>Megamendung, Bogor.</h4>

                        <div class="row text-center mt-2">
                            <div class="col-md-6 col-sm-6">
                                <p><a href="https://goo.gl/maps/SiqeqtZtCRqsTXcA7" target="_blank" class="btn">Location</a></p>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <form action="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=MGdnYmRlYWpwb3NpMmhzMXJnaTJncWRwYWUgZml0cmFuZGlyYW1hZGhhbkBt&amp;tmsrc=fitrandiramadhan%40gmail.com">
                                    <button type="submit" class="btn btn-default" value="Go to Google">Add to Calendar</button>
                                </form>
                            </div>
                        </div>
                        <div class="gla_countdown" data-year="2021" data-month="6" data-day="5"></div>
                    </div>
                    <div class="col-md-3 order-1 order-md-12 gla_round_block event">
                        <h3>Wedding Party</h3>
                        <div class="time-box">
                            <div class="inner-time-box">
                                <h4>10.00 - 13.00</h4>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

        @auth
            <!-- section -->
            <section class="gla_section gla_image_bck" data-image="images/back-details.jpg">
                <div class="layer-filter2"></div>
                <div class="container text-center">
                    <p><img src="images/ornaments/ornament_0001_centre_B.png" height="110" alt=""></p>
                    <h2 style="margin-bottom: 10px;">Things to Note</h2>
                    <h3>IMPORTANT</h3>
                    <h4>Our ceremony and reception will be held at Villa Akira. Located on Megamendung Bogor, it has a beautiful, unobstructed view of the rice field and beautiful village in Puncak.</h4>
                    <div class="row text-center justify-content-center">
                        @if ($user->is_order === '1')
                            <div class="col-md-4 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="images/assets/ilust2.png"></div>
                                <h3>Choose Your Food</h3>
                                <p>    
                                    Food is served full course per person.<br>
                                    Please choose your menu before May 10<sup>th</sup>, 2021.
                                </p>
                                @if ($checkMenu)
                                    <p class="font-italic">Already Submit!</p>
                                @else
                                    <a href="{{ route('order') }}" class="btn btn-animated">Choose Food</a>
                                @endif
                            </div>
                        @endif
                        @if ($user->villa != null)
                            <div class="col-md-4 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="images/assets/ilust3.png"></div>
                                <h3>Your Villa</h3>
                                <p>
                                    We Provide Villa for  your stay 1 day before our wedding day.
                                    You will stay in <b>{{ $villa->villa_name }}</b>.
                                </p>
                                <a href="{{ $villa->location }}" target="_blank" class="btn btn-animated">Location</a>
                            </div>
                        @endif
                        <div class="col-md-4 gla_round_block">
                            <div class="gla_round_im gla_image_bck" data-image="images/assets/ilust1.png"></div>
                            <h3>What to Wear</h3>
                            <p>
                                We'd love to see you in you white casual outfit.<br>
                                We recommend not to wear high heels.
                            </p>
                            <a href="{{ route('wear') }}" class="btn btn-animated">See Guide</a>
                        </div>
                    </div>
                </div>
                <!-- container end -->

            </section>
            <!-- section end -->
        @endauth


        <section class="gla_section gla_image_bck" data-color="#fff">
            

            
            <div class="container text-center">

                <h2>Health Protocol</h2>
                <h3 class="gla_subtitle">Help prevent the spread of respiratory disease like COVID-19</h3>

                <!-- icon boxes -->
                <div class="gla_icon_boxes row">
                    
                    <!-- animation -->
                    <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">
                        
                        <!-- item -->
                        <div class="gla_icon_box col-md-3 col-sm-6 col-xs-6">
                            <div class="gla_round_im gla_image_bck" data-image="images/assets/icon_4.png"></div>
                            <div class="gla_icon_box_content">
                                <h4><b>Wear Mask</b></h4>
                                Guests must wear medical mask at the venue of the Wedding.
                            </div>    
                        </div>

                        <!-- item -->
                        <div class="gla_icon_box col-md-3 col-sm-6 col-xs-6">
                            <div class="gla_round_im gla_image_bck" data-image="images/assets/icon_1.png"></div>
                            <div class="gla_icon_box_content">
                                <h4><b>Hand Sanitizer</b></h4>
                                Hand sanitizer are available at the wedding venue.
                            </div>
                        </div>

                        <!-- item -->
                        <div class="gla_icon_box col-md-3 col-sm-6 col-xs-6">
                            <div class="gla_round_im gla_image_bck" data-image="images/assets/icon_3.png"></div>
                            <div class="gla_icon_box_content">
                                <h4><b>Hand Wash</b></h4>
                                Please wash your hands before and after entering the venue.
                            </div>
                        </div>

                        <!-- item -->
                        <div class="gla_icon_box col-md-3 col-sm-6 col-xs-6">
                            <div class="gla_round_im gla_image_bck" data-image="images/assets/icon_2.png"></div>
                            <div class="gla_icon_box_content">
                                <h4><b>Distancing</b></h4>
                                Please make sure you're one meter away with the other person.
                            </div>
                        </div>
                    
                    </div>
                    <!-- anmation end -->

                </div>
                <!-- icon boxes end -->
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

        <!-- section -->
        <section class="gla_section gla_image_bck" data-color="#fbf5f6">
            
            
            <div class="container text-center">
                <h2>Nisa and Andi World</h2>
                <p>Nisa and Andi started dating 5 years ago, they went to goods and the bads, 
                    near and far (Bandung Solo not a problem!). Nisa hates when Andi ignore her 
                    ( Wololooo.. game all night long). Andi hates nisa when she try to micro manage 
                    everything since procrastinate is Andi's middle name. But in the end Nisa meant 
                    the world to Andi, and vice versa. They love the sea. They love Adventure. 
                    Especially with friends and family (Raja Ampat anyone?). Anyhow they'd love you to 
                    be at our celebration together. Cheers! See you guys.
                </p>
                
                <!-- filters -->
                {{-- <div class="button-group filter-button-group">
                    <a data-filter="*">Show All</a>
                    <a data-filter=".prewedding">Pre Wedding</a>
                    <a data-filter=".adventure">Adventure</a>
                    <a data-filter=".withyou">With You</a>
                </div> --}}
                <!-- filters end -->
                <!-- grid -->
                <div class="gla_portfolio_no_padding grid">

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item prewedding">
                        <div class="gla_shop_item">
                            <a href="images/galleries/16.jpeg" class="lightbox">
                                <img src="images/galleries/16.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item prewedding">
                        <div class="gla_shop_item">
                            <a href="images/galleries/57.jpeg" class="lightbox">
                                <img src="images/galleries/57.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item prewedding">
                        <div class="gla_shop_item">
                            <a href="images/galleries/19.jpeg" class="lightbox">
                                <img src="images/galleries/19.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item adventure">
                        <div class="gla_shop_item">
                            <a href="images/galleries/20.jpg" class="lightbox">
                                <img src="images/galleries/20.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item withyou">
                        <div class="gla_shop_item">
                            <a href="images/galleries/24.JPG" class="lightbox">
                                <img src="images/galleries/24.JPG" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item adventure">
                        <div class="gla_shop_item">
                            <a href="images/galleries/30.jpg" class="lightbox">
                                <img src="images/galleries/30.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item prewedding">
                        <div class="gla_shop_item">
                            <a href="images/galleries/31.jpg" class="lightbox">
                                <img src="images/galleries/31.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item withyou">
                        <div class="gla_shop_item">
                            <a href="images/galleries/35.jpg" class="lightbox">
                                <img src="images/galleries/35.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item withyou">
                        <div class="gla_shop_item">
                            <a href="images/galleries/36.jpg" class="lightbox">
                                <img src="images/galleries/36.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item withyou">
                        <div class="gla_shop_item">
                            <a href="images/galleries/41.jpg" class="lightbox">
                                <img src="images/galleries/41.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item withyou">
                        <div class="gla_shop_item">
                            <a href="images/galleries/42.jpg" class="lightbox">
                                <img src="images/galleries/42.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item adventure">
                        <div class="gla_shop_item">
                            <a href="images/galleries/43.jpg" class="lightbox">
                                <img src="images/galleries/43.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item adventure">
                        <div class="gla_shop_item">
                            <a href="images/galleries/44.jpg" class="lightbox">
                                <img src="images/galleries/44.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item withyou">
                        <div class="gla_shop_item">
                            <a href="images/galleries/45.jpg" class="lightbox">
                                <img src="images/galleries/45.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item withyou">
                        <div class="gla_shop_item">
                            <a href="images/galleries/53.jpg" class="lightbox">
                                <img src="images/galleries/53.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-6 gla_anim_box grid-item adventure">
                        <div class="gla_shop_item">
                            <a href="images/galleries/55.jpg" class="lightbox">
                                <img src="images/galleries/55.jpg" alt="">
                            </a>
                        </div>
                    </div>

                 </div>
                 <!-- grid end -->

            </div>
            <!-- container end -->

        </section>
        <!-- section end -->
        
        <!-- section -->
        <section class="gla_section">
            <div class="gla_slider_flower" data-bottom-top="@class:active" data--200-bottom="@class:no_active">
                <div class="gla_slider_flower_c1 gla_slider_flower_item gla_testi"></div>
                <div class="gla_slider_flower_c2 gla_slider_flower_item gla_testi"></div>
            </div>

            <div class="container text-center">

                <h2 data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">Your Wishes</h2>

                
                <div class="gla_team_slider_single" style="margin-bottom: 100px;">
                    @foreach ($comments as $comment)
                        <div class="gla_reviews_item">
                            <p>{{ $comment->content }}</p>
                            <h4>{{ $comment->name }}</h4>
                        </div>
                    @endforeach
                </div>

                <div class="divider"></div>

                <form action="{{ route('comment-post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label>Your name</label>
                            @auth
                                <input type="text" name="name" class="form-control form-opacity @error('name') is-invalid @enderror" value="{{ $user->name }}" readonly>
                            @else
                                <input type="text" name="name" class="form-control form-opacity @error('name') is-invalid @enderror">
                            @endauth
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label>Testimonial</label>
                            <textarea name="content" class="form-control form-opacity @error('content') is-invalid @enderror"></textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn submit" value="Send">
                        </div>
                    </div>
                </form>
            </div>
            <!-- container end -->
        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="images/galleries/1.jpeg">
            
            <!-- Over -->
            <div class="gla_over" data-color="#000" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="images/animations/thnyou_wh.gif" alt="" height="200" data-bottom-top="@src:images/animations/thnyou_wh.gif"></p>    
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

    </section>
    <!-- Content End -->
@endsection

@section('script')
<script>
    $(function() {
        new Splide('#image-slider', {
            autoplay: true,
            interval: 2500,
            rewind: true,
            pagination: false,
            type: 'fade'
        }).mount();
    
        var button = document.getElementById("iconMusic");
        var audio = document.getElementById("audioMusic");
    
        button.addEventListener("click", function(){
        if(audio.paused){
            audio.play();
            button.innerHTML = `<i class="ti ti-control-pause"></i>`;
        } else {
            audio.pause();
            button.innerHTML = `<i class="ti ti-control-play"></i>`;
        }
        });
    });
</script>
@endsection