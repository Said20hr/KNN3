<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile information ') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Change your personal information and your email address ') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="w-full text-center mx-auto border-dark">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo de profile') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2 " x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover mx-auto">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2 border" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20 "
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mb-5 mt-5 ml-4" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Change Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-4" wire:click="deleteProfilePhoto">
                        {{ __('Delete photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif
        <div class="w-full flex flex-wrap">
        <!-- Name -->
       <div class="w-full mb-3 ">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>
        <!-- Last Name -->
       <div class="w-full mb-3">
            <x-jet-label for="lastname" value="{{ __('LastName') }}" />
            <x-jet-input id="lastname" type="text" class="mt-1 block w-full" wire:model.defer="state.lastname" autocomplete="lastname" />
            <x-jet-input-error for="lastname" class="mt-2" />
        </div>

        <!-- Email -->
            <div class="w-full mb-3">
            <x-jet-label for="email" value="{{ __('Email ') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" disabled />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
        <!-- Phone -->
            <div class="w-full mb-3">
            <x-jet-label for="phone" value="{{ __('Phone Number') }}" />
            <x-jet-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="state.phone" />
            <x-jet-input-error for="phone" class="mt-2" />
        </div>
        <!-- Job -->
            <div class="w-full mb-3">
            <x-jet-label for="job" value="{{ __('Job ') }}" />
            <x-jet-input id="job" type="text" class="mt-1 block w-full" wire:model.defer="state.job" />
            <x-jet-input-error for="job" class="mt-2" />
        </div>
       <!-- Country -->
            <div class="w-full mb-3">
           <x-jet-label for="country" value="{{ __('Country ') }}" />
           <x-jet-input id="country" type="text" class="mt-1 block w-full" wire:model.defer="state.country" />
           <x-jet-input-error for="country" class="mt-2" />
       </div>
       <!-- Birth_date -->
            <div class="w-full mb-3">
           <x-jet-label for="birth_date" value="{{ __('Birth date') }}" />
           <x-jet-input id="birth_date" type="date" class="mt-1 block w-full" wire:model.defer="state.birth_date" />
           <x-jet-input-error for="birth_date" class="mt-2" />
       </div>
       <!-- Birth place -->
            <div class="w-full mb-3">
           <x-jet-label for="birth_place" value="{{ __('Birth place') }}" />
           <x-jet-input id="birth_place" type="text" class="mt-1 block w-full" wire:model.defer="state.birth_place" />
           <x-jet-input-error for="birth_place" class="mt-2" />
       </div>
       <!-- Address -->
            <div class="w-full mb-3">
           <x-jet-label for="address" value="{{ __('Address ') }}" />
           <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address" />
           <x-jet-input-error for="address" class="mt-2" />
       </div>

   </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
