
<div class="sidebar" data-color="orange" data-background-color="black" data-image="{{asset('asset/admin/imgs/persona.JPG')}}">

    <div class="logo">
        <a href="{{route('front.home')}}" target="_blank" class="simple-text logo-normal">
            <img width="120px" class="img-fluid" src="{{asset('asset/admin/imgs/logoPage.png')}}" alt="">
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{request()->path() == 'admin' ? 'active' : '' }} ">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{request()->path() == 'admin/profile' ? 'active' : '' }} ">
                <a class="nav-link" href="{{route('profile')}}">
                    <i class="material-icons">person</i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item {{request()->path() == 'admin/experiance' ? 'active' : '' }}">
                <a class="nav-link" href="{{route('experiance')}}">
                    <i class="material-icons">verified</i>
                    <p>Experince</p>
                </a>
            </li>
            <li class="nav-item {{request()->path() == 'admin/skills' ? 'active' : '' }}">
                <a class="nav-link" href="{{route('skills')}}">
                    <i class="material-icons">start</i>
                    <p>Skills</p>
                </a>
            </li>

        </ul>
    </div>

</div>
