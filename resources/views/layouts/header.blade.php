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