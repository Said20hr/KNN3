<x-guest-layout>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif


        <form method="POST" action="{{ route('login') }}" dir="rtl" class="p-tb-56">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('البريد الالكتروني') }}" />
                <x-jet-input id="email" class="block mt-5 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('كلمة السر') }}" />
                <x-jet-input id="password" class="block mt-5 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="mr-3 text-sm text-gray-600">{{ __('تذكرني') }}</span>
                </label>
            </div>

            <div class="items-center text-center mt-4 justify-center">
                <x-jet-button class="text-center">
                    {{ __('دخول') }}
                </x-jet-button>
            </div>
        </form>
        <div class="items-center  mt-4 justify-center text-center">
        @if (Route::has('password.request'))
            <a class="text-md m-t-14 text-gray-600 hover:text-gray-900 "  href="{{ route('password.request') }}">
                {{ __('نسيت كلمة السر ؟') }}
            </a>
        @endif
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
