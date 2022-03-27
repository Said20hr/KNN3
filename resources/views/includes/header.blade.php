<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop bg-white" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container mt-2">
        <a class="navbar-brand d-flex align-items-center fw-bolder text-3xl" href="{{route('home')}}">
            <div class="text-info"> Investment </div>
            <div class="text-warning"> Platform </div>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt- mt-lg-0 px-4" id="navbarSupportedContent">
            @guest()
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">

                <li class="nav-item px-2 text-right"><a class="text-decoration-none text-lg px-2 font-bold {{ (request()->is('/')) ? 'text-blue-500' : 'text-blueGray-900' }}" href="{{route('home')}}" aria-current="page" href="#">Home</a></li>
                <li class="nav-item px-2 text-right"><a class="text-decoration-none text-lg px-2 font-bold {{ (request()->is('about')) ? 'text-blue-500' : 'text-blueGray-900' }}" href="{{route('about')}}">About</a></li>
                <li class="nav-item px-2 text-right"><a class="text-decoration-none text-lg px-2 font-bold {{ (request()->is('state')) ? 'text-blue-500' : 'text-blueGray-900' }}" href="{{route('state')}}">Statistics</a></li>
                <li class="nav-item px-2 text-right"><a class="text-decoration-none text-lg px-2 font-bold {{ (request()->is('contact')) ? 'text-blue-500' : 'text-blueGray-900' }}" href="{{route('contact')}}">Contact Us</a></li>
            </ul>
                <div class="ps-lg-5 text-right">
                    <a href="{{route('login')}}" class="btn btn-lg btn-primary rounded-pill bg-gradient order-0 p-tb-10 fs-20" type="submit">Get started</a>

                </div>
            @else
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 ">
                    <li class="nav-item px-2 text-right">
                        <a class="text-decoration-none bg-sky-500 text-white hover:bg-sky-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none ease-linear transition-all duration-150 text-sm" href="{{ route('dashboard') }}">
                            My account</a>
                    </li>
                    <li class="nav-item px-2 text-right ">
                        <a href="{{ route('logout') }}"
                           class="text-decoration-none text-orange-400 hover:text-white hover:bg-orange-400 border-orange-400 border-2 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none text-sm">Sign Out
                        </a>
                    </li>
                </ul>
            @endguest
        </div>
    </div>
</nav>
