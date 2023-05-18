@extends('frontend.main_master')
@section('title') Home  @endsection

@section('main')
    <!-- banner-section start -->
    <section class="banner-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="banner-content">
                        <h2 class="title">Marshaller of D.G.C.A</h2>
                        <p>Suspendisse parturient, mauris qui suspendisse erat erat aenean. Tempor suspendisse cras est vestibulum vestibulum.</p>
                        <div class="btn-area">
                            <a href="{{ route('contact') }}" class="cmn-btn">Contact us</a>
                            <a href="{{ route('about') }}" class="cmn-btn-active">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->
    <!-- about-section start -->
    <section class="about-section pt-120 pb-120 bg_img" data-background="{{ URL::asset('frontend/images/map.png')}}">
        <div class="about-element-one">
            <img src="{{ URL::asset('frontend/images/shape.png')}}" alt="image">
        </div>
        <div class="about-element-two my-paroller" data-paroller-factor="0.05" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{ URL::asset('frontend/images/shape-2.png')}}" alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <h2 class="title">Objectives & Target Customer </h2>
                        <p>The current application seeks to assist employees of the Civil Aviation Authority in completing the work of reservations, research and data processing in a more professional manner and to reduce human intervention in order to reduce errors and speed up the completion of work.</p>
                        <p>The user community of the current application is: Civil Aviation Authority employees, supervisors, observers, and auditors as well. In addition to department heads.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->
     <!-- team-section start -->
     <section class="team-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Our Expert Employees</h2>
                        <span class="title-border"></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                @php
                    $employees = App\Models\Employee::latest()->limit(10)->get();
                @endphp
                @foreach($employees as $item)
                    <div class="col-lg-3 col-sm-6 mb-30">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="{{ URL::asset('assets/images/user_icon.png') }}" alt="image">
                            </div>
                            <div class="team-content">
                                <h3 class="title">{{ $item->name }}</h3>
                                <span class="sub-title">{{ $item->email }}</span>
                            </div>  
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- team-section end -->


 

    <!-- choose-us-section start -->
    <section class="choose-us-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-30 pt-120 pb-120">
                    <div class="choose-content choose-content--style">
                        <h2 class="title">Initial Description Of The Problem</h2>
                        <p>I am an employee in civil aviation, and we have a website with distinguished services, but there are many incomplete things that represent an obstacle to our work.</p>
                        <p>The employee responsible for recording the flight data is not done through the website, and we do not have sufficient information about the place of arrival of the flight and the time taken for it.</p>
                        <p>If there is a note we want to register, there is no form within the site to send to officials or to refer to it when needed</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-lg-0">
                    <div class="choose-us-thumb--style"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->


   


   


    <!-- portfolio-section start -->
    <section class="portfolio-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Our Photo Gallery</h2>
                        <span class="title-border"></span></div>
                </div>
            </div>
            <div class="portfolio-filter-wrapper wow fadeIn" data-wow-duration="2s">
                <div class="button-group filter-btn-group">
                    <button class="active" data-filter="*">All</button>
                </div>
                <div class="grid grid--style">
                    @php
						$images = App\Models\Gallary::latest()->limit(10)->get();
					@endphp
					@foreach($images as $item)
                        <div class="grid-item grid-item--style marketing analysis">
                            <div class="posrt-thumb grid-thumb--style">
                                <img src="{{ asset($item->gallery_image) }}" alt="portfolio image">
                                <div class="project-overlay-text text-center">
                                    <h3 class="title"><a href="gallery.html">{{ $item->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-section end -->
<!-- overview-section start -->
<section class="overview-section">
    <div class="overview-element my-paroller" data-paroller-factor="0.05" data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="{{ URL::asset('frontend/images/overview-bg.png')}}" alt="image">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 pl-lg-0">
                <div class="overview-thumb--style2"></div>
            </div>
            <div class="col-lg-6">
                <div class="overview-content pt-120 pb-120">
                    <h2 class="title">Suggested Sloution</h2>
                    <p>The idea is to develop the same program we have at work the program that we have now can tell you the time of arrival and the registration for the plans and the company and where it came from and the destination but as we are employed of the civil aviation we need more thing as a worker in the program like as example we want to register out the name of the employer who takes the plane and writes a note if there are any technical issues or if there is a problem happen with the passenger and type it as a report so it's become accessible to us to access it and check it.</p>
                    
                    <div class="row mb-30-none">
                        <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                            <div class="counter-item">
                                <span class="counter-number">{{ \App\Models\Employee::count() }}</span>
                                <h3 class="counter-content">Employees</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                            <div class="counter-item">
                                <span class="counter-number">{{ \App\Models\Plans::count() }}</span>
                                <span class="counter-content">Arrival Plans</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                            <div class="counter-item">
                                <span class="counter-number">{{ \App\Models\Gallary::count() }}</span>
                                <span class="counter-content">Gallary Images</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- overview-section start -->

 

   
    
@endsection
