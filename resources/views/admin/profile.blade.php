@extends('admin.partials.layout')

@section('content')

<div class="row">
    <!--------------------{ succe message }------------------>
    <div class="col-12">
        @if (session()->has('successMasege'))
            <div class="alert alert-success" role="alert">
                {{session()->get('successMasege')}}
            </div>
        @endif
    </div>

    <!--------------------{ Profile }------------------>
    <div class="col-md-8">
        <div class="card card-nav-tabs">
            <div class="card-header card-header-warning">
                Profile
            </div>
            <div class="card-body">
                <form method="post" action="{{route('create.profile')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">person</i>
                            </span>
                        </div>
                        <input type="text" class="form-control" value="{{old('name')?old('name'):$profile->name}}" name="name" placeholder="Your Name">
                        @error('name')
                            <small class="form-text text-danger d-block">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input-group my-3 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">work</i>
                            </span>
                        </div>
                        <input type="text" class="form-control" value="{{old('role')?old('role'):$profile->role}}" name="role" placeholder="Your Role">
                        @error('role')
                            <small class="form-text text-danger d-block">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">photo</i>
                            </span>
                        </div>
                        <input type="file" class="" value="{{old('image')?old('image'):$profile->image}}" name="image">
                        @error('image')
                            <small class="form-text text-danger d-block">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">create</i>
                            </span>
                        </div>
                        <textarea rows="5" type="text" class="form-control" value="{{old('about')?old('about'):$profile->aboute_me}}" name="about" placeholder="About you">
                            {{old('about')?old('about'):$profile->aboute_me}}
                        </textarea>
                        @error('about')
                            <small class="form-text text-danger d-block">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">email</i>
                            </span>
                        </div>
                        <input type="email" class="form-control" value="{{old('email')?old('email'):$profile->email}}" name="email" placeholder="Your Email">
                        @error('email')
                            <small class="form-text text-danger d-block">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">phone</i>
                            </span>
                        </div>
                        <input type="phone" class="form-control" value="{{old('phone')?old('phone'):$profile->phone}}" name="phone" placeholder="Your Phone">
                        @error('phone')
                            <small class="form-text text-danger d-block">{{$message}}</small>
                        @enderror
                    </div>

                    <input class="btn btn-warning rounded-pill mt-4" type="submit" value="Update">
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-profile">
            <div class="card-avatar">
                <a href="#pablo">
                    <img class="img" src="{{asset('upImgs/'.$profile->image)}}">
                </a>
            </div>
            <div class="card-body">
                <h6 class="card-category">{{$profile->role}}</h6>
                <h4 class="card-title">{{$profile->name}}</h4>
                <p class="card-description">
                    {{$profile->aboute_me}}
                </p>
                <p class="card-description">
                    <i class="material-icons">phone</i>
                    {{$profile->phone}}
                </p>
                <p class="card-description">
                    <i class="material-icons">email</i>
                    {{$profile->email}}
                </p>
                {{-- <a href="#pablo" class="btn btn-warning btn-round">Edite</a> --}}
            </div>
        </div>
    </div>
</div>

@endsection

