@extends('frontend.main_master')
@section('title') Arrival Plan Details  @endsection
@section('main')


    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">Arrival Plan Details</h2>
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
                <li class="breadcrumb-item"><a href="{{ route('home.plans') }}">Arrival Plans</a></li>
                <li class="breadcrumb-item active" aria-current="page">Arrival Plan Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- job-details-section start  -->
    <div class="job-details-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <main class="col-lg-8">
                    <div class="job-details-wrapper">
                        <div class="details-area">
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Airline Company</span>
                                </div>
                                <div class="right">
                                    <p>{{ $plans->airline_company }}</p>
                                </div>
                            </div>
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Flight Number</span>
                                </div>
                                <div class="right">
                                    <p>{{ $plans->flight_number }}</p>
                                </div>
                            </div>
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Notes</span>
                                </div>
                                <div class="right">
                                    <p>{{ $plans->notes }}</p>
                                </div>
                            </div>
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Airline Type</span>
                                </div>
                                <div class="right">
                                    <p>{{ $plans->airplane_type }}</p>
                                </div>
                            </div>
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Employee Name</span>
                                </div>
                                <div class="right">
                                    <p>{{ $plans->Employees->name }}</p>
                                </div>
                            </div>
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Gate</span>
                                </div>
                                <div class="right">
                                    <p>{{ $plans->gate }}</p>
                                </div>
                            </div>
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Time</span>
                                </div>
                                <div class="right">
                                    <p>{{ $plans->time }}</p>
                                </div>
                            </div>
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Arrival</span>
                                </div>
                                <div class="right">
                                    <p>{{ $plans->arrival }}</p>
                                </div>
                            </div>
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Airplane Reg</span>
                                </div>
                                <div class="right">
                                    <p>{{ $plans->airplane_reg }}</p>
                                </div>
                            </div>
                            <div class="single-row">
                                <div class="left">
                                    <span class="row-title">Added Date</span>
                                </div>
                                <div class="right">
                                    <p>{{ Carbon\Carbon::parse($plans->created_at)->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <!-- job-details-section end  -->
    


    @endsection