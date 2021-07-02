

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
                        <h3 class="text-xl font-weight-bolder text-black"> ارسل رسالتك </h3>
                        <p class="mt-1 text-md text-gray-500">
                            ارسل طلبك او استفسارك  .
                        </p>
                    </div>

                </div>
                <form wire:submit.prevent="submit" method="POST">
                <div class=" bg-white-100 border-gray-300 mt-5">
                    <div class="container grid">

                        <div class="row gap-6 block">
                            <!-- Name -->
                            <div class="mb-3 max-w-xl">
                                <x-jet-label for="name" value="{{ __('موضوع الرسالة') }}" />
                                <input type="text" wire:model="subject" id="firstName" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="موضوع الرسالة">
                                @error('subject') <span class="alert alert-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Last Name -->
                            <div class="mb-3 max-w-xl">
                                <x-jet-label for="lastname" value="{{ __('محتوى الرسالة') }}" />
                                <textarea wire:model="message" id="" cols="60" rows="10" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm py-3"></textarea>
                                @error('message') <span class="alert alert-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <x-jet-button >
                                {{ __('ارسل') }}
                            </x-jet-button>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
</div>
</div>





