@extends('layouts.master')

@section('content')
  <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>About Us</h2>
                    <p>Get to know us</p>
                </div>
            </div>
        </section>
       
        <section class="challange_area p_100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="challange_text_inner">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Discover the features</h6>
                                <h2>We don’t hide, we stand tall in front of chalenge</h2>
                            </div>
                            <p>We work to strive and grow. Starting from a team of 3 people, we have grown to a team of 7 individual with diverse backgrounds. With every new challenge we build a new relationship and friendship</p>
                            <p>A company is define by its people. We are a team of 7 energetic and experienced individual with a common goal to bring ideas to life. Our expertise are growing and few key skill-set are: Java, PHP, Android, iOS, SQL, nodeJs etc</p>
                           {{--  <div class="c_video">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=62QYQE6k7tg"><img src="img/icon/video-icon.png" alt="">See how we work </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 challange_img">
                        <div class="challange_img_inner">
                            <img class="img-fluid" src="img/popup-photo.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="testimonials_area">
            <div class="container">
                <div class="testimonials_slider owl-carousel">
                     @foreach( App\Testimonial::all() as $testimonial)
                    <div class="item">
                        <div class="testi_item">
                        <h3>{{$testimonial->short_description}}</h3>
                        <p>{{$testimonial->description}}</p>
                        <div class="media">
                            <div class="d-flex">
                            <img src="{{Voyager::image($testimonial->image)}}" alt="" class="rounded-circle" height="50" width="50" style="width: unset !important;">
                           </div>
                            <div class="media-body">
                                <h4>{{$testimonial->name}}</h5>
                                <h5>{{$testimonial->position}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                 
                </div>
            </div>
        </section>
       
        {{-- <section class="we_company_area p_100">
            <div class="container">
                <div class="row company_inner">
                    <div class="col-lg-6">
                        <div class="left_company_text">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Discover the features</h6>
                                <h2>We are a <span>CANADA</span> based Company</h2>
                            </div>
                            <p>A Canadian based technology company helping people bring ideas to life</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="company_skill">
                            <p></p>
                            <div class="our_skill_inner">
                                <div class="single_skill">
                                    <h3>Development</h3>
                                    <div class="progress" data-value="70">
                                        <div class="progress-bar">
                                            <div class="progress_parcent"><span class="counter">70</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>Design</h3>
                                    <div class="progress" data-value="90">
                                        <div class="progress-bar">
                                            <div class="progress_parcent"><span class="counter">90</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>SEO</h3>
                                    <div class="progress" data-value="85">
                                        <div class="progress-bar">
                                            <div class="progress_parcent"><span class="counter">85</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>Development</h3>
                                    <div class="progress" data-value="90">
                                        <div class="progress-bar">
                                            <div class="progress_parcent"><span class="counter">90</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_skill">
                                    <h3>Management</h3>
                                    <div class="progress" data-value="75">
                                        <div class="progress-bar">
                                            <div class="progress_parcent"><span class="counter">75</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        
        <section class="talk_area">
            <div class="container">
                <div class="talk_text">
                    <h4>Are you ready to talk?</h4>
                    <a href="mailto:{{setting('contact.email')}}" >{{setting('contact.email')}}</a>
                </div>
            </div>
        </section>
@endsection