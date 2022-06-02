@extends('layouts.header_and_footer')

@section('body')
    <title> {{$name}}  </title>
    <div class="sub-body">
        
        <div class="hero-section">
            {{-- platform-hero-section --}}
            <div class="platform-hero-image" style="">
                <div class="platform-hero-background" style="">
                    <div class="hero-section-title" style="">
                    Do you need <br>  a room? 
                    {{-- AccoAid <br> get you covered --}}
                    </div>
                    <div class="hero-section-body ">
                    ACCOAID get you covered, consectetur adipisicing elit. <br> Amet id praesentium, magnam pariatur saepe eaque maxime  ab <br> doloremque 
                    </div>
                </div>
            </div>
        </div>


        <div class="hero-body" id="available-rooms" > 
            <div class="row hero-body-sub">
                <div class="col-7 sub-hero-text">
                <div class="sub-hero-title ">
                    Explor Our <br> Available Rooms
                    <hr class="short-line">
                </div>
                <div class="sub-hero-body ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam saepe rem molestiae hic! At temporibus minima placeat vero.
                    <br> <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br> <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quae architecto exercitationem, nobis dolorem itaque laudantium nam et illo
                </div>
                <div class="button">
                    <a class="buttons" href="#"> Explore Rooms <i class="fa-solid fa-arrow-right-long"></i> </a>
                </div>
                </div>

                <div class="col-5 sub-hero-right">
                <div class="right-picture">
                    <img class="main-left-img" src="images\platform-hero-2.jpg" alt="room" srcset="">
                    <img class="sub-left-img" src="images\platform-hero-3.jpg" alt="room" srcset="">
                </div>
            </div>
        </div>

        <div class="row second-section" id="available-rooms">
            <div class="col-6 second-section-left">
                <img class="second-section-picture" src="images\Book-space.png" alt="Book-space">
            </div>
            <div class="col-6 second-section-right">
                <div class="second-section-title">
                    How To Book <br> Available Rooms
                    <hr class="short-line">
                </div>
                <div class="2nd-section-body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, delectus voluptatum exercitationem consequuntur ab quas libero asperiores ipsam nobis reiciendis corrupti excepturi ipsum sapiente ad facilis odio suscipit officiis culpa!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, delectus voluptatum exercitationem consequuntur ab quas libero asperiores ipsam nobis reiciendis corrupti excepturi ipsum sapiente ad facilis odio suscipit officiis culpa!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, delectus voluptatum exercitationem consequuntur ab quas libero asperiores ipsam nobis reiciendis corrupti excepturi ipsum sapiente ad facilis odio suscipit officiis culpa!</p>
                </div>
            </div>
        </div>
    </div>

    {{-- </div> --}}
@endsection