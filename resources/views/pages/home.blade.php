@extends('layouts.layout')

@section('content')
    <main class="main" id="top">
        <section class="" id="home">
            <div class="bg-holder hidden h-screen lg:block" style="background-image:url({{asset('assets/img/illustrations/hero-bg.png')}});background-position:right top; transform: scaleX(-1);background-size:50%;"></div>
            <div class="container">
                <div class="lg:flex lg:justify-end lg:pt-20 pt-8">
                    <div class="w-2/3 h-full my-auto">
                        <h1 class=" text-3xl lg:text-6xl my-4 lg:leading-snug font-semibold">Start your financial  <span class="text-info">future Adfluencerz</span></h1>
                        <p class="text-lg lg:text-2xl lg:leading-snug text-gray-600 lg:mt-6">
                            New to investing, or just not sure where to put your money? <br>
                            We'll connect you to investment opportunities around the world.<br>
                            Earn passive income with loan investments.
                            Connect with thousands of opportunities from around the world on Europe’s leading platform.
                        </p>
                    </div>
                   {{-- <div class="lg:w-1/2 w-full lg:my-0 my-12 p-4" style="background-image: url('{{asset('assets/img/bg/Pattern.svg')}}');background-size: cover">
                        <img src="{{asset('assets/img/illustrations/hero-image.6c6b71f.png')}}" alt="hero-wb" class="object-cover pl-4">
                    </div>--}}
                </div>
                <div class="lg:w-11/12 w-full flex flex-wrap ml-auto lg:pt-20 pt-6">
                    <div class="lg:px-6 w-1/2 lg:w-1/4">
                        <div class="lg:text-6xl text-2xl text-gray-700 font-bold mb-4">
                            <span class="text-6xl text-gray-700 font-bold mb-4" id="status1" countto="350">350 </span><span>+</span>
                        </div>
                        <div class="text-xl">Over 500 business powered with us</div>
                    </div>
                    <div class="lg:px-6 w-1/2 lg:w-1/4">
                        <div class="lg:text-6xl text-2xl text-gray-700 font-bold mb-4">
                            <div class="text-6xl text-gray-700 font-bold mb-4" id="status2" countto="4.8">4.8</div>
                        </div>
                        <div class="text-xl">Rating on google play and app store</div>
                    </div>
                    <div class="lg:px-6 w-1/2 lg:w-1/4">
                        <div class="lg:text-6xl text-2xl text-gray-700 font-bold mb-4">
                            <span class="text-6xl text-gray-700 font-bold mb-4" id="status3" countto="750">750</span><span>k</span>
                        </div>
                        <div class="text-xl">Users used our platform in around the world</div>
                    </div>
                    <div class="lg:px-6 w-1/2 lg:w-1/4">
                        <div class="lg:text-6xl text-2xl text-gray-700 font-bold mb-4">
                            <span class="text-6xl text-gray-700 font-bold mb-4" id="status4" countto="24">24 </span><span>+</span>
                        </div>
                        <div class="text-xl">More than 30 countries trust our platform</div>
                    </div>

                </div>
            </div>
        </section>
        <section class="py-5 lg:py-20">
            <div class="bg-holder hidden lg:flex" style="background-image:url({{asset('assets/img/illustrations/category-bg.png')}});background-position:right top;background-size:200px 320px;"></div>
            <div class="container">
                <div class="flex justify-center">
                    <div class="lg:w-9/12 w-full text-center lg:pb-24 pb-12">
                        <h5 class="text-4xl lg:text-5xl font-bold px-2 leading-snug">How our platform process easy to use?</h5>
                    </div>
                </div>
                <div class="lg:flex lg:flex-center lg:items-start">
                    <div class="w-full lg:w-1/4 px-2 text-center">
                        <img src="{{asset('assets/img/illustrations/Login.svg')}}" alt="login" class="lg:h-56 w-full mx-auto">
                        <h3 class="font-bold text-blueGray-800 text-4xl lg:text-2xl lg:px-2">Login or Sign up to be able use our platform</h3>
                        <p class="text-base text-blueGray-600 text-2xl lg:text-xl my-3">You must log in first to be able to use our platform to get your product analytics</p>
                    </div>
                    <div class="py-20 lg:pt-24">
                        <img src="{{asset('assets/img/icons/x-direction-line.png')}}" alt="direction" class="rotate-90 lg:rotate-0 mx-auto">
                    </div>
                    <div class="w-full lg:w-1/4 px-2 text-center">
                        <img src="{{asset('assets/img/illustrations/Connect.svg')}}" alt="data" class="lg:h-56 w-full mx-auto">
                        <h3 class="font-bold text-blueGray-800 text-4xl lg:text-2xl lg:px-2">Connect your website with just a few click</h3>
                        <p class="text-base text-blueGray-600 text-2xl lg:text-xl my-3">Select the application you wanted to be able to connect with just a few clicks</p>
                    </div>
                    <div class="py-20 lg:pt-24">
                        <img src="{{asset('assets/img/icons/direction-line.png')}}" alt="xdirection" class="rotate-90 lg:rotate-0 mx-auto">
                    </div>
                    <div class="w-full lg:w-1/4 px-2 text-center">
                        <img src="{{asset('assets/img/illustrations/Get-data.svg')}}" alt="Connect" class="lg:h-56 w-full mx-auto">
                        <h3 class="font-bold text-blueGray-800 text-4xl lg:text-2xl lg:px-2">Take some sales data  that you want</h3>
                        <p class="text-base text-blueGray-600 text-2xl lg:text-xl my-3">You already have sales data of your product with some variants you want</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 lg:py-20">
            <div class="bg-holder hidden lg:flex" style="background-image:url({{asset('assets/img/illustrations/bg.png')}});background-position:left top;background-size:initial;margin-top:-180px;"></div>
            <div class="container">
                <div class="flex">
                    <div class="w-2/3">
                        <h1 class="text-5xl my-4 font-semibold">Start the easy way. </h1>
                        <p class="text-2xl leading-relaxed text-blueGray-600 mt-4 font-medium">
                           We are here to work for you <br> Whether you’re an experienced investor, or just started.
                        </p>
                        <p class="text-lg leading-relaxed text-blueGray-500 mt-3">
                            It’s easy to get started in minutes with one of our predefined strategies that matches your investment goals.
                            Or create your own strategy with 15+
                            customizable investment criteria. Automate your investments,
                            or manage them actively – the choice is yours.²
                        </p>
                    </div>
                    <div class="w-1/2">
                        <div class="relative">
                        <img class="object-cove" src="{{asset('assets/img/illustrations/world-map.67e9ff3.png')}}" alt="world-map"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="bg-holder d-none d-sm-block" style="background-image:url({{asset('assets/img/illustrations/category-bg.png')}});background-position:right top;background-size:200px 320px;"></div>
            <div class="container">
                <div class="flex justify-center">
                    <div class="w-6/12 text-center mb-6">
                        <h5 class="text-5xl font-bold">See what our customers have to say about us</h5>
                    </div>
                </div>
                <div class="flex flex-center">
                    <div class="w-1/3 px-3">
                       <div class="bg-violet-100 rounded-md py-3 px-4 hover:bg-violet-200 cursor-pointer hover:scale-105 transition h-64">
                           <img src="{{asset('assets/img/icons/Netflix.svg')}}" alt="Netflix" class="py-3 mb-2">
                           <p class="text-gray-700 mb-2">
                               “I’ve used Growthly at many companies before—it’s the go-to solution when you need user and product analytics.”
                           </p>
                           <div class="flex my-3 items-center">
                               <img src="{{asset('assets/img/icons/ToyFaces_Colored_BG_29 2.svg')}}" class="rounded-full" alt="alt-proi">
                               <div class="pl-3">
                                   <h4 class="text-gray-700 mb-1 font-medium">Try Washington</h4>
                                   <h4 class="text-violet-900 text-sm font-semibold">CEO of Netflix</h4>
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="w-1/3 px-3">
                        <div class="bg-violet-100 rounded-md py-3 px-4 hover:bg-violet-200 cursor-pointer hover:scale-105 transition h-64">
                            <img src="{{asset('assets/img/icons/Microsoft.svg')}}" alt="Netflix" class="py-3 mb-2">
                            <p class="text-gray-700 mb-2">
                                “Uses Growthly as the source of truth for all its product data, and to determine where the team should focus its time.”
                            </p>
                            <div class="flex my-3 items-center">
                                <img src="{{asset('assets/img/icons/Mask Group.png')}}" class="rounded-full" alt="alt-proi">
                                <div class="pl-3">
                                    <h4 class="text-gray-700 mb-1 font-medium">Cyhntya Rebecca</h4>
                                    <h4 class="text-violet-900 text-sm font-semibold">CEO of Microsoft</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 px-3">
                        <div class="bg-violet-100 rounded-md py-3 px-4 hover:bg-violet-200 cursor-pointer hover:scale-105 transition h-64">
                            <img src="{{asset('assets/img/icons/Shopify.png')}}" alt="Netflix" class="py-3 mb-2">
                            <p class="text-gray-700 mb-2">
                                “Uses Growthly to get deeper user insights that could be easily shared among teams throughout the world.”
                            </p>
                            <div class="flex my-3 items-center">
                                <img src="{{asset('assets/img/icons/Mask Group.svg')}}" class="rounded-full" alt="alt-proi">
                                <div class="pl-3">
                                    <h4 class="text-gray-700 mb-1 font-medium">Derry Alasca</h4>
                                    <h4 class="text-violet-900 text-sm font-semibold">Manager of Shopify</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-8">
            <div class="container">
                <div class="flex">
                    <div class="w-2/3 my-auto">
                        <h5 class="font-bold text-5xl">Companies that trusted Us</h5>
                        <p class="my-4 text-gray-600 leading-relaxed text-2xl">
                            Deployment now includes out-of-the-box integration with accounting and ERP platforms,
                            Plus an open API that allows you to seamlessly integrate with your business systems.
                        </p>
                    </div>
                    <div class="w1/2">
                        <img class="img-fluid mb-4 py-2" src="{{asset('assets/img/illustrations/feature.png')}}" alt="companies" />
                    </div>
                </div>
            </div>
        </section>
        <section class="py-0"><img class="w-100" src="{{asset('assets/img/illustrations/come-on-join.png')}}" alt="" />
            <div class="container pb-6">
                <div class="w-full text-center">
                    <h6 class="fw-bold fs-3 fs-lg-7 lh-sm">Come, Join Us!</h6>
                </div>
            </div>
        </section>
    </main>
    @push('modals')
        <script src="{{asset('assets/js/plugins/countup.min.js')}}"></script>
        <script>
            if (document.getElementById('status1')) {
                const options = {
                    duration: 0.7,
                };
                const countUp = new CountUp('status1', document.getElementById("status1").getAttribute("countTo"),options);
                if (!countUp.error) {
                    countUp.start();
                } else {
                    console.error(countUp.error);
                }
            }
            if (document.getElementById('status2')) {
                const options = {
                    decimalPlaces: 1,
                    duration: 1,
                };
                const countUp = new CountUp('status2', document.getElementById("status2").getAttribute("countTo"),options);
                if (!countUp.error) {
                    countUp.start();
                } else {
                    console.error(countUp.error);
                }
            }
            if (document.getElementById('status3')) {
                 const options = {
                    duration: 4,
                };
                const countUp = new CountUp('status3', document.getElementById("status3").getAttribute("countTo"),options);
                if (!countUp.error) {
                    countUp.start();
                } else {
                    console.error(countUp.error);
                }
            }
            if (document.getElementById('status4')) {
                 const options = {
                    duration: 4,
                };
                const countUp = new CountUp('status4', document.getElementById("status4").getAttribute("countTo"),options);
                if (!countUp.error) {
                    countUp.start();
                } else {
                    console.error(countUp.error);
                }
            }
        </script>
    @endpush
@endsection
