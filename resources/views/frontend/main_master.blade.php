<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') - Marshaller of D.G.C.A</title>
        <!-- fontawesome css link -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/css/fontawesome-all.min.css')}}">
        <!-- flaticon css -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/font/flaticon.css')}}">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/css/magnific-popup.css')}}">
        <!-- nice-select css -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/css/nice-select.css')}}">
        <!-- bootstrap css link -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/css/bootstrap.min.css')}}">
        <!-- swipper css link -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/css/swiper.min.css')}}">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('frontend/images/fav.png')}}" type="image/x-icon">
        <!-- animate.css -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/css/animate.css')}}">
        <!-- main style css link -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/css/style.css')}}">
        <!-- responsive css link -->
        <link rel="stylesheet" href="{{ URL::asset('frontend/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    </head>
    <body>
        <!-- preloader -->
        <div class="preloader" id="preloader">
            <div class="preloader-thumb">
                <img src="{{ URL::asset('frontend/images/propeller.png')}}" alt="image">
            </div>
        </div>
        <!-- header-section start -->
        @include('frontend.body.header')
        <!-- header-section end -->
        <!-- banner-section start -->
        @yield('main')
        <a href="#" class="scrollToTop"><img src="{{ URL::asset('frontend/images/aeroplane.png')}}" alt="image"></a>
        <!-- footer-section start -->
        @include('frontend.body.footer')
        <!-- footer-section end -->
        <!-- jquery -->
        <script src="{{ URL::asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
        <!-- migarate-jquery -->
        <script src="{{ URL::asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{ URL::asset('frontend/js/bootstrap.min.js')}}"></script>
        <!-- magnific-popup js -->
        <script src="{{ URL::asset('frontend/js/jquery.magnific-popup.js')}}"></script>
        <!-- isotope -->
        <script src="{{ URL::asset('frontend/js/isotope.pkgd.min.js')}}"></script>
        <!-- nice-select js-->
        <script src="{{ URL::asset('frontend/js/jquery.nice-select.js')}}"></script>
        <!-- swipper js -->
        <script src="{{ URL::asset('frontend/js/swiper.min.js')}}"></script>
        <!-- waypoints js link -->
        <script src="{{ URL::asset('frontend/js/jquery.waypoints.min.js')}}"></script>
        <!-- counterup js -->
        <script src="{{ URL::asset('frontend/js/jquery.counterup.min.js')}}"></script>
        <!-- paroller js -->
        <script src="{{ URL::asset('frontend/js/jquery.paroller.min.js')}}"></script>
        <!-- main -->
        <script src="{{ URL::asset('frontend/js/main.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script>
			@if(Session::has('message'))
				var type = "{{ Session::get('alert-type','info') }}"
				switch(type){
					case 'info':
					toastr.info(" {{ Session::get('message') }} ");
					break;

					case 'success':
					toastr.success(" {{ Session::get('message') }} ");
					break;

					case 'warning':
					toastr.warning(" {{ Session::get('message') }} ");
					break;

					case 'error':
					toastr.error(" {{ Session::get('message') }} ");
					break; 
				}
			@endif 
		</script>
    </body>
</html>
