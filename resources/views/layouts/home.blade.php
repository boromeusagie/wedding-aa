<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Annisa & Andi Wedding Invitation</title>



<!-- Favicon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
{{-- <link rel="icon" href="{{images/favicon.ico}}" type="image/x-icon"> --}}


<!-- Library CSS -->
<link href="css/app.css" rel="stylesheet">
<link href="css/glanz_library.css" rel="stylesheet">

<!-- Icons CSS -->
<link href="fonts/themify-icons.css" rel="stylesheet">

<!-- Theme CSS -->
<link href="css/glanz_style.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700%7COpen+Sans:300,400,700%7CPlayfair+Display:400,400i,700,700i" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">

<!-- Other Fonts -->
<link href="fonts/marsha/stylesheet.css" rel="stylesheet">
<link href="fonts/Blacksword.otf" rel="stylesheet">

@toastr_css
<link href="css/splide.min.css" rel="stylesheet">
<link href="css/jquery.steps.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">



</head>
<body class="gla_middle_titles">

<!-- Preloader -->
<div class="gla_page_loader gla_image_bck" data-color="#f2f2f2">
    <div class="gla_loader">
        @auth
            <div class="gla_slide_midtitle">Welcome {{ $user->name }}</div>
        @else
            <p><img src="images/animations/ourwedding_st.gif" height="150" alt=""></p>  
            <div class="gla_slide_midtitle">Annisa & Andi</div>
        @endauth  
        <p>Loading...</p>
    </div>
</div>
<!-- Preloader End-->

<!-- Page -->
<div class="gla_page" id="gla_page">

    @yield('content')
    
</div>
<!-- Page End -->



<!-- JQuery -->
<script src="js/jquery-1.12.4.min.js"></script> 
<!-- Library JS -->
<script src="js/glanz_library.js"></script> 

<!-- Theme JS -->
<script src="js/glanz_script.js"></script>

<script src="js/splide.min.js"></script>
@toastr_js
@toastr_render
@yield('js')
@yield('script')
</body>
</html>