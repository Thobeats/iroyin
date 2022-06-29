@include('layouts.header')
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

        @include('layouts.footer')



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