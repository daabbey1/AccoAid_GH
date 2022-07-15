@extends('layouts.header_and_footer')
@section('body')
    <title> {{$name}} </title>
    <div class="book-a-room">
        <div class="region-head">
            Select preferred region
        </div>
        <div class="regions">
            <div class="row">
                <div class="col-3"> 
                    <div class="wa-region-img" id="region-image" onmouseover="waHover()" onmouseout="waHoverOut()">
                        <a href="#" class="region-img-link">
                            <div class="region-box" id="region-box">
                                <div class="region-img-txt1" id="region-img-txt1"> Wa </div>
                                <div class="region-img-txt2" id="region-img-txt2"> Upper West </div>
                                
                                <div class="region-box-hover" style="border-left:5px solid white; ">
                                    <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                    <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="tamale-region-img" id="region-image" onmouseover="tamaleHover()" onmouseout="tamaleHoverOut()">
                        <a href="#" class="region-img-link">
                            <div class="region-box" id="region-box">
                                <div class="region-img-txt1" id="region-img-txt1"> Tamale </div>
                                <div class="region-img-txt2" id="region-img-txt2"> Northern </div>
                                
                                <div class="region-box-hover" style="border-left:5px solid white; ">
                                    <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                    <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="region-img1">
                        <div class="region-box">
                            <div class="region-img-txt1"> Tamale </div>
                            <div class="region-img-txt2"> Northern </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-3"> 
                    <div class="damango-region-img">
                        <a href="#" class="region-img-link">
                            <div class="region-box" id="region-box">
                                <div class="region-img-txt1" id="region-img-txt1"> Damango </div>
                                <div class="region-img-txt2" id="region-img-txt2"> Savannah </div>
                                
                                <div class="region-box-hover" style="border-left:5px solid white; display:none ">
                                    <div class="region-bcg-txt11" id="region-bcg-txt1">Explore</div>
                                    <div class="region-bcg-txt21" id="region-bcg-txt2">rooms</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-img1">
                        <div class="region-box">
                            <div class="region-img-txt1"> Nareligu </div>
                            <div class="region-img-txt2"> North-East </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection