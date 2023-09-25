
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Develop your professional &amp; personal skills through Creative IT Institute. We provide Graphic Design, Web &amp; Software, Digital Marketing, Networking, Film &amp; Media, Robotics &amp; Automation Training etc affordable price. Call + 880 162 4666000">
    <meta property="og:image" content="https://www.creativeitinstitutectg.com/frontend/image/logo.webp">
    <link rel="canonical" href="https://creativeitinstitutectg.com/" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="keywords"
        content=" best institute, it institute, web design, graphics design, professional course, digital marketing, basic computer course, creative it, creative it institute" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.creativeitinstitutectg.com/frontend/image/fab_icon.png">


    

    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://www.creativeitinstitutectg.com/frontend/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://www.creativeitinstitutectg.com/frontend/css/aos.css" />
    <link rel="stylesheet" href="https://www.creativeitinstitutectg.com/frontend/css/slick.css" />
    <link rel="stylesheet" href="https://www.creativeitinstitutectg.com/frontend/css/style.css" />
      <link rel="stylesheet" href="https://www.creativeitinstitutectg.com/frontend/css/bannerPart.css">
    <link rel="stylesheet" href="https://www.creativeitinstitutectg.com/frontend/css/courseDhaka.css">
    <link rel="stylesheet" href="https://www.creativeitinstitutectg.com/frontend/css/seminarDhaka.css">
      <link rel="stylesheet" href="https://www.creativeitinstitutectg.com/frontend/css/responsive.css" />
</head>

<body id="scrollBar">

    <!-- HEADER -->
    <header class="d-lg-block d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 logo">
                    <a href="https://www.squarepharma.com.bd/"> 
                        
                        <img height="50" style="border-radius: 10px" src="{{ asset('storage/logo/'.$logo_data->image) }}" alt="">
                     </a>
                </div>
                <div class="col-lg-7">
                    <div class="row align-items-center">
                        <div class="header_contact col-6 d-flex align-items-center">
                            <span>
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                                                        <ul>

                                                                <li>
                                    <a href="tel:01847422965">+880 01887215934</a>
                                </li>
                                                                <li>
                                    <a href="tel:01847422959">+880 01887215934</a>
                                </li>
                                
                            </ul>
                            
                        </div>
                        <div class="header_contact col-6 d-flex align-items-center">
                            <span>
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                            <ul>
                                                                <li>
                                    <a href="">SQUARE<h5>PHARMACEUTICALS LTD.</h5><h6>BANGLADESH</h6></a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER ENDS -->

    <!-- NAVBAR SECTION -->
    <nav class="navbar navbar-expand-lg py-3 py-lg-0 creative_navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mycustomNav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navToggler"><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse p-3 p-lg-0 mt-3 m-lg-0" id="mycustomNav">
                <ul class="navbar-nav d-lg-flex justify-content-lg-between">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                            href="">ABOUT US</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link "
                            aria-current="page" href="">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "
                            aria-current="page" href="">DEVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">FACILITIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">ESPORT MARKET</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">MEDIA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR SECTION ENDS -->
   
@yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="logo">
                        <img width="300" height="50" class="text-danger" src="{{ asset('storage/logo/logo.jpg') }}" alt="" />
                        <h4> SQUARE </h4>
                        <p><h5>PHARMACEUTICALS LTD.</h5><h6>BANGLADESH</h6></p>
                    </div>
                </div>
                <div class="col-lg-4 location">
                    <h4>আমাদের ঠিকানা</h4>
                    <address>
                    Chattogram, Bangladesh
                    </address>
                </div>

                <div class="col-lg-4 contact">
                    <h4>যোগাযোগ করুন</h4>
                    <p>
                                                <a href="">Contact</a>
                                            </p>
                    
                    <a href="tel:01847422965">+880 01997215934</a>

                    
                    <a href="tel:01847422959">+880 1847422959</a>

                    
                    <ul>
                                                <li>
                            <a href="https://www.facebook.com/CITI.Chattogram" target="__blank"><i
                                    class="bi bi-facebook"></i></a>
                        </li>
                                                <li>
                            <a href="https://www.youtube.com/channel/UCWxEU-3nFwQ95_VniFMU4Ng" target="__blank"><i
                                    class="bi bi-youtube"></i></a>
                        </li>
                                                <li>
                            <a href="https://www.linkedin.com/company/75671629/admin" target="__blank"><i
                                    class="bi bi-linkedin"></i></a>
                        </li>
                                                <li>
                            <a href="https://www.instagram.com/creativeitinstitutechattogram/" target="__blank"><i
                                    class="bi bi-instagram"></i></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span class="py-3 d-block">
                <a href="#" target="__blank" class="text-dark">
                    <i class="bi bi-heart text-danger"></i> Developed By MD.Abdullah
                </a></span>
            <p>Copyright © 2022  Chattogram</p>
        </div>
    </footer>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '275614026895513');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=275614026895513&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://www.creativeitinstitutectg.com/frontend/js/slick.min.js"></script>
    <script src="https://www.creativeitinstitutectg.com/frontend/js/aos.js"></script>
    <script src="https://www.creativeitinstitutectg.com/frontend/js/mixitup.min.js"></script>

    <script src="https://www.creativeitinstitutectg.com/frontend/js/bootstrap.bundle.min.js"></script>

    <script src="https://www.creativeitinstitutectg.com/frontend/js/app.js"></script>
      <script src="https://www.creativeitinstitutectg.com/frontend/js/courseSlider.js"></script>

      @yield('script')
  </body>

</html>
