@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
    <!-- Hero Area Start -->
    <div class="hero-area2 d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12">
                    <!-- Hero Caption -->
                    <div class="hero-cap pt-100">
                        <h2>My Portfolio</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero Area End-->

    <!-- My Expertise Section Start-->
    <section class="about-area section-padding40 our-services">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-75 text-center">
                        <h2>My Expertise</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-services single-services2 mb-30">
                        <div class="services-cap">
                            <h5>Data Analysis & Machine Learning</h5>
                            <p>Experienced in using Python and R for data analytics, machine learning, and classification projects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-services single-services2 mb-30">
                        <div class="services-cap">
                            <h5>Data Visualization</h5>
                            <p>Proficient in creating interactive data visualizations using Tableau, R, and Python for insights and storytelling.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-services single-services2 mb-30">
                        <div class="services-cap">
                            <h5>Project Leadership</h5>
                            <p>Led multiple projects, applying effective leadership, teamwork, and project management skills to achieve goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- My Expertise Section End-->

    <!-- Gallery Area Start -->
    <div class="gallery-area section-padding40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-60">
                        <h2>Fadli's Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                @foreach($portfolios as $portfolio)
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <div class="box snake mb-30" style="position: relative; cursor: pointer;">
                        <!-- Membuat link mencakup seluruh div -->
                        <a href="{{ $portfolio->project_link }}" target="_blank" style="text-decoration: none; color: inherit; display: block;">
                            <div class="gallery-img small-img" style="background-image: url('{{ asset($portfolio->image_url) }}');"></div>
                            <div class="overlay" style="background-color: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0; transition: opacity 0.3s;">
                                <div class="overlay-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <i class="ti-plus" style="font-size: 24px; color: white;"></i>
                                </div>
                            </div>
                            <h3 style="margin-top: 15px; color: black;">{{ $portfolio->name }}</h3>
                            <p style="color: black;">{{ $portfolio->description }}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

@endsection