
    <x-slot name="header">
        <div class="d-flex flex">
            <a href="{{route('dashboard')}}" class="font-semibold text-lg text-gray-400 leading-tight mx-3">
                {{ __(' الرئيسية') }}
            </a> ·
            <h2 class="font-semibold text-lg text-gray-800 leading-tight mx-3">
                {{ __('الرسائل و الاستفسارات') }}
            </h2>
        </div>

    </x-slot>

    <div class="py-10 px-3">
        <div class="max-w-7xl mx-auto sm:px-8 lg:px-8">
            <div class="py-4">
                @if(session()->has('success_message'))
                    <div class="bg-green-500 text-white py-2 px-3 rounded fs-20">{{session()->get('success_message')}}</div>
                @endif
                @if(session()->has('error_message'))
                    <div class="bg-red-600 text-gray-200 py-2 px-3 rounded fs-20">{{session()->get('error_message')}}</div>
                @endif
            </div>
            <div class="container mx-auto px-8 sm:px-8">
                <div class="">
                    <div class="sm:flex justify-between mb-5">
                        <div class="mb-5">
                            <h3 class="text-xl font-weight-bolder text-black"> قائمة الرسائل </h3>
                            <p class="mt-1 text-md text-gray-500">
                                تصفح قائمة الرسائل الخاصة بك .
                            </p>
                        </div>
                        <div>
                            <a href="{{route('message.send')}}"
                               class="text-center inline-flex items-center
                            px-6 py-2 bg-green-500 border border-transparent rounded-md font-semibold
                             text-white uppercase  hover:bg-green-600 active:bg-gray-900 focus:outline-none
                             focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-text-center
                              inline-flex items-center px-6 py-2 bg-green-500 border border-transparent rounded-md
                               font-semibold  text-white uppercase  hover:bg-green-600 active:bg-gray-900 focus:outline-none
                               focus:border-gray-900
                            focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                ارسل طلبك
                            </a>
                        </div>
                    </div>
                    @if(count($messages)>0)
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal text-right bg-white" dir="rtl">
                                <thead>
                                <tr class="text-right">
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                        عنوان الرسالة
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                        تاريخ الارسال
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                        الرد
                                    </th>
                                    <th class="text-right px-5 py-3 border-b-2 border-gray-200 bg-indigo-500 text-left text-lg font-mono text-white uppercase">
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)

                                 <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-lg">
                                        {{$loop->index+1}}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-lg">
                                        {{$message->subject}}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        <p class="text-gray-900 whitespace-no-wrap"> {{$message->created_at}}   </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-md">
                                        @if($message->reply)
                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span
                                                aria-hidden
                                                class="absolute inset-0 bg-green-500 opacity-50 rounded-full"></span>
                                            <span class="relative">تم الرد</span>
                                        </span>
                                        @else
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span
                                                aria-hidden
                                                class="absolute inset-0 bg-yellow-400 opacity-50 rounded-full"></span>
                                            <span class="relative">في الانتظار</span>
                                        </span>
                                        @endif
                                    </td>

                                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-md">

                                        <div class="flex">
                                            <a href="{{route('message.show',$message->id)}}" class="mx-2 text-center text-sm inline-flex items-center px-2 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-white hover:bg-green-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="#">شاهد</a>
                                          @if($message->reply)
                                                <button wire:click="destroy({{$message->id}})"
                                                        class="mx-2 text-center text-sm inline-flex items-center px-2 py-2 bg-red-600 rounded-md font-semibold
                                                         text-white hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900
                                                         disabled:opacity-25 transitio">حذف
                                                </button>

                                            @endif
                                            

                                        </div>
                                    </td>

                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    @else
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="text-gray-900 py-2 px-3 rounded fs-20">ﻻ توجد اي رسالة لك.</div>
                        </div>
                    @endif
                </div>
            </div></div>
    </div>
    </div>


