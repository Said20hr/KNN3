@extends('dashboard.authBase')

@section('content')
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <div class="col-md-7 justify-content-center no-gutters bor-r5 p-0">
                <div class="card-group ">
                    <div class="card bor-r5">
                            <div class="card-header bg-primary p-tb-24 text-center" >
                                <div class="text-center font-weight-bolder fs-22 m-lr-56 text-white">هل نسيت كلمة السر ؟</div>
                            </div>
                        <div class="card-body p-t-20 p-b-40 text-right p-lr-56" >
                            <p class="text-muted mb-4 fs-20 p-tb-7">ادخل ايمايلك بشكل صحيح</p>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="col-md-12 mb-4">
                                    <label for="email" class="form-label fs-18 pb-2">البريد الإلكتروني * </label>
                                    <div class="input-group mb-3">

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    @error('email')
                                    <div class="text-danger mb-2" role="alert">
                                        <strong>{{$message}}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center py-3">
                                    <button class="btn2 btn-primary col-md-6 fs-24 h-55 p-tb-10 lh-10 font-weight-bold" type="submit">{{ __('ارسل') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 0 0 15px 15px !important;">
                            @if (Route::has('password.request'))
                                <p class="fs-20 p-tb-7 m-b-15">ليس لديك حساب ؟ <a href="{{ route('register') }}" class="color-1 font-weight-bold">أنشىء حسابك</a></p>
                            @endif
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
