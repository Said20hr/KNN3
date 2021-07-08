
    <x-slot name="header">
        <div class="d-flex flex">
            <a href="{{route('dashboard')}}" class="font-semibold text-lg text-gray-400 leading-tight mx-3">
                {{ __(' الرئيسية') }}
            </a> ·
            <a href="{{route('investment')}}" class="font-semibold text-lg text-gray-600 leading-tight mx-3">
                {{ __(' الاستثمارات') }}
            </a> ·
            <h2 class="font-semibold text-lg text-gray-800 leading-tight mx-3">
                {{ __('الاستثمار ') }}
            </h2>
        </div>

    </x-slot>
    <div class="container mx-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">

            <div class="container mx-auto px-4 sm:px-8">
                <div class="py-8">
                    <div class="sm:flex justify-between mb-5">
                        <div class="sm:flex mb-5">
                            <h3 class="text-2xl font-weight-bolder text-gray-800 ml-3 mb-3"> {{$invest->pack->name}}</h3>
                            <h3 class="text-2xl font-weight-bolder text-gray-800 ml-3 mb-3">   {{$invest->user->name." ".$invest->user->lastname}}</h3>
                        </div>
                        <div>
                            <x-jet-button wire:loading.attr="disabled" wire:target="photo">
                                قدم طلب الاستثمار
                            </x-jet-button>
                        </div>
                    </div>

                    <div class="bg-white-100 border-b border-gray-300 pt-8">
                        <div class="container grid">
                            <h2 class="mb-8 text-xl font-weight-bolder text-gray-600">
                                البيانات الاستثمارية
                            </h2>
                            <div class="grid gap-6 mb-8 md:grid-cols-3 xl:grid-cols-3 bg-gray-100 p-1 rounded-lg ">
                                <div class="flex items-center justify-between py-6 px-4 border-gray-500 border hhover:bg-gray-50 cursor-pointer rounded-lg shadow-xs ">
                                    <div class="justify-center items-center">
                                        <p class="mb-2 text-sm text-xl font-weight-bolder text-black">
                                            المبلغ المستثمر
                                        </p>
                                        <p class="text-lg font-semibold text-green-600 text-white">
                                            {{$invest->price}} $
                                        </p>
                                    </div>
                                    <div class="icon  bg-purple-400 text-white rounded-full bg-green-500 mr-3 px-2 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="flex items-center justify-between py-6 px-4 border-gray-500 border hover:bg-gray-50 cursor-pointer rounded-lg shadow-xs ">
                                    <div class="justify-center items-center">
                                        <p class="mb-2 text-sm text-xl font-weight-bolder text-black">
                                            المدة
                                        </p>
                                        <p class="text-lg font-semibold text-green-600 text-white">
                                            {{$invest->created_at->diffInDays(Carbon\Carbon::now())}}   يوم
                                        </p>
                                    </div>
                                    <div class="icon  bg-purple-400 text-white rounded-full bg-green-500 mr-3 px-2 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-6 px-4 border-gray-500 border hover:bg-gray-50 cursor-pointer rounded-lg shadow-xs ">
                                    <div class="justify-center items-center">
                                        <p class="mb-2 text-sm text-xl font-weight-bolder text-black">
                                            الأرباح المتوفرة
                                        </p>
                                        <p class="text-lg font-semibold text-green-600 text-white">
                                            {{number_format($invest->profit,0,',','') }} $
                                        </p>
                                    </div>
                                    <div class="icon  bg-purple-400 text-white rounded-full bg-green-500 mr-3 px-2 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="flex items-center justify-between py-6 px-4 border-gray-500 border hover:bg-gray-50 cursor-pointer rounded-lg shadow-xs ">
                                    <div class="justify-center items-center">
                                        <p class="mb-2 text-sm text-xl font-weight-bolder text-black">
                                            أرباح غير متاحة
                                        </p>
                                        <p class="text-lg font-semibold text-green-600 text-white">
                                            {{number_format($invest->delayed,0,',','') }} $
                                        </p>
                                    </div>
                                    <div class="icon  bg-purple-400 text-white rounded-full bg-green-500 mr-3 px-2 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-6 px-4 border-gray-500 border hover:bg-gray-50 cursor-pointer rounded-lg shadow-xs ">
                                    <div class="justify-center items-center">
                                        <p class="mb-2 text-sm text-xl font-weight-bolder text-black">
                                            المبلغ المقتطع
                                        </p>
                                        <p class="text-lg font-semibold text-green-600 text-white">
                                            {{number_format($invest->withdraw,0,',','') }} $
                                        </p>
                                    </div>
                                    <div class="icon  bg-purple-400 text-white rounded-full bg-green-500 mr-3 px-2 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                    </div>

                                </div>
                                <div class="flex items-center justify-between py-6 px-4 border-gray-500 border hover:bg-gray-50 cursor-pointer rounded-lg shadow-xs ">
                                    <div class="justify-center items-center">
                                        <p class="mb-2 text-sm text-xl font-weight-bolder text-black">
                                            ارباح مؤجلة
                                        </p>
                                        <p class="text-lg font-semibold text-green-600 text-white">
                                            0 $
                                        </p>
                                    </div>
                                    <div class="icon  bg-purple-400 text-white rounded-full bg-green-500 mr-3 px-2 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                        </svg>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div></div>





    </div>
    </div>


