
    <x-slot name="header">
        <div class="d-flex flex">
            <a href="{{route('dashboard')}}" class="font-semibold text-lg text-gray-400 leading-tight mx-3">
                {{ __(' الرئيسية') }}
            </a> ·
            <h2 class="font-semibold text-lg text-gray-800 leading-tight mx-3">
                {{ __('الاستثمارات') }}
            </h2>
        </div>

    </x-slot>
    <div class="container mx-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
            <div class="container mx-auto px-4 sm:px-8">
                <div class="py-8">
                    <div class="sm:flex justify-between mb-5">
                        <div class="mb-5">
                            <h3 class="text-xl font-weight-bolder text-black"> تاريخ الاستثمارات</h3>
                            <p class="mt-1 text-md text-gray-500">
                                تصفح جدول الاستمارات الخاصة بك .
                            </p>
                        </div>
                        <div>
                            <x-jet-button>
                                قدم طلب الاستثمار
                            </x-jet-button>
                        </div>
                    </div>

                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div
                            class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal text-right bg-white" dir="rtl">
                                <thead>
                                <tr class="text-right">
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                    الباقة الاستثمارية
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                    المبلغ المستثمر
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                    المدة
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                        مقدار الربح
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                         الربح الصافي
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                        الحالة
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-indigo-500"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($investissment as $invest)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-lg">
                                            <a href="{{route('investment.show',$invest->id)}}">{{$loop->index+1}}#</a>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-lg">
                                        <a href="{{route('investment.show',$invest->id)}}">{{$invest->pack->name}}</a>
                                    </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        <p class="text-gray-900 whitespace-no-wrap mr-2">   {{number_format($invest->price,0,',','') }} دوﻻر</p>
                                    </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$invest->created_at->format('Y/m/d')}}  </p>
                                        <p class="text-gray-600 whitespace-no-wrap text-sm">{{$invest->created_at->diffInDays(Carbon\Carbon::now())}} يوم </p>
                                    </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-md text-right">
                                        {{$invest->pack->percent}} %
                                    </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        <p class="text-gray-900 whitespace-no-wrap mr-2">   {{number_format($invest->profit,0,',','') }} دوﻻر</p>
                                    </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        @if($invest->status)
                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span
                                                aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">فعال</span>
                                        </span>
                                        @else
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span
                                                aria-hidden
                                                class="absolute inset-0 bg-red-600 opacity-50 rounded-full"></span>
                                            <span class="relative">معطل</span>
                                        </span>
                                        @endif
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div></div>





        </div>
    </div>

