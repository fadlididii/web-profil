@extends('layouts.app')

@section('title', 'About Page')

@section('content')
    <!-- Hero Area Start-->
    <div class="hero-area2 d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12">
                    <!-- Hero Caption -->
                    <div class="hero-cap pt-100">
                        <h2>About Me</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero Area End-->

    <!-- About Section Start-->
    <section class="about-area section-padding40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Title -->
                        <div class="section-tittle mb-35">
                            <h2>About Me</h2>
                        </div>
                            <p>Fadli Muhammad currently a second-year student at Airlangga University pursuing a major in Data Science Technology. Over the past few years, I have been actively developing my leadership abilities along with both soft and hard skills pertinent to my field.</p>
                            <p>I have a keen interest in data analytics, organizational development, sports, and entrepreneurship. Known for my strong sense of responsibility, I am always eager to learn and embrace new challenges in life.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/gallery/profile.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row pt-40">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="experience">
                        <span>02 years</span>
                        <p>of academic journey in <br>Data Science Technology.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="experience">
                        <span>4 projects</span>
                        <p>successfully led <br> as a project leader.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End-->
@endsection
