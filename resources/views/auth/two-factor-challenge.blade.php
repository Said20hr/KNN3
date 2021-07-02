<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div x-data="{ recovery: false }">

            <div class="mb-4 pt-3 text-md text-gray-600 text-right" x-show="! recovery">
                {{ __('يرجى تأكيد الوصول إلى حسابك عن طريق إدخال رمز المصادقة المقدم من تطبيق المصادقة الخاص بك.') }}
            </div>

            <div class="mb-4 pt-3 text-md text-gray-600 text-right" x-show="recovery">
                {{ __('يرجى تأكيد الوصول إلى حسابك عن طريق إدخال أحد رموز الاسترداد في حالات الطوارئ.') }}
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}" dir="rtl" class="py-2">
                @csrf

                <div class="mt-4 mb-2" x-show="! recovery">
                    <x-jet-label for="code" value="{{ __('رمز المصادقة') }}" />
                    <x-jet-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4 mb-2" x-show="recovery">
                    <x-jet-label for="recovery_code" value="{{ __('كود الاسترداد') }}" />
                    <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class=" items-center justify-end mt-4">
                    <button type="button" class="text-md text-indigo-700 hover:text-gray-900  cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('استخدم رمز الاسترداد') }}
                    </button>
                    <button type="button" class="text-md text-indigo-700 hover:text-gray-900  cursor-pointer"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('استخدم رمز المصادقة') }}
                    </button>

                    <div class="items-center text-center mt-4 justify-center">
                        <x-jet-button class="text-center ">
                            {{ __('تسجيل الدخول') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
