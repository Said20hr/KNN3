
<div class="container mx-auto">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-8">

        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="flex justify-between mb-5">
                    <div>
                        <h3 class="text-xl font-weight-bolder text-black"> Send message </h3>
                        <p class="mt-1 text-md text-gray-500">
                         Write your message or your inquiry
                        </p>
                    </div>

                </div>
                <form wire:submit.prevent="submit" method="POST">
                    <div class=" bg-white-100 border-gray-300 mt-5">
                        <div class="container ">

                            <div class="row gap-6 block">
                                <!-- Name -->
                                <div class="mb-3 sm:max-w-xl">
                                    <x-jet-label for="name" value="{{ __('Subject') }}" />
                                    <input type="text" wire:model="subject" id="firstName" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full
                                shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Subject">
                                    @error('subject') <span class="alert alert-danger">{{ $message }}</span> @enderror
                                </div>
                                <!-- Last Name -->
                                <div class="mb-3 sm:max-w-xl">
                                    <x-jet-label for="lastname" value="{{ __('Message') }}" />
                                    <textarea wire:model="message" id="" cols="60" rows="10" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm py-3"></textarea>
                                    @error('message') <span class="alert alert-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <x-jet-button >
                                    {{ __('Send') }}
                                </x-jet-button>
                            </div>
                        </div>
                    </div>
            </div>
        </div></div>
</div>
</div>





