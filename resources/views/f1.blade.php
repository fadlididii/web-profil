@extends('layouts.app')

@section('title', 'F1 Teams and Cars')

@section('content')
    <!-- Hero Area Start -->
    <div class="hero-area2 d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12">
                    <!-- Hero Caption -->
                    <div class="hero-cap pt-100">
                        <h2>Formula 1 Teams - 2023 Season</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="about-area section-padding40">
        <div class="container">     

            <!-- Mercedes-AMG Petronas -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">Mercedes-AMG Petronas</h2>
                    <img src="{{ asset('merc.jpg') }}" alt="Mercedes" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Lewis Hamilton, George Russell</li>
                        <li><strong>Team Principal:</strong> Toto Wolff</li>
                        <li><strong>Country:</strong> United Kingdom</li>
                        <li><strong>Engine:</strong> Mercedes</li>
                        <li><strong>Constructors' World Championships:</strong> 8 (2014-2021)</li>
                    </ul>
                </div>
            </div>

            <!-- Red Bull Racing -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">Red Bull Racing</h2>
                    <img src="{{ asset('redbull.jpeg') }}" alt="Red Bull" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Max Verstappen, Sergio Pérez</li>
                        <li><strong>Team Principal:</strong> Christian Horner</li>
                        <li><strong>Country:</strong> United Kingdom</li>
                        <li><strong>Engine:</strong> Red Bull Powertrains</li>
                        <li><strong>Constructors' World Championships:</strong> 4 (2010-2013)</li>
                    </ul>
                </div>
            </div>

            <!-- Scuderia Ferrari -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">Scuderia Ferrari</h2>
                    <img src="{{ asset('ferrari.jpg') }}" alt="Ferrari" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Charles Leclerc, Carlos Sainz</li>
                        <li><strong>Team Principal:</strong> Frédéric Vasseur</li>
                        <li><strong>Country:</strong> Italy</li>
                        <li><strong>Engine:</strong> Ferrari</li>
                        <li><strong>Constructors' World Championships:</strong> 16 (most recently in 2008)</li>
                    </ul>
                </div>
            </div>

            <!-- McLaren F1 Team -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">McLaren F1 Team</h2>
                    <img src="{{ asset('mclaren.jpg') }}" alt="McLaren" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Lando Norris, Oscar Piastri</li>
                        <li><strong>Team Principal:</strong> Andrea Stella</li>
                        <li><strong>Country:</strong> United Kingdom</li>
                        <li><strong>Engine:</strong> Mercedes</li>
                        <li><strong>Constructors' World Championships:</strong> 8 times (last in 1998)</li>
                    </ul>
                </div>
            </div>

            <!-- Alpine F1 Team -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">Alpine F1 Team</h2>
                    <img src="{{ asset('alpine.jpg') }}" alt="Alpine" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Esteban Ocon, Pierre Gasly</li>
                        <li><strong>Team Principal:</strong> Bruno Famin</li>
                        <li><strong>Country:</strong> Enstone, United Kingdom</li>
                        <li><strong>Engine:</strong> Renault</li>
                        <li><strong>Constructors' World Championships:</strong> 2 times as Renault (2005, 2006)</li>
                    </ul>
                </div>
            </div>

            <!-- Aston Martin F1 Team -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">Aston Martin F1 Team</h2>
                    <img src="{{ asset('aston.jpg') }}" alt="Aston Martin" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Fernando Alonso, Lance Stroll</li>
                        <li><strong>Team Principal:</strong> Mike Krack</li>
                        <li><strong>Country:</strong> Silverstone, United Kingdom</li>
                        <li><strong>Engine:</strong> Mercedes</li>
                        <li><strong>Constructors' World Championships:</strong> 0</li>
                    </ul>
                </div>
            </div>

            <!-- Williams Racing -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">Williams Racing</h2>
                    <img src="{{ asset('williams.jpg') }}" alt="Williams" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Alex Albon, Logan Sargeant</li>
                        <li><strong>Team Principal:</strong> James Vowles</li>
                        <li><strong>Country:</strong> Grove, United Kingdom</li>
                        <li><strong>Engine:</strong> Mercedes</li>
                        <li><strong>Constructors' World Championships:</strong> 9 times (last in 1997)</li>
                    </ul>
                </div>
            </div>

            <!-- Haas F1 Team -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">Haas F1 Team</h2>
                    <img src="{{ asset('haas.jpg') }}" alt="Haas" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Kevin Magnussen, Nico Hulkenberg</li>
                        <li><strong>Team Principal:</strong> Günther Steiner</li>
                        <li><strong>Country:</strong> Kannapolis, United States</li>
                        <li><strong>Engine:</strong> Ferrari</li>
                        <li><strong>Constructors' World Championships:</strong> 0</li>
                    </ul>
                </div>
            </div>

            <!-- Alfa Romeo F1 Team ORLEN -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">Alfa Romeo F1 Team ORLEN</h2>
                    <img src="{{ asset('alfa.jpg') }}" alt="Alfa Romeo" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Valtteri Bottas, Zhou Guanyu</li>
                        <li><strong>Team Principal:</strong> Frédéric Vasseur</li>
                        <li><strong>Country:</strong> Switzerland</li>
                        <li><strong>Engine:</strong> Ferrari</li>
                        <li><strong>Constructors' World Championships:</strong> 0</li>
                    </ul>
                </div>
            </div>

            <!-- Scuderia AlphaTauri -->
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center">Scuderia AlphaTauri</h2>
                    <img src="{{ asset('alpha.jpg') }}" alt="AlphaTauri" class="img-fluid rounded mb-2" style="max-width: 500px; display: block; margin: 0 auto;">
                    <ul class="list-unstyled">
                        <li><strong>Drivers:</strong> Daniel Ricciardo, Yuki Tsunoda</li>
                        <li><strong>Team Principal:</strong> Franz Tost</li>
                        <li><strong>Country:</strong> Faenza, Italy</li>
                        <li><strong>Engine:</strong> Red Bull Powertrains (Honda in partnership)</li>
                        <li><strong>Constructors' World Championships:</strong> 0</li>
                    </ul>
                </div>
            </div>
        </div>
@endsection
