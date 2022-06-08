@extends('layouts.header_and_footer')
@section('body')
    <title> {{$name}}  </title>
    <div class="review">
        <div class="hero-section">
            <div class="review-title1">
                REVIEWS
            </div>
            <div class="review-title2">
                From Our Clients & Landlords
            </div>
        </div>

        {{-- Tenants Section --}}
        <div class="tenants-section">
            <div class="row">
                <div class="col-6">
                    <div class="row tenant-row">
                        <div class="col-6">
                            <div class="tenant-img">
                                <img class="tenant-img-left" src="images\profile-1.jpg" alt="hero">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="tenant-img">
                                <img class="tenant-image" src="images\profile-1.jpg" alt="hero">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="tenant-img">
                                <img class="tenant-img-left" src="images\profile-1.jpg" alt="hero">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="tenant-img">
                                <img class="tenant-image" src="images\profile-1.jpg" alt="hero">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 tenants-right-section">
                    <div class="tenanats-text1">
                        HAPPY TENANTS
                    </div>
                    <div class="tenanats-text2">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum perspiciatis, aut rem nihil nostrum veniam!
                    </div>
                    <div class="tenanats-text3"></div>
                    <hr class="tenants-line">
                </div>
            </div>
        </div>

        {{-- Join - Us  --}}
        <div class="join-us">
            <div class="row">
                <div class="col-6">
                    <div class="join">
                        <div class="join-title">
                            Ready to join us?
                        </div>
                        <div class="join-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, quia pariatur dolore placeat ipsam amet  quia pariatur dolore placea quia pariatur dolore placea.
                        </div>
                        <div class="review-button">
                            <a class="review-book-btn" href="#"> Book A Room </a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img class="join-img" src="images\join-us.jpg" alt="hero">
                </div>
            </div>
        </div>

        {{-- Landlord Section --}}
        <div class="landlord-section">
            <div class="landlord-head">
                <div class="landlord-title"> OUR HOSPITABLE LANDLORDS </div>
                <hr class="landlord-line">
            </div>
            <div class="row">
                <div class="col-3 "> 
                    <div class="landlord-review">
                        <img class="landlord-profile" src="images\profile-1.jpg" alt="hero"> 
                        <div class="landlord-pro-name"> MRS DIANA BOTCHWAY </div>
                        <div class="landlord-pro-body"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="landlord-review">
                        <img class="landlord-profile" src="images\profile-1.jpg" alt="hero"> 
                        <div class="landlord-pro-name"> MRS DIANA BOTCHWAY </div>
                        <div class="landlord-pro-body"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="landlord-review">
                        <img class="landlord-profile" src="images\profile-1.jpg" alt="hero"> 
                        <div class="landlord-pro-name"> MRS DIANA BOTCHWAY </div>
                        <div class="landlord-pro-body"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="landlord-review">
                        <img class="landlord-profile" src="images\profile-1.jpg" alt="hero"> 
                        <div class="landlord-pro-name"> MRS DIANA BOTCHWAY </div>
                        <div class="landlord-pro-body"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
                {{-- <div class="col-2">
                    <img class="landlord-profile" src="images\profile-1.jpg" alt="hero"> 
                    <div class="landlord-pro-name"> MRS DIANA BOTCHWAY </div>
                    <div class="landlord-pro-body"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                </div>
                <div class="col-2">
                    <img class="landlord-profile" src="images\profile-1.jpg" alt="hero"> 
                    <div class="landlord-pro-name"> MRS DIANA BOTCHWAY </div>
                    <div class="landlord-pro-body"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                </div> --}}
            </div>
        </div>

        {{-- Host Room --}}
        <div class="host-room">
            <div class="host-title"> Host for free! </div>
            <div class="host-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore dolorum minima cum iure quibusdam! Explicabo corrupti ullam obcaecati at.
            </div>
            <div class="advertise-button">
                <a class="advertise-link-btn" href="#"> Advertise room for free </a>
            </div>
        </div>
    </div>
@endsection