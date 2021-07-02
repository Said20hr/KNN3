@extends('layouts.layout')

@section('content')
    <main class="main" id="top">

        <section class="py-0" id="home">

            <!--/.bg-holder-->

            <div class="bg-holder d-sm-none"
                 style="background-image:url({{asset('assets/img/illustrations/hero-bg.png')}});background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="container text-right p-tb-112">
                <div class="row align-items-center min-vh-75 min-vh-md-100 justify-content-center text-center">
                    <div class="col-md-9 col-lg-8 py-5 text-sm-start text-center justify-content-center ">
                        <h1 class="mt-3 mb-sm-4 display-2 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-8">  تواصل معنا  </h1>
                        <div class="card-body text-right">
                            <form action="" method="POST" dir="rtl">
                                @csrf
                                <div class="container bg-soft-info p-tb-28 bor-r5 bor4" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <div class="row ">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label fs-16 pb-2 p-r-10 clblack">الأسم * </label>
                                            <div class="input-group mb-2">
                                                <input id="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                                       placeholder="{{ __('اكتب أسمك هنا') }}" name="name" value="{{ old('name') }}" required autofocus>
                                            </div>
                                            @error('name')
                                            <div class="text-danger mb-2" role="alert">
                                                <strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label fs-16  pb-2 p-r-10 clblack">رقم الهاتف * </label>
                                            <div class="input-group mb-3">
                                                <input id="phone" class="form-control  @error('phone') is-invalid @enderror" type="text" placeholder="{{ __('أكتب رقم الهاتف هنا') }}" name="phone" value="{{ old('phone') }}" autofocus  required>
                                            </div>
                                            @error('phone')
                                            <div class="text-danger mb-2" role="alert">
                                                <strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label fs-16  pb-2 p-r-10 clblack">البريد الإلكتروني * </label>
                                            <div class="input-group mb-3">
                                                <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('example@example.com') }}"
                                                       name="email" value="{{ old('email') }}" autofocus required>
                                            </div>
                                            @error('email')
                                            <div class="text-danger mb-2" role="alert">
                                                <strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="subject" class="form-label fs-16  pb-2 p-r-10 clblack">موضوع الرسالة * </label>
                                            <div class="input-group mb-3">
                                                <input id="subject" class="form-control @error('subject') is-invalid @enderror" type="text" placeholder="{{ __('موضوع') }}" name="subject" value="{{ old('subject') }}" autofocus  required>
                                            </div>
                                            @error('subject')
                                            <div class="text-danger mb-2" role="alert">
                                                <strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="message" class="form-label fs-16 clblack pb-2 p-r-10">رسالتك * </label>
                                            <div class="input-group mb-3">
                                                <textarea name="message" id="message" cols="30" rows="10" class="form-control p-tb-20 p-lr-20" value="محتوى الرسالة"></textarea>
                                            </div>
                                            @error('phone')
                                            <div class="text-danger mb-2" role="alert">
                                                <strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary col-md-6 fs-24  p-tb-10 lh-10 font-weight-bold col-lg-3" type="submit">{{ __('أرسل الرسالة') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </main>
@endsection
