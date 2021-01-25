@extends('admin.partials.layout')


@section('content')
    <div class="card card-nav-tabs text-center">
        <div class="card-header card-header-primary">
            Welcome {{ Auth::user()->name }}
        </div>
        <div class="card-body">
            <h4 class="card-title">your vision</h4>
            <p class="card-text">To Be A Profisional Web Developer</p>
            <a href="{{route('front.home')}}" class="btn btn-primary">Go Website</a>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Used Space</p>
                    <h3 class="card-title">49/50 <small>GB</small></h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-warning">warning</i>
                        <a href="#pablo" class="warning-link">Get More Space...</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Revenue</p>
                    <h3 class="card-title">$34,245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Revenue</p>
                    <h3 class="card-title">$34,245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

        </div>
    </div> --}}
@endsection
