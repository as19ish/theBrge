@extends('layouts.master')

@section('content')
<section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Contact</h2>
                    <p>Get in touch</p>
                </div>
            </div>
        </section>

        <section class="get_in_touch_area p_100">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                        <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Say hello</h6>
                                <h2>Get in touch, send us an e-mail or call us</h2>
                            </div>
                            <p>Send us an email or call us to discuss your requirement. One of our partner will be available to help you out</p>
                            <a href="tel:{{setting('phone.no')}}"><h5>Call us now</h5></a>
                            <a href="tel:{{setting('phone.no')}}"><h4>{{setting('phone.no')}}</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact_map_area">
            <div id="mapBox1" class="mapBox1 row m0" 
                data-lat="{{setting('location.latitude')}}" 
                data-lon="{{setting('location.longitude')}}" 
                data-zoom="15" 
                data-marker="" 
                data-info=""
                data-mlat=""
                data-mlon="">
            </div>
            <div class="map_location_box">
                <div class="container">
                    <div class="map_l_box_inner">
                         <div class="bd-callout">
                        <h3>Canada Office</h3>
                        <p>{{setting('contact.line1')}} <br>{{setting('contact.line2')}} <br /> Canada</p>
                        <h4><a href="tel:{{setting('phone.no')}}">{{setting('phone.no')}}</a> <a target="_blank" href="mailto:{{setting('contact.email')}}">{{setting('contact.email')}}</a></h4>
                    </div>
                    </div>
                </div>
            </div>
        </section>
@endsection