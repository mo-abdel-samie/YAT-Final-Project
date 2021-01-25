
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top border-bottom ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="material-icons">notifications</i>
                        <p class="d-lg-none d-md-block">
                            Notifications
                        </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="portofolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            {{ Auth::user()->name }}
                        </p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="portofolio">
                        <a class="dropdown-item" href="{{route('profile')}}">profile</a>
                        <a class="dropdown-item" href="#">Setting</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="material-icons mr-2">power_settings_new</i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
