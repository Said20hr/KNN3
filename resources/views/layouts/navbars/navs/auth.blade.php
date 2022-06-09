<!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="h2 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ route('home') }}">{{ __(' Dashboard') }}</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline ml-5 d-none d-md-flex m-lg-auto">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control outline-none" placeholder="search" type="text">
                </div>
            </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <div class="media-body mr-3 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                        </div>
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="{{ Auth::user()->profile_photo_url  }}">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right text-left">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0 text-gray-500">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.show') }}" class="dropdown-item text-gray-800">
                        <span>{{ __('Profile') }}</span>
                        <i class="ni ni-single-02"></i>
                    </a>
                    <a href="#" class="dropdown-item text-gray-800">
                        <span>{{ __('Settings ') }}</span>
                        <i class="ni ni-settings-gear-65"></i>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <span>{{ __('Sign out') }}</span>
                        <i class="ni ni-user-run"></i>
                    </a>
                </div>
            </li>
        </ul>

    </div>
</nav>
