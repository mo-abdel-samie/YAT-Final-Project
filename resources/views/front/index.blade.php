@extends('front.layout.master')

@section('content')

<section id="about-us" class=" about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 ml-md-auto col-md-7 col-lg-6 pb-5 pb-md-0">
                <h2> About me </h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum rem cupiditate provident quos pariatur totam, ducimus non adipisci et sequi nisi, soluta autem animi molestias.
                </p>
                <p class="mt-4">
                    <button class="btn btn-outline-primary ml-3">Downloade CV</button>
                </p>
            </div>

            <div class="col-10 col-sm-6 col-md-5 col-lg-4 m-auto pb-5 pb-md-0">
                <img alt="image" class="img-fluid rounded-0" src="{{asset('asset/imgs/draws/browsers.svg')}}">
            </div>
        </div>
    </div>
</section>

<section id="skills" class="skills py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 bg-main-color d-flex align-items-center text-center rounded">
                <div>
                    <h2 class=" text-center font-weight-bold ">My skills</h2>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nam mollitia laudantium dignissimos exercitationem eligendi maiores.</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="skills-box">
                    @foreach ($skills as $key=>$skill)

                        <label for="html">{{$skill->skill_name}}</label>
                        <div class="progress mb-3">
                            <div class="progress-bar {{ ($key % 2 == 0 )?'bg-primary':'bg-info'}}" role="progressbar" style="width: {{$skill->pres_level}}%" aria-valuenow="{{$skill->pres_level}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>

    </div>
</section>

<section id="timeline" class="timeline">
    <div class="container">
        <h2>Experiance</h2>
        @foreach ($experiances as $key=>$experiance)
            @if ($key%2==0)
            <div class="row ">
                <div class="col-lg-6 border-end border-main-color position-relative">
                    <div class="year-left">{{$experiance->year}}</div>
                    <i class=" bolet-left"></i>
                    <div class=" bg-white p-4 rounded m-2 box-left">
                        <h3 class=" main-color font-weight-bold">{{$experiance->company_name}} <span>({{$experiance->position}})</span></h3>
                        <p>{{$experiance->description}}</p>
                    </div>
                </div>
            </div>
            @else
            <div class="row d-flex justify-content-end">
                <div class="col-lg-6 border-start  border-main-color text-lg-left text-right position-relative mr-1">
                    <div class="year-right">{{$experiance->year}}</div>
                    <i class=" bolet-right"></i>
                    <div class="bg-white p-4 rounded m-3 box-right">
                        <h3 class=" main-color font-weight-bold">{{$experiance->company_name}} <span>({{$experiance->position}})</span></h3>
                        <p>{{$experiance->description}}</p>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

    </div>
</section>

<section id="my-features" class="my-features">
    <div class="container">
        <h2 class=" main-color font-weight-bold text-center mb-5">My features</h2>
        <div class="row mb-2">
            <div class="col-lg-4 text-center">
                <img class=" img-fluid"  src="{{asset('asset/imgs/coding.png')}}" alt="">
                <h4 class=" font-weight-bold my-2">Development</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
            </div>
            <div class="col-lg-4 text-center">
                <img class=" img-fluid" src="{{asset('asset/imgs/target.png')}}" alt="">
                <h4 class=" font-weight-bold my-2">SEO</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
            </div>
            <div class="col-lg-4 text-center">
                <img class=" img-fluid" src="{{asset('asset/imgs/browser.png')}}" alt="">
                <h4 class=" font-weight-bold my-2">Smart UI</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center">
                <img class=" img-fluid" src="{{asset('asset/imgs/responsive.png')}}" alt="">
                <h4 class=" font-weight-bold my-2">Responsiv</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
            </div>
            <div class="col-lg-4 text-center">
                <img class=" img-fluid" src="{{asset('asset/imgs/fast-time.png')}}" alt="">
                <h4 class=" font-weight-bold my-2">Faster</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
            </div>
            <div class="col-lg-4 text-center">
                <img class=" img-fluid" src="{{asset('asset/imgs/call-center.png')}}" alt="">
                <h4 class=" font-weight-bold my-2">call servieces</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
            </div>
        </div>
    </div>
</section>

<section id="contact-Us" class="contact-Us">

    <div class="container">
        <div class="overlay"></div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6" style="z-index: 1">
                <form method="POST" action="{{route('contact.form')}}">
                    @csrf
                    <h2 class=" text-center font-weight-bold">Contact Me</h2>
                    <div class=" form-group">
                        <label for="name">Name</label>
                        <input class=" form-control" name="name" type="text" placeholder="name">
                    </div>
                    <div class=" form-group">
                        <label for="email">Email</label>
                        <input class=" form-control" name="email" type="email" placeholder="email">
                    </div>
                    <div class=" form-group">
                        <label for="name">Message</label>
                        <textarea class=" form-control" name="message" cols="30" rows="10" placeholder="Message"></textarea>
                    </div>
                    <div class=" text-center mt-3 ">
                        <input class="btn bg-main-color submit" type="submit" value="Send">
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
