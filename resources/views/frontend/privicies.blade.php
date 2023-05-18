@extends('frontend.main_master')
@section('title') Arrival Plan Details  @endsection
@section('main')

<!-- banner-section start -->
<section class="inner-banner-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="inner-banner-content">
                    <h2 class="title">Privacy Policy</h2>
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
            <li class="breadcrumb-item active" aria-current="page">Privacy</li>
            </ol>
        </nav>
    </div>
</div>
<!-- breadcrumb-section end -->

<!-- privacy-section start -->
<section class="privacy-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-30-none">
                @php
                    $privices = App\Models\Privacy::latest()->get();
                @endphp
                @foreach($privices as $item)
                <div class="privacy-content mb-30">
                    <h3 class="title">{{ $item->question }}</h3>
                    <p>{{ $item->answer }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- privacy-section end -->


@endsection