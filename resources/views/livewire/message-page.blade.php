

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
<div class="container mx-auto">
    <div class="max-w-7xl py-10 lg:px-8  ">

        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="flex justify-between mb-5">
                    <div>
                        <h3 class="text-xl font-weight-bolder text-black"> رسالتك </h3>
                        <p class="mt-1 text-md text-gray-500">
                            الرسالة الخاصة بك .
                        </p>
                    </div>

                </div>

                <div class=" bg-white-100 border-gray-300 mt-5">
                    <div class="container grid">

                        <div class="mt-6 mb-5 px-4 py-5 sm:p-6 bg-gray-200 shadow sm:rounded-lg border border-gray-400 ">
                            <!-- Name -->
                            <div class="mb-5" >
                                <h2 class="text-xl font-weight-bold text-indigo-900 mb-2">
                                    {{ __('موضوع الرسالة') }}
                                </h2>
                                <h3 class="text-lg font-weight-bold text-gray-900">
                                    {{$message->subject}}
                                </h3>
                            </div>
                            <!-- Last Name -->
                            <div class="mb-3 border-gray-400 border bg-white py-3 px-4 sm:rounded-lg">
                                <x-jet-label for="lastname" value="{{ __('محتوى الرسالة') }}" />
                                <div class="max-w-7xl text-lg leading-tigh text-gray-600 mt-4">
                                    <p>
                                        {{$message->message}}
                                    </p>
                                </div>
                            </div>
                            @if($message->reply)
                            <div class="mb-3 border-gray-400 border bg-white py-3 px-4 sm:rounded-lg">
                                <x-jet-label for="lastname" value="{{ __('الرد ') }}" />
                                <div class="max-w-7xl text-lg leading-tigh text-gray-600 mt-4">
                                    <p>
                                        {{$message->reply}}
                                    </p>
                                </div>
                            </div>
                            @else
                                <div class="mb-3  py-3 px-4 sm:rounded-lg text-red-600">
                                    <div class="max-w-7xl text-lg leading-tigh text-red-500 mt-1 font-semibold">
                                        {{ __(' لم يتم الرد بعد') }}
                                        </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('messages')}}"
                               class="text-center inline-flex items-center
                            px-6 py-2 bg-green-500 border border-transparent rounded-md font-semibold
                             text-white uppercase  hover:bg-green-600 active:bg-gray-900 focus:outline-none
                             focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-text-center
                              inline-flex items-center px-6 py-2 bg-green-500 border border-transparent rounded-md
                               font-semibold  text-white uppercase  hover:bg-green-600 active:bg-gray-900 focus:outline-none
                               focus:border-gray-900
                            focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                {{ __('العودة') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
</div>
</div>




