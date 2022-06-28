<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link  rel="icon" type="image/png" sizes="16x16" href="/img/Iroyin_icon.png">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.0/css/countrySelect.min.css" integrity="sha512-HHSUgqDtmyVfGT0pdLVRKcktf9PfLMfFzoiBjh9NPBzw94YFTS5DIwZ12Md/aDPcrkOstXBp9uSAOCl5W2/AOQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Iroyin - @yield('title')</title>
    </head>
    <body>
        <header class='border-bottom'>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class='header-logo' src="/img/Iroyin.png" width=100px >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    
                <ul class="navbar-nav mr-auto mt-lg-1">
                        <li class="nav-item {{ $category == 'home' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('home') }}">All<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ $category == 'business' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('news', ['category' => 'business', 'country' => $cc]) }}">Business </a>
                        </li>
                        <li class="nav-item {{ $category == 'health' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('news', ['category' => 'health', 'country' => $cc]) }}">Health</a>
                        </li>
                        <li class="nav-item {{ $category == 'entertainment' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('news', ['category' => 'entertainment', 'country' => $cc]) }}">Entertainment</a>
                        </li>
                        <li class="nav-item {{ $category == 'sports' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('news', ['category' => 'sports', 'country' => $cc]) }}">Sports</a>
                        </li>
                        <li class="nav-item {{ $category == 'technology' ? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('news', ['category' => 'technology', 'country' => $cc]) }}">Technology</a>
                        </li>
                        

                    </ul>

                    <div class="" >
                        <input type='text' name="" id="" class="country_region form-control border-0" onclick='selectCountry()'>
                    </div>
                   
                </div>
            </nav>
        </header>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                  @yield('big_card')
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                    @yield('cards')
                    </div>                  
                </div>
            </div>

            <section class="mt-3 mb-5">
                @yield('content')
            </section>
           
            
        </div>

        <footer class='p-3'>

            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <img src="/img/Iroyin_footer.png" alt="" class="footer_logo">
                    <p class='text-center'>You want to know?</p>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 text-light">
                    <ul class='footer_link p-4'>
                        <li><a href="{{ route('home') }}" class="">All</a></li>
                        <li><a href="" class="">Business</a></li>
                        <li><a href="" class="">Health</a></li>
                        <li><a href="" class="">Entertainment</a></li>
                        <li><a href="" class="">Sports</a></li>
                        <li><a href="" class="">Technology</a></li>
                    </ul>

                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 text-light">
                    <ul class='footer_link p-4'>
                        <li><a href="{{ route('home') }}" class="">Video</a></li>
                        <li><a href="" class="">Archives</a></li>
                        <li><a href="" class="">Cartoons</a></li>
                        <li><a href="" class="">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 d-flex flex-row">
                    <h6 class='p-2 mt-4 border-right border-light' style="height:fit-content; text-transform: uppercase; letter-spacing: 2px; color:grey;">follow us</h6>
                    <h6 class='p-2 mt-4 text-light'><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></h6>
                    <h6 class='p-2 mt-4 text-light'><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></h6>
                    <h6 class='p-2 mt-4 text-light'><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></h6>
                    <h6 class='p-2 mt-4 text-light'><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></h6>
                </div>
            </div>

            <div class="dropdown-divider"></div>
            <div class="row">
                <div class="col-6">
                    <p class="text-secondary font-italic p-2" style="font-size: 13px">&copy; {{ date('Y') }} NewsApi. All rights reserved.</p>
                </div>
                <div class="col-6">
                    <div class='text-right'>
                        <img src="/img/logo_new.png" alt="" width="50px">
                    </div>
                </div>
            </div>
        </footer>





        <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.0/js/countrySelect.min.js" integrity="sha512-criuU34pNQDOIx2XSSIhHSvjfQcek130Y9fivItZPVfH7paZDEdtAMtwZxyPq/r2pyr9QpctipDFetLpUdKY4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
      
           

           $(document).ready(function(){
            function ipLookUp (country=null) {

                $.ajax('http://ip-api.com/json/')
                .then(
                    function success(response) {
                        console.log('User\'s Location Data is ', response);
                        console.log('User\'s Country', response.country);
                        
                       let val = response.countryCode.toLowerCase();
                        $(".country_region").countrySelect({
                            defaultCountry: val,
                            responsiveDropdown: true
                        });
                    },

                    function fail(data, status) {
                        console.log('Request failed.  Returned status of',
                                    status);
                    }
                );
            }

            ipLookUp();

               
           })
        </script>
    </body>
</html>