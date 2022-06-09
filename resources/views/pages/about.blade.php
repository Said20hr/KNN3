@extends('layouts.layout')

@section('content')
    <main >


        <section class="pt-32">
            <div class="container">
                <div class="flex">
                    <div class="w-2/3 my-auto">
                        <h6 class="text-5xl font-bold leading-tight">We are a global platform for investing in Stocks</h6>
                        <p class="my-4 text-xl leading-relaxed">
                            Global platform for investing in stocks, is a go-to investment platform where retail investors can invest in a
                            diversified way in income-producing assets to build wealth in the long term.
                            By rethinking how money flows across borders from those who want to save and invest to those who want to borrow,
                            we are revolutionizing financial services and contributing to financial inclusion on a global scale.
                        </p>
                    </div>
                    <div class="w-1/2">
                        <img class="img-fluid mb-4" src="{{asset('assets/img/illustrations/Right.svg')}}" alt="who-we-are" />
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <div class="container">
                <div class="flex justify-around">
                    <div class="w-2/5" style="background-image: url('{{asset('assets/img/bg/Pattern-abt.png')}}');background-size: cover">
                        <img class="" src="{{asset('assets/img/illustrations/abt.png')}}" alt="abt" />
                    </div>
                    <div class="w-2/5">
                        <h6 class="text-4xl font-bold leading-tight mb-3">The reasons to prefer choosing our platform </h6>
                        <p class="mb-3 text-base leading-relaxed text-blueGray-600">
                            Seamless integration of more than 20+ apps that can help analytics your product
                        </p>
                        <div class="flex flex-wrap justify-between">
                            <div class="w-1/2 mb-4">
                                <img src="{{asset('assets/img/icons/Chart.svg')}}" alt="icon1" class="">
                                <h3 class="font-bold my-2 text-xl">Real time data</h3>
                                <p class="text-base w-11/12">Get the data you need to make smarter decisions.</p>
                            </div>
                            <div class="w-1/2 mb-4">
                                <img src="{{asset('assets/img/icons/Rocket.svg')}}" alt="icon1" class="">
                                <h3 class="font-bold my-2 text-xl">Fast and Easy to use</h3>
                                <p class="text-base w-11/12">Get the data you need to make smarter decisions.</p>
                            </div>
                            <div class="w-1/2 mb-4">
                                <img src="{{asset('assets/img/icons/Security.svg')}}" alt="icon1" class="">
                                <h3 class="font-bold my-2 text-xl">Safely Security</h3>
                                <p class="text-base w-11/12">Get the data you need to make smarter decisions.</p>
                            </div>
                            <div class="w-1/2 mb-4">
                                <img src="{{asset('assets/img/icons/Category.svg')}}" alt="icon1" class="">
                                <h3 class="font-bold my-2 text-xl">Powerfull App</h3>
                                <p class="text-base w-11/12">Get the data you need to make smarter decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
