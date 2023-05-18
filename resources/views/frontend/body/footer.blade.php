<footer class="footer-section pt-120 pb-120">
    <div class="container">
        <div class="row mb-30-none">
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="footer-widget widget-menu">
                    <a class="site-logo site-title" href="{{ url('/') }}"><img src="{{ URL::asset('frontend/images/logo1.png')}}" alt="site-logo" style="width: 110px; height: 110px;"></a><br><br>
                    <h3 class="widget-title">Authentication</h3>
                    <ul>
                        
                        <li><a href="{{ route('login_form') }}">Admin Login</a></li>
                        <li><a href="{{ route('login_form1') }}">Employee Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="footer-widget widget-menu">
                    <h3 class="widget-title">Useful Link</h3>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('home.plans') }}">Arrival Plans</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ url('/privicies') }}">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="footer-widget widget-menu">
                    <h3 class="widget-title">contact us</h3>
                    <ul class="footer-widget-content">
                        @php
							$quires = App\Models\Quiery::latest()->limit(1)->get();
						@endphp
						@foreach($quires as $item)
                            <li><p><i class="fas fa-map-marker-alt"></i>{{ $item->country }}</p></li>
                            <li> <p><i class="fas fa-envelope"></i>{{ $item->email }}</p> </li>
                            <li> <p><i class="fas fa-phone"></i>{{ $item->phone }}</p> </li>
                        @endforeach
                    </ul>
                    <ul class="footer-social">
                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#0" class="active"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
 