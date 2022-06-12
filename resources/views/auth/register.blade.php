<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="firstname" value="{{ __('First name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="lastname" value="{{ __('Last name') }}" />
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="organization" value="{{ __('Organization') }}" />
                <x-jet-input id="organization" class="block mt-1 w-full" type="text" name="organization_id" :value="old('organization_id')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="role" value="{{ __('Role') }}" />
                <select name="role" class="block mt-1 w-full border-gray-300 focus:border" :value="old('role')" required autofocus autocomplete="role">
                    <option>---Select Role---</option>
                    <option value="1">Federal Admin</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"   />
            </div>

            <div class="mt-4">
                <x-jet-label for="sex" value="{{ __('sex') }}" />
                <x-jet-input id="sex" class="block mt-1 w-full" type="text" name="sex" :value="old('sex')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="date_of_birth" value="{{ __('date_of_birth') }}" />
                <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="text" name="date_of_birth" :value="old('date_of_birth')"   />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="profile_pic" value="{{ __('profile_pic') }}" />
                <x-jet-input id="profile_pic" class="block mt-1 w-full" type="file" name="profile_pic" :value="old('profile_pic')" autofocus autocomplete="password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
