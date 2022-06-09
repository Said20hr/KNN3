<nav class="navbar-expand-lg navbar-light fixed-top " data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container lg:flex lg:justify-between lg:items-center lg:py-4 py-5">
        <div class="flex justify-between items-center">
            <a class="navbar-brand flex items-center font-bold text-xl lg:text-3xl bg-white py-1 px-3 rounded-md shadow-sm" href="{{route('home')}}">
                <div class="text-info"> Investment </div>
                <div class="text-warning"> Platform </div>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse lg:flex lg:justify-end" id="navbarSupportedContent">
            @guest
                <ul class="navbar-nav pt-4 lg:pt-0">
                    <li class="lg:py-0 py-4 lg:border-b-0 border-b nav-item lg:px-2 lg:text-right px-3"><a class="text-decoration-none hover:text-indigo-800 text-xl lg:text-lg lg:px-2 font-bold {{ (request()->is('/')) ? 'text-blue-500' : 'text-blueGray-900' }}" href="{{route('home')}}" aria-current="page" href="#">Home</a></li>
                    <li class="lg:py-0 py-4 lg:border-b-0 border-b nav-item lg:px-2 lg:text-right px-3"><a class="text-decoration-none hover:text-indigo-800 text-xl lg:text-lg lg:px-2 font-bold {{ (request()->is('about')) ? 'text-blue-500' : 'text-blueGray-900' }}" href="{{route('about')}}">About</a></li>
                    <li class="lg:py-0 py-4 lg:border-b-0 border-b nav-item lg:px-2 lg:text-right px-3"><a class="text-decoration-none hover:text-indigo-800 text-xl lg:text-lg lg:px-2 font-bold {{ (request()->is('state')) ? 'text-blue-500' : 'text-blueGray-900' }}" href="{{route('state')}}">Statistics</a></li>
                    <li class="lg:py-0 py-4 lg:border-b-0 border-b nav-item lg:px-2 lg:text-right px-3"><a class="text-decoration-none hover:text-indigo-800 text-xl lg:text-lg lg:px-2 font-bold {{ (request()->is('contact')) ? 'text-blue-500' : 'text-blueGray-900' }}" href="{{route('contact')}}">Contact Us</a></li>
                    <li class="lg:py-0 py-4 lg:border-b-0 border-b nav-item lg:px-2 lg:text-right px-3 block lg:hidden"><a class="text-decoration-none text-info hover:text-indigo-500 text-xl lg:text-lg lg:px-2 font-bold flex justify-between" href="{{route('login')}}">Get Started <i class="fa fa-angle-right"></i></a></li>
                </ul>
                <div class="py-4 lg:px-2 lg:text-right px-3 hidden lg:flex">
                    <a href="{{route('login')}}" class="btn btn-lg btn-warning rounded-md bg-gradient py-2 text-lg">Get Started</a>
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
