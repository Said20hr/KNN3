<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop " data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bolder fs-2 fst-italic" href="#">
            <div class="text-info">KN</div>
            <div class="text-warning">N3</div>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            @guest()
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                <li class="nav-item px-2 text-right"><a class="nav-link fw-medium {{ (request()->is('/contact')) ? 'active' : '' }}" href="{{route('contact')}}">تواصل معنا</a></li>
                <li class="nav-item px-2 text-right"><a class="nav-link fw-medium {{ (request()->is('/about')) ? 'active' : '' }}" href="{{route('about')}}">عن المشروع</a></li>
                <li class="nav-item px-2 text-right"><a class="nav-link fw-medium {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('home')}}" aria-current="page" href="#">الرئيسية</a></li>
            </ul>
                <div class="ps-lg-5 text-right">
                    <a href="{{route('login')}}" class="btn btn-lg btn-primary rounded-pill bg-gradient order-0 p-tb-10 fs-20" type="submit">دخول المستخدمين</a>
                </div>
            @else
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 ">
                    <li class="nav-item px-2 text-right"><a class="nav-link fw-medium text-primary btn btn-outline-danger fw-bold" href="{{ route('dashboard') }}"> حسابي</a></li>
                    <li class="nav-item px-2 text-right"><a class="nav-link fw-medium {{ (request()->is('contact')) ? 'active' : '' }}" href="{{route('contact')}}">تواصل معنا</a></li>
                    <li class="nav-item px-2 text-right"><a class="nav-link fw-medium {{ (request()->is('about')) ? 'active' : '' }}" href="{{route('about')}}">عن المشروع</a></li>
                    <li class="nav-item px-2 text-right"><a class="nav-link fw-medium {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('home')}}" aria-current="page" href="#">الرئيسية</a></li>

                </ul>
            @endguest
        </div>
    </div>
</nav>
