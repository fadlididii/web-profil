@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!--? Hero Area Start-->
<div class="slider-area">
    <div class="single-slider slider-height d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-10 col-md-10 col-sm-10">
                    <!-- Hero Caption -->
                    <div class="hero__caption text-left ml-3">
                        <h1>Fadli.</h1>
                        <p>Airlangga University</p>
                        <p class="cd-headline letters scale">Majoring in 
                            <a class="cd-words-wrapper">
                                <b class="is-visible">Data</b>
                                <b>Science</b>
                                <b>Technology</b>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Hero Area End-->
<!--? About 1 Start-->
<section class="about-area section-padding40">
<div class="container">
    <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-10">
            <div class="about-caption mb-50">
                <!-- Section Tittle -->
                <div class="section-tittle mb-35">
                    <h2>About</h2>
                </div>
                <p>Fadli Muhammad currently a second-year student at Airlangga University pursuing a major in Data Science Technology. Over the past few years, I have been actively developing my leadership abilities along with both soft and hard skills pertinent to my field.</p>
                
                <p>I have a keen interest in data analytics, organizational development, sports, and entrepreneurship. Known for my strong sense of responsibility, I am always eager to learn and embrace new challenges in life.</p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="about-img">
                <img src="assets/img/gallery/profile.jpg" alt="">
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
<!-- About  End-->
<!--? May-about Start -->
<div class="may-about section-padding40">
    <div class="container">
        <div class="row">
            <!-- Experience Section -->
            <div class="col-lg-12">
                <div class="section-tittle2 mb-30">
                    <h2>Experience</h2>
                </div>
            </div>
            <!-- Ministry of Finance, BEM FTMM -->
            <div class="col-xl-12">
                <div class="single-about">
                    <div class="tittle-experience">
                        <h3>Ministry of Finance Staff</h3>
                        <p>Feb 2024 - Present</p>
                    </div>
                    <div class="experience-link">
                        <p>BEM FTMM, Airlangga University</p>
                    </div>
                </div>
            </div>
            <!-- Human Resources, IRIS Research -->
            <div class="col-xl-12">
                <div class="single-about">
                    <div class="tittle-experience">
                        <h3>Human Resources Staff</h3>
                        <p>Dec 2023 - Present</p>
                    </div>
                    <div class="experience-link">
                        <p>IRIS Research</p>
                    </div>
                </div>
            </div>
            <!-- Research and Scientific Department, HIMATESDA -->
            <div class="col-xl-12">
                <div class="single-about">
                    <div class="tittle-experience">
                        <h3>Treasurer and Staff</h3>
                        <p>Feb 2023 - Dec 2023</p>
                    </div>
                    <div class="experience-link">
                        <p>Research and Scientific Department, HIMATESDA</p>
                    </div>
                </div>
            </div>
            <!-- Committee Experience Section -->
            <div class="col-lg-12">
                <div class="section-tittle2 mb-30 pt-50">
                    <h2>Committee Experiences</h2>
                </div>
            </div>
            <!-- SPONTAN, HIMATESDA -->
            <div class="col-xl-12">
                <div class="single-about">
                    <div class="tittle-experience">
                        <h3>Treasurer</h3>
                        <p>Nov - Dec 2023</p>
                    </div>
                    <div class="experience-link">
                        <p>SPONTAN (Sport and Art Competition), HIMATESDA</p>
                    </div>
                </div>
            </div>
            <!-- Dataquest by Airnology 2.0, BEM FTMM -->
            <div class="col-xl-12">
                <div class="single-about">
                    <div class="tittle-experience">
                        <h3>Treasurer</h3>
                        <p>Sep - Oct 2023</p>
                    </div>
                    <div class="experience-link">
                        <p>Dataquest by Airnology 2.0, HIMATESDA</p>
                    </div>
                </div>
            </div>
            <!-- Education Section -->
            <div class="col-lg-12">
                <div class="section-tittle2 mb-30 pt-50">
                    <h2>Education</h2>
                </div>
            </div>
            <!-- Undergraduate Program -->
            <div class="col-xl-12">
                <div class="single-about">
                    <div class="tittle-experience">
                        <h3>Data Science Technology Undergraduate Program</h3>
                        <p>2022 - Present</p>
                    </div>
                    <div class="experience-link">
                        <p>Airlangga University, GPA: 3.47/4.00</p>
                    </div>
                </div>
            </div>
            <!-- High School -->
            <div class="col-xl-12">
                <div class="single-about">
                    <div class="tittle-experience">
                        <h3>High School Diploma, Mathematic and Science</h3>
                        <p>2019 - 2022</p>
                    </div>
                    <div class="experience-link">
                        <p>Al-Azhar 4 High School, Examination Average: 90.42</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- May-about End -->

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
</main>
<footer>
