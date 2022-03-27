<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid text-center">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand d-flex justify-content-center" href="{{ route('home') }}">
            <div class="text-info font-weight-700 text-lg">Invesstement</div>
            <div class="text-warning font-weight-700 text-lg">Plateform</div>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.show') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main" >
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <div class="text-info font-weight-700 text-lg">Invesstement</div>
                            <div class="text-warning font-weight-700 text-lg">Plateform</div>
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="flex items-center font-semibold text-base px-4 hover:bg-emerald-50" href="{{ route('admin') }}">
                        <i class="ni ni-tv-2 text-primary text-gray-700 text-lg py-2 pr-3"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>

            </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading text-muted text-left mb-2">Investment management</h6>
                <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="flex items-center font-semibold text-base px-4 hover:bg-emerald-50 {{ (request()->is('admin/users*')) ? 'text-indigo-500 bg-indigo-50' : '' }}" href="{{route('users.index')}}">
                        <i class="ni ni-single-02 text-gray-700 text-lg py-2 pr-3"></i>
                        <span class="nav-link-text">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="flex items-center font-semibold text-base px-4 hover:bg-emerald-50 {{ (request()->is('admin/investissements*')) ? 'text-indigo-500 bg-indigo-50' : '' }}" href="{{route('investissements.index')}}">
                      <i class="ni ni-money-coins text-gray-700 text-lg py-2 pr-3"></i>
                      <span class="nav-link-text">Investors</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="flex items-center font-semibold text-base px-4 hover:bg-emerald-50 {{ (request()->is('admin/packs*')) ? 'text-indigo-500 bg-indigo-50' : '' }}" href="{{route('packs.index')}}">
                        <i class="ni ni-shop text-gray-700 text-lg py-2 pr-3"></i>
                        <span class="nav-link-text">Packs</span>
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted text-left mb-2">Content Management</h6>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="flex items-center font-semibold text-base px-4 hover:bg-emerald-50 {{ (request()->is('admin/messages*')) ? 'text-indigo-500 bg-indigo-50' : '' }}" href="{{route('messages.index')}}">
                        <i class="ni ni-email-83 text-gray-700 text-lg py-2 pr-3"></i>
                        <span class="nav-link-text">Messages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="flex items-center font-semibold text-base px-4 hover:bg-emerald-50 {{ (request()->is('admin/note*')) ? 'text-indigo-500 bg-indigo-50' : '' }}" href="{{route('note.index')}}">
                        <i class="ni ni-tv-2 text-gray-700 text-lg py-2 pr-3"></i>
                        <span class="nav-link-text">News</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="flex items-center font-semibold text-base px-4 hover:bg-emerald-50 {{ (request()->is('admin/testimony*')) ? 'text-indigo-500 bg-indigo-50' : '' }}" href="{{route('testimony.index')}}">
                        <i class="ni ni-favourite-28 text-gray-700 text-lg py-2 pr-3"></i>
                        <span class="nav-link-text">Reviews</span>
                    </a>
                </li>
            </ul>


        </div>
    </div>
</nav>
