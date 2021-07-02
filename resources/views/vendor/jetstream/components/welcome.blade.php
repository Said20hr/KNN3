<div class="container grid">
    <div class="p-6 bg-white border-b " dir="rtl">
        <div class="mb-5 text-center ">
            <div class="align-items-center flex justify-center">
                <div class="">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-full border-4 border-gray-400 p-2 h-20 w-20 object-cover">
                    @endif
                </div>
            </div>
            <h1 class="text-indigo-700 fs-28 font-semibold px-5 llg:px-8 pt-5 p-r-25">{{Auth::user()->name." ".Auth::user()->lastname }}</h1>
        </div>
    </div>
    <div class="p-6 sm:px-20 bg-white-100 border-b border-gray-300">
    <h2 class="text-2xl font-weight-bolder text-gray-800 mb-6 ">
        المعلومات الرئيسية
    </h2>
        <div class="flex justify-between bg-white-100 bor-r5 p-6 mb-5 mt-5">
            <div class="">
        <div class="fs-26 font-weight-bold text-gray-700 text-gray-700 flex inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="mx-2"></span> الدولة :
        </div>
        <div class="flex align-content-center py-6">
            <img  src="{{asset('assets/img/icons/flag.svg')}}" alt="{{ Auth::user()->name }}" width="30"/>
            <div class="fs-18 font-weight-bold m-lr-7 text-gray-800">
                فلسطين
            </div>
        </div>
    </div>
            <div class="">
        <div class="fs-26 font-weight-bold text-gray-700 text-gray-700 flex inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"  stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
            </svg>
            <span class="mx-2"> حالة الملف :</span>
        </div>
                <div class="flex align-content-center py-6 text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"  fill="currentColor">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <div class="fs-18 font-weight-bold m-lr-7 text-green-600">
                        فعال
                    </div>
                </div>
    </div>
            <div class="">
        <div class="fs-26 font-weight-bold text-gray-700 text-gray-700 flex inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
            </svg>
            <span class="mx-2"> حصص فعالة :</span>
        </div>

                <div class="flex align-content-center py-6 text-indigo-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                    <div class="fs-18 font-weight-bold m-lr-7 text-indigo-700">
                        {{$packs_count}}  حصص
                    </div>
                </div>
    </div>
            <div class="">
                <div class="fs-26 font-weight-bold text-gray-700 text-gray-700 flex inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="mx-2">الهاتف :</span>
                </div>
                <div class="flex align-content-center py-6">

                    <div class="fs-18 font-weight-bold m-lr-7 text-gray-500">
                      <a href="phone:{{Auth::user()->phone}}">{{Auth::user()->phone}}</a>
                    </div>
                </div>
    </div>
            <div class="">
        <div class="fs-26 font-weight-bold text-gray-700 text-gray-700 flex inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
           <span class="mx-2">الايمايل :</span>
        </div>
                <div class="flex align-content-center py-6">

                    <div class="fs-18 font-weight-bold m-lr-7 text-gray-500">
                        {{Auth::user()->email}}
                    </div>
                </div>
    </div>
        </div>
    </div>
    <div class="p-6 sm:px-20 bg-white-100 border-b border-gray-300 mt-5">
        <div class="container grid">
            <h2 class="mb-8 text-2xl font-weight-bolder text-gray-800">
                البيانات الاستثمارية
            </h2>

            <div class="grid gap-6 mb-8 md:grid-cols-3 xl:grid-cols-3 bg-white p-1 rounded-lg ">
                <div class="flex items-center justify-between py-6 px-4 bg-blue-500 hover:bg-blue-700 cursor-pointer rounded-lg shadow-xs ">
                    <div class="justify-center items-center">
                        <p class="mb-2 text-sm text-xl font-weight-bolder text-white">
                            اجمالي استثمارك المدفوع
                        </p>
                        <p class="text-lg font-semibold text-gray-700 text-white">
                            {{$invest_count}} $
                        </p>
                    </div>
                    <div class="icon  bg-purple-400 text-blue-500 rounded-full bg-blue-100 mr-3 px-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                        </svg>
                    </div>

                </div>
                <div class="flex items-center justify-between py-6 px-4 bg-green-500 hover:bg-green-600 cursor-pointer rounded-lg shadow-xs ">
                    <div class="justify-center items-center">
                        <p class="mb-2 text-sm text-xl font-weight-bolder text-white">
                            إجمالي الربح
                        </p>
                        <p class="text-lg font-semibold text-gray-700 text-white">
                            {{$profit_count}} $
                        </p>
                    </div>
                    <div class="icon bg-purple-400 text-green-500 rounded-full bg-green-100 mr-3 px-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center justify-between py-6 px-4 bg-yellow-400 hover:bg-yellow-600 cursor-pointer rounded-lg shadow-xs ">
                    <div class="justify-center items-center">
                        <p class="mb-2 text-sm text-xl font-weight-bolder text-white">
                            الأرباح المتاحة للسحب
                        </p>
                        <p class="text-lg font-semibold text-gray-700 text-white">
                            {{$withdraw_count}} $
                        </p>
                    </div>
                    <div class="icon  bg-purple-400 text-yellow-500 rounded-full bg-yellow-100 mr-3 px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                    </div>

                </div>
                <div class="flex items-center justify-between py-6 px-4 bg-indigo-600 hover:bg-blue-700 cursor-pointer rounded-lg shadow-xs ">
                    <div class="justify-center items-center">
                        <p class="mb-2 text-sm text-xl font-weight-bolder text-white">
                            أرباح غير متاحة
                        </p>
                        <p class="text-lg font-semibold text-gray-700 text-white">
                            {{$inavailable_count}} $
                        </p>
                    </div>
                    <div class="icon bg-indigo-50 text-indigo-500 rounded-full bg-indigo-50 mr-3 px-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center justify-between py-6 px-4 bg-pink-600 hover:bg-red-600 cursor-pointer rounded-lg shadow-xs ">
                    <div class="justify-center items-center">
                        <p class="mb-2 text-sm text-xl font-weight-bolder text-white">
                            المبلغ المقتطع
                        </p>
                        <p class="text-lg font-semibold text-gray-700 text-white">
                            {{$substruct_count}} $
                        </p>
                    </div>
                    <div class="icon bg-red-100 text-red-500 rounded-full bg-red-100 mr-3 px-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                    </div>

                </div>
                <div class="flex items-center justify-between py-6 px-4  bg-gray-500 hover:bg-gray-700 cursor-pointer rounded-lg shadow-xs ">
                    <div class="justify-center items-center">
                        <p class="mb-2 text-sm text-xl font-weight-bolder text-white">
                            ارباح مؤجلة
                        </p>
                        <p class="text-lg font-semibold text-gray-700 text-white">
                            {{$delayed_count}} $
                        </p>
                    </div>
                    <div class="icon bg-gray-200 text-gray-500 rounded-full bg-gray-50 mr-3 px-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>

                </div>
            </div>

        </div>


</div>

</div>

