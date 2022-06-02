@extends('layouts.header_and_footer')
@section('body')
    <title> {{$name}}  </title>
    <div class="about-us">
        {{-- Hero Section --}}
        <div class="about-hero-section">
            {{-- platform-hero-section --}}
            <div class="about-hero-image" style="">
                
            <div class="about-hero-background" style="">
                <div class="about-section-title" style="">
                About Us
                {{-- AccoAid <br> get you covered --}}
                </div>
                <div class="hero-section-body ">
                ACCOAID get you covered, consectetur adipisicing elit. <br> Amet id praesentium, magnam pariatur saepe eaque maxime  ab <br> doloremque 
                </div>

                {{-- <img class="about-image" src="images\about-hero.jpg" alt="hero"> --}}
            </div>
            </div>
        </div>

        {{-- Our Story --}}
        <div class="row our-story">
            <div class="col-6">
                <img class="story-image" src="images\our-story1.jpg" alt="hero">
            </div>
            <div class="col-6">
                <div class="story-title"> 
                    Our Story 
                    <hr class="short-line">
                </div>
                <div class="story-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ea veniam eum reprehenderit. Aperiam ut obcaecati cum quidem rem illo fugit esse debitis, perferendis adipisci in impedit harum repudiandae illum. Lorem ipsum dolor, sit amet consectetur adipisicing elit.             Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>  exercitationem repudiandae hic, quam temporibus, aut debitis facilis! Officiis eos tempora id molestias cumque autem  Lorem ipsum dolor sit amet consectetur adipisicing elit. Error placeat totam neque impedit fugiat, optio molestiae possimus maiores molestias libero!
                </div>
                <div class="button">
                    <a class="contact-btn" href="#"> Contact Us </a>
                </div>
            </div>
        </div>

        {{-- Our Mission --}}
        <div class="row our-mission">
            <div class="col-6">
                <img class="mission-image" src="images\our-mission.jpg" alt="hero">
            </div>
            <div class="col-6">
                <div class="mission-title">
                    Our Mission
                    <hr class="short-line">
                </div>
                <div class="mission-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae libero autem eius vero amet sed suscipit quis cumque laborum reiciendis fugiat illo dolorem, magni accusamus esse nobis. Deleniti repellat possimus amet itaque cupiditate facilis quo inventore odio explicabo consequatur. Incidunt tempore ea fugit nemo aperiam optio corporis non harum voluptatum? <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero dolorem aliquam ipsum nihil rerum. Expedita illo quibusdam accusantium repellat quidem ducimus? Dolor, voluptates.  <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident nam reiciendis ipsum maxime quisquam labore. Repudiandae rem modi quis nisi nihil, saepe ipsa repellat quia maxime atque, voluptatem minima.
                </div>
            </div>
        </div>

        {{-- Our Values --}}
        <div class="row our-values">
            <div class="value-title"> Our Value    </div>
            <div class="col-12 value-body">
                <hr class="value-line1">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique reiciendis libero unde aperiam in sint architecto impedit ratione assumenda ea obcaecati ex deserunt hic ipsum, dolorem quibusdam porro maiores eveniet.
                <hr class="value-line2">
            </div>
            
        </div>

        {{-- Our Team --}}
        <div class="our-team">
            <div class="team-title bg-inf"> 
                Meet Our Team 
                <br>
            </div>

            <hr class="team-line">
            
            <div class="row team-body">
                <div class="col-3 team-profile">
                    <img class="profile-image" src="images\profile-1.JPG" alt="hero">
                    <div class="profile-name"> Theodorah Money </div>
                    <div class="profile-position"> CEO & CO-FOUNDER </div>
                </div>
                <div class="col-3 team-profile">
                    <img class="profile-image" src="images\profile-1.JPG" alt="hero">
                    <div class="profile-name"> Theodorah Money </div>
                    <div class="profile-position"> CEO & CO-FOUNDER </div>
                </div>
                <div class="col-3 team-profile">
                    <img class="profile-image" src="images\profile-1.JPG" alt="hero">
                    <div class="profile-name"> Theodorah Money </div>
                    <div class="profile-position"> CEO & CO-FOUNDER </div>
                </div>
                <div class="col-3 team-profile">
                    <img class="profile-image" src="images\profile-1.JPG" alt="hero">
                    <div class="profile-name"> Theodorah Money </div>
                    <div class="profile-position"> CEO & CO-FOUNDER </div>
                </div>
            </div>
        </div>
    </div>
@endsection