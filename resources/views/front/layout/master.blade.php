<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Templet for travel agancy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon"       href="{{asset('asset/imgs/logoPage.png')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;400;700;800;900&display=swap" >
        <link rel="stylesheet" href="{{asset('asset/font/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/froala_blocks.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
        <title>Mohamed Abdel-Samie </title>
    </head>
    <body>

        <!-- Start Landing page -->

        <article>

            <header id="header" class=" position-relative">
                <div class="overlay"></div>
                @include('front.layout.partials.navbar')
                <div class="intro-text">
                    <div class="col-12">
                        @if (session()->has('successMessage'))
                            <div class="alert alert-info" role="alert">
                                {{session()->get('successMessage')}}
                            </div>
                        @endif
                    </div>
                    <h1 >Come <span>MoWeb</span> BE PROFESSIONAL</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium dolores porro.</p>
                </div>
            </header>

            <main class="">
                @yield('content')
            </main>


        </article>

        <footer >
            <div class="container">
                <div class="row">

                    <div class="col-5">
                        <div class="social text-center ">
                            <a href="#"><img class=" img-fluid" src="{{asset('asset/imgs/facebook.png')}}"     alt="facebook"></a>
                            <a href="#"><img class=" img-fluid" src="{{asset('asset/imgs/github-image.png')}}" alt="gitHub"  ></a>
                            <a href="#"><img class=" img-fluid" src="{{asset('asset/imgs/linkedin.png')}}"     alt="linkedin"></a>
                            <a href="#"><img class=" img-fluid" src="{{asset('asset/imgs/whatsapp.png')}}"     alt="whatsUP" ></a>
                        </div>
                    </div>

                    <div class="col-2 border-right border-left logo text-center">
                        <a href="#"><img class=" img-fluid" src="{{asset('asset/imgs/logoPage.png')}}" alt=""></a>
                    </div>

                    <div class="col-5 link  d-flex align-items-center justify-content-center ">
                        <a class="text-white btn h5 " href="">www.MoWeb.com</a>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12 pt-4 ">
                        <h5 class="text-white">copy Rights Reseved <i class="fa fa-heart text-danger"></i> <span class=" main-color font-weight-bold">Mohamed Abdel-Samie</span></h5>
                    </div>
                </div>

            </div>
        </footer>

        <!-- End Landing page -->
        <script src="{{asset('asset/js/jquery-2.2.4.min.js')}}"></script>
        <script src="{{asset('asset/js/popper.min.js')}}"></script>
        <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('asset/js/main.js')}}"></script>
    </body>
</html>
