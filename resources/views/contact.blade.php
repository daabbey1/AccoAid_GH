@extends('layouts.header_and_footer')
@section('body')
    <title> {{$name}}  </title>
    <div class="contact-body">
        <div class="contact-box">
            <div class="row">
                <div class="col-6 bg-white">
                    <div class="meeting-form">
                        <div class="meeting-head">
                            <div class="meeting-title"> Book a Meeting </div>
                            <div class="meeeting-body"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci! Lorem ipsum dolor sit amet. </div>
                        </div>
                        <div class="meeting-body">
                            <form>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="name"> Name </label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="col-6">
                                        <label for="phone"> Phone </label>
                                        <input type="tel" class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
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
                                    <div class="form-group">
                                        <label for="message"> Message </label>
                                        <textarea class="form-control" id="messageArea" rows="3"></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary form-control"> BOOK A </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6 bg-info">
                    <div class="contact-adress">
                        <div class="contact-head">
                            <div class="contact-title"> Reach Us </div>
                        </div>
                        <div class="contact-body">
                            <div class="contact-body">
                                <div class="row">
                                    <div class="col-2"> Email </div>
                                    <div class="col-10"> accoaidgh@gmail.com </div>
                                </div>
                                <div class="row">
                                    <div class="col-2"> Phone </div>
                                    <div class="col-10"> +233 00 000 0000 | +233 00 000 0000 </div>
                                </div>
                                <div class="row">
                                    <div class="col-2"> Address </div>
                                    <div class="col-10"> GA-530-8147 Nii Okaikwei Street, Kwashieman Behind The Chief Palace, Accra - Ghana </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection