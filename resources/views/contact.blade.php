@extends('layouts.header_and_footer')
@section('body')
    <title> {{$name}}  </title>
    <div class="contact-body">
        <div class="contact-box">
            <div class="contact-into">
                <div class="contact-into-head"> Connect With Us </div>
                <div class="contact-into-body"> We would love to respond to your request and assist with the necessary support. </div>
            </div>
            <div class="row contact-mini-box">
                <div class="col-7 meeting-form">
                    <div class=" ">
                        <div class="meeting-head">
                            <div class="meeting-title"> Request Meeting </div>
                            {{-- <div class="meeeting-body"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci! Lorem ipsum dolor sit amet. </div> --}}
                        </div>
                        <div class="meeting-body">
                            <form>
                                <div class="form-group row meeting-row">
                                    <div class="col-6 ">
                                        <label for="name"> Name </label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="col-6">
                                        <label for="phone"> Phone </label>
                                        <input type="tel" class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="form-group row meeting-row">
                                    <div class="col-6">
                                        <label for="email"> Email </label>
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="col-6">
                                        <label class="" for="option"> Select </label>
                                        <select class="form-control" id="optionSelect">
                                            <option selected> Tenant </option>
                                            <option value="1"> Landlord </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group meeting-row">
                                    <label for="message"> Message </label>
                                    <textarea class="form-control" id="messageArea" rows="3"></textarea>
                                </div>
                                <div class="book-btm mt-3">
                                    <button type="submit" class="btn form-control book-submit"> REQUEST A MEETING </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-5 contact-adrress">
                    <div class="">
                        <div class="contact-right-head">
                            <div class="contact-title"> Reach Us </div>
                        </div>
                        <div class="contact-right-body">
                            <div class="contact-mini-body">
                                <div class="row contact-row">
                                    <div class="col-3"> Email </div>
                                    <div class="col-9"> accoaidgh@gmail.com </div>
                                </div>
                                <div class="row contact-row">
                                    <div class="col-3"> Phone </div>
                                    <div class="col-9"> +233 00 000 0000 | +233 00 000 0000 </div>
                                </div>
                                <div class="row contact-row">
                                    <div class="col-3"> Address </div>
                                    <div class="col-9"> GA-530-8147 Nii Okaikwei Street, Kwashieman Behind The Chief Palace, Accra - Ghana </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Social Media  --}}
        <div class="social-media-contacts">
            <div class="media-title1"> SOCIAL MEDIA </div>
            <div class="media-title2"> Get Connected </div>
            <hr class="media-line">
            <div class="media-icons">
                <span class="facebook"> <i class="fa-brands brand-icons fa-facebook-f"></i> </span>
                <span class="instagram"> <i class="fa-brands brand-icons fa-instagram"></i> </span>
                <span class="google"> <i class="fa-brands brand-icons fa-google"></i> </span>
                <span class="youtube"> <i class="fa-brands brand-icons fa-youtube"></i> </span>
            </div>
        </div>
    </div>
@endsection