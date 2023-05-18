@extends('frontend.main_master')
@section('title') Contact @endsection
@section('main')


    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">contact with us</h2>
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
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- contact-section start -->
    <section class="contact-section pt-120 pb-120">
        <div class="container">
            <div class="account-wrapper">
                <div class="login-area account-area change-form">
                    <div class="row m-0">
                        <div class="col-lg-5 p-0">
                            <div class="change-catagory-area">
                                <h3 class="title">send us a Messages</h3>
                                <form class="contact-form" id="contact_form_submit" method="post" action="{{ route('store.message') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" placeholder="full name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" id="phone" name="phone" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message" id="message" cols="30" name="message" rows="2" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="cmn-btn.active" value="submit now">

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 p-0">
                            <div class="common-form-style bg-one create-account">
                                <h3 class="title">contact info</h3>
                                <p>Quam arcu ac, at adipiscing justo lectus nibh massa. Quam euismod, nam eu tellus, massa non mauris consequaturna mauris aliquet lorem molestie nec.</p>
                                <ul class="account-item">
                                    @php
                                        $quires = App\Models\Quiery::latest()->limit(1)->get();
                                    @endphp
                                    @foreach($quires as $item)
                                        <li>{{ $item->country }}</li>
                                        <li>{{ $item->email }}</li>
                                        <li>{{ $item->phone }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->
    @endsection

