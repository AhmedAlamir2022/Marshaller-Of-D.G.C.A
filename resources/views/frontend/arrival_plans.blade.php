@extends('frontend.main_master')
@section('title') Arrival Plans  @endsection
@section('main')


    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">Arrival Plans</h2>
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
                <li class="breadcrumb-item active" aria-current="page">Arrival Plans</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- job-post-grid start  -->
    <div class="job-post-grid job-post-grid-style-one pt-120 pb-120">
        <div class="container">
            <div class="row">
                <main class="col-lg-8">
                    @foreach($plans as $plan)
                        <div class="job-post-main-area">
                            <div class="job-post">
                                <div class="job-post-header">
                                    <h4 class="title"><a href="{{ route('plane.details',$plan->id) }}">{{ $plan->airline_company }}</a></h4>
                                    <div class="job-post-meta">
                                        <div class="company-details">
                                            <span class="company-name">{{ $plan->Employees->name }}</span>
                                        </div>
                                        <div class="company-reviwes">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-post-footer d-flex justify-content-between">
                                    <div class="footer-left">
                                        <span class="job-post-time">{{ Carbon\Carbon::parse($plan->created_at)->diffForHumans() }}</span>
                                        <button class="post-bookmark">
                                        <span class="bookmark-icon"><i class="fa fa-bookmark"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div><!-- job-post end -->
                        </div>
                    @endforeach
                    <div class="row mt-60">                
                        <ul class="pagination pagination--style">
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                        </ul>
                    </div>
                </main>
                <aside class="col-lg-4">
                    <div class="sidebar">
                        <div class="job-widget mb-30">
                            <h5 class="job-widget-title">Emoployees</h5>
                            <ul class="job-widget-job-sort-list">
                                @php
									$employees = App\Models\Employee::latest()->limit(10)->get();
								@endphp
								@foreach($employees as $item)
                                    <li>{{ $item->name }}</li>
                                @endforeach
                            </ul>
                        </div><!-- job-widget end -->
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- job-post-grid job-post-grid-style-one end  -->
    

    @endsection