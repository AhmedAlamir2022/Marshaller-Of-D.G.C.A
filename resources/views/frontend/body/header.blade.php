<header class="header-section">
    <div class="header-top d-none d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="header-wrapper">
                        <div class="header-info">
                            @php
								$quires = App\Models\Quiery::latest()->limit(1)->get();
							@endphp
							@foreach($quires as $item)
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">location</h6>
                                        <span>{{ $item->country }}</span>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <i class="flaticon-message"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">email address</h6>
                                        <span>{{ $item->email }}</span>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">Phone</h6>
                                        <span>{{ $item->phone }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a class="site-logo site-title" href="{{ url('/') }}"><img src="{{ URL::asset('frontend/images/logo1.png')}}" alt="site-logo" style="width: 80px; height: 80px;"></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu ml-auto">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('home.plans') }}">Arrival Plans</a></li>
                            <li><a href="{{ url('/privicies') }}">Privacy</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>                   
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>