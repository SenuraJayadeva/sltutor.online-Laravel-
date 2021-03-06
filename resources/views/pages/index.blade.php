<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="icon" type="images" href="/storage/assets/img/logo.png">
    <link rel="stylesheet" href="/storage/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="/storage/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/storage/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/storage/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/storage/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/storage/assets/css/Article-List.css">
    <link rel="stylesheet" href="/storage/assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="/storage/assets/css/Bold-BS4-CSS-Image-Slider.css">
    <link rel="stylesheet" href="/storage/assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="/storage/assets/css/Features-Blue.css">
    <link rel="stylesheet" href="/storage/assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="/storage/assets/css/Footer-Dark-1.css">
    <link rel="stylesheet" href="/storage/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="/storage/assets/css/Header-Blue.css">
    <link rel="stylesheet" href="/storage/assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="/storage/assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="/storage/assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="/storage/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="/storage/assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="/storage/assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="/storage/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="/storage/assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="/storage/assets/css/Search-Input-responsive.css">
    <link rel="stylesheet" href="/storage/assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="/storage/assets/css/Simple-Vertical-Navigation-Menu-v-10.css">
    <link rel="stylesheet" href="/storage/assets/css/styles.css">
    <link rel="stylesheet" href="/storage/assets/css/Team-Boxed.css">
</head>

<body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid"><a class="navbar-brand" href="/">SLTUTOR</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/posts">Teachers</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/posts/create">Create Your Ad</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">PastPapers</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Notes</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>

                        </form>
                        
                         <!-- Authentication Links -->
                        @guest
                        <span class="navbar-text"> 
                            
                            <a class="login" href="{{ route('login') }}">Log In</a>

                        </span>

                        @if (Route::has('register'))
                            
                            <a class="btn btn-light action-button" role="button" href="{{ route('register') }}">Sign Up</a></div>
                        @endif
                        @else
                        <span class="navbar-text"> 
                            <a class="login" href="/home">{{ Auth::user()->name }}</a>
                        </span>
                            <a class="btn btn-light action-button" role="button" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a></div>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                           </form>
                        @endguest
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>SLtutor</h1>
                        <p>This is a platform where you can find teachers, notes, past papers and ask solutions for thousands of problems in your textbook </p><a href="/posts"><button class="btn btn-light btn-lg action-button" type="button">Explore Teachers</button></a></div>
                    <div
                        class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup"><img class="device" src="/storage/assets/img/undraw_teaching_f1cm.svg"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-dark" style="margin: 0px;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="/posts">Find Teachers</a></li>
                            <li><a href="#">Find Past Papers</a></li>
                            <li><a href="#">Ask Questions</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>HEXAGON DEVELOPERS</h3>
                        <p>Before software can be reusable it first has to be usable</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>