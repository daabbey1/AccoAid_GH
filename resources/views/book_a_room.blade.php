@extends('layouts.header_and_footer')
@section('body')
    <title> {{$name}} </title>
    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

    <div class="book-a-room">
        <div class="region-head">
            Select preferred region
        </div>
        <div class="regions">
            <div class="row">
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Accra </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Greater Accra </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Kumasi </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Ashanti </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Cape Coast </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Central </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Takoradi </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Western </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Wa </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Upper West </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Tamale </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Northern </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Damango </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Savannah </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Nareligu </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> North-East </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Goaso </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Ahafo </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Techiman </div>
                                             <div class="region-img-txt2" id="region-img-txt2">Bono East </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Sunyani </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Brong Ahafo </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Koforidua </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Eastern </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Dambai </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Oti </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Ho </div>
                                             <div class="region-img-txt2" id="region-img-txt2">Volta </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Bolgatanga </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Upper East </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3"> 
                    <div class="region-box">
                        <a href="#" class="region-img-link">
                            <div class="region-sub-box" id="region-box">
                                <div class="flip-box-front">
                                    <div class="damango-img">
                                        <div class="inner-box">
                                            <div class="region-img-txt1" id="region-img-txt1"> Sefi Wiaso </div>
                                             <div class="region-img-txt2" id="region-img-txt2"> Western North </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flip-box-back">
                                    <div class="explore-rooms">
                                        <div class="region-bcg-txt1" id="region-bcg-txt1">Explore</div>
                                        <div class="region-bcg-txt2" id="region-bcg-txt2">rooms</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection