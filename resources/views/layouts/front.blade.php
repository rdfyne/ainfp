<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/3e5f9a0a23.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('backoffice/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    <title>@yield('title') - AINFP</title>
    
    @stack('styles')
  </head>
  <body>
    
    <!-- Main Menu -->
    <div class="main-nav">
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand d-none d-sm-block" href="http://ainfp.org/">
                    <img src="{{ asset('https://ainfp.org/wp-content/uploads/2020/07/new-ftf.png') }}">
                </a>
                <a class="navbar-brand d-block d-sm-none" href="http://ainfp.org/">
                    <img src="{{ asset('https://ainfp.org/wp-content/uploads/2020/07/new-ftf.png') }}" width="220px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="https://ainfp.org/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://ainfp.org/about-us/">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://ainfp.org/blog/">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Community</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://ainfp.org/about-us/">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://ainfp.org/request-for-partnership/"><span class="rfp-mbtn">Apply for Partnership<span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- End -->

    @yield('content')

    <!-- Footer -->
    <div class="ftr-bg">
        <div>
            <div class="ftr-text">
                <p>&copy; {{ date('Y') }}. {{ config('app.name') }} - ALL RIGHTS RESERVED</p>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>

    <!-- SweetAlert2 -->
    <script src="{{ asset('backoffice/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    
    <!-- Linkedin -->
    
    <script type="text/javascript"> _linkedin_partner_id = "2545009"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); 
    </script> 
    <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2545009&fmt=gif" /> 
    </noscript>

    @stack('scripts')
  </body>
</html>