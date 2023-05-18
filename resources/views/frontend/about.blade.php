@extends('frontend.main_master')
@section('title') About @endsection
@section('main')


    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">About</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


  
     <!-- breadcrumb-section start -->
     <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- overview-section start -->
    <section class="overview-section--style pt-120 pb-120">
        <div class="container">
            <div class="row mb-30-none">
                <div class="col-lg-6 mb-30">
                    <div class="overview-content--style">
                        <h2 class="title">Objective Of The Project</h2>
                        <p>The current application seeks to assist employees of the Civil Aviation Authority in completing the work of reservations, research and data processing in a more professional manner and to reduce human intervention in order to reduce errors and speed up the completion of work</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="overview-thumb">
                        <img src="{{ URL::asset('frontend/images/faq.png')}}" alt="image">
                    </div>
                </div>
            </div>
            <div class="counter-area counter-area--style">
                <div class="row mb-30-none">
                    <div class="col-lg-4 col-md-6 col-sm-6 text-center mb-30">
                        <div class="counter-item">
                            <span class="counter-number">{{ \App\Models\Employee::count() }}</span>
                            <h3 class="counter-content">Employees</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 text-center mb-30">
                        <div class="counter-item">
                            <span class="counter-number">{{ \App\Models\Plans::count() }}</span>
                            <span class="counter-content">Arrival Plans</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 text-center mb-30">
                        <div class="counter-item">
                            <span class="counter-number">{{ \App\Models\Gallary::count() }}</span>
                            <span class="counter-content">Gallary Images</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview-section start -->


    <!-- choose-us-section start -->
    <section class="choose-us-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-30 pt-120 pb-120">
                    <div class="choose-content choose-content--style">
                        <h2 class="title">Suggested Sloution</h2>
                        <p>The idea is to develop the same program we have at work the program that we have now can tell you the time of arrival and the registration for the plans and the company and where it came from and the destination but as we are employed of the civil aviation we need more thing as a worker in the program like as example we want to register out the name of the employer who takes the plane and writes a note if there are any technical issues or if there is a problem happen with the passenger and type it as a report so it's become accessible to us to access it and check it. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-lg-0">
                    <div class="choose-us-thumb--style"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->


  
   

  

    @endsection