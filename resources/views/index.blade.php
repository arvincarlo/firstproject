@extends('layouts.app')

@section('content')
    <!-- Hero background & content on top of hero background -->
    <div id="hero-container">
        <div class="hero-wrapper">
            <h1>Arvin Carlo Cris <br> <span class="line">Cute</span> <span class="orange-txt">Web Developer</span></h1>

            <div class="btn-wrapper">
                <a href="">Let's connect</a>
                <a href="">View Portfolio</a>
            </div>
        </div>
    </div>

    <!-- 4 grid layout skills on homepage -->
    <!-- Every div is a grid item -->
    <div class="container-grid-4">
        <div>
            <img src="{{ URL('storage/icon-box.jpg') }}" alt="">
            <h2>
                Web Design
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>

        <div>
            <img src="{{ URL('storage/icon-box.jpg') }}" alt="">
            <h2>
                Web Development
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>

        <div>
            <img src="{{ URL('storage/icon-box.jpg') }}" alt="">
            <h2>
                Product Design
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>

        <div>
            <img src="{{ URL('storage/icon-box.jpg') }}" alt="">
            <h2>
                Creative Thinker
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>
    </div>

    <div class="header-section">
        <h2 class="dark big">Team</h2>
        
        <hr>
    </div>

    <!-- Meet the team section -->
    <div class="container-grid-2">
        <div>
            <img class="img-team" src="{{ URL('storage/team-section-home.jpg') }}" alt="">
        </div>
        <div>
            <h2>
                Who we are
            </h2>

            <h3 class="orange-txt">
                Meet Our Team
            </h3>

            <p>
                Whether you require distribution or fulfillment, defined freight forwarding, or a complete supply chain solution, we are here for you.
            </p>
            
            <div class="btn-wrapper">
                <a href="">About</a>
            </div>
        </div>
    </div>

    <div class="header-section">
        <h2 class="dark big">Skills</h2>

        <hr>
    </div>

    <!-- Section of skills -->
    <div class="section-why-us">
        <div>
            <i class="fas fa-code-branch icon-why-us"></i>            
            <h2>
                PHP
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>

        <div class="middle">
            <h2>
                <img src="{{ URL('storage/icon-box.jpg') }}" alt="">
            </h2>
        </div>

        <div>
            <i class="far fa-keyboard icon-why-us"></i>   
            <h2>
                HTML5
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>
        
        <div>
            <i class="fab fa-google icon-why-us"></i>            
            <h2>
                CSS
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>
        
        <div>
            <i class="fas fa-globe icon-why-us"></i>            
            <h2>
                Javascript
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>
    </div>
@endsection