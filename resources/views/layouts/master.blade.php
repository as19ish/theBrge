<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        
        <title>theBrge</title>       
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
    </head>
    <body>
        
            <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{route('home')}}"><img src="img/logo.png" alt="" height="50px" width="150px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href={{route('home')}}>Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('service')}}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('portfolio')}}">Portfolio</a></li>
                      
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        
        @yield('content')
       
        <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_about_widget">
                                <img src="img/logo.png" alt="" height="150px" width="200px" style="filter: grayscale(100%);">
                                <p>A Canadian based technology company helping people bring ideas to life</p>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_insta_widget">
                                <div class="f_title">
                                   {{--  <h3>Instagram</h3> --}}
                                </div>
                                {{-- <ul>
                                    <li><a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-7.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-8.jpg" alt=""></a></li>
                                </ul> --}}
                            </aside>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3>Subscribe to newsletter</h3>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">theBrge</a>

                    </div>
                    <div class="float-sm-right">
                        <ul>
                            
                            <li><a href="{{setting('social-media.fb')}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{setting('social-media.tw')}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{setting('social-media.ig')}}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{setting('social-media.ln')}}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
             
        
        
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/circle-bar/circle-progress.min.js"></script>
        <script src="vendors/circle-bar/plugins.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
        
    </body>
</html>