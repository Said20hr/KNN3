<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric',Rule::unique('users')->ignore($user->id)],
            'birth_date' => ['required', 'date'],
            'birth_place' => ['required', 'string'],
            'address' => ['required', 'string'],
            'job' => ['required', 'string'],
            'country' => ['required', 'string'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'lastname' => $input['lastname'],
                'phone' => $input['phone'],
                'birth_date' => $input['birth_date'],
                'birth_place' => $input['birth_place'],
                'address' => $input['address'],
                'job' => $input['job'],
                'country' => $input['country'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'lastname' => $input['email'],
            'phone' => $input['phone'],
            'birth_date' => $input['birth_date'],
            'birth_place' => $input['birth_place'],
            'address' => $input['address'],
            'job' => $input['job'],
            'country' => $input['country'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
