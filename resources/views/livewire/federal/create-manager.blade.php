<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <div>
                <x-jet-label for="first_name" value="{{ __('First name') }}"/>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
                @error('first_name') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="last_name" value="{{ __('Last name') }}"/>
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
                @error('last_name') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="organization" value="{{ __('Organization') }}"/>
                <x-jet-input id="organization" class="block mt-1 w-full" type="text" name="orgn_id" :value="old('organization')" required />
                @error('orgn_id') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}"/>
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                @error('phone') <span class="error text-red-600">{{$message}}</span>@enderror
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
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" />
                @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="sex" value="{{ __('sex') }}" />
                <x-jet-input id="sex" class="block mt-1 w-full" type="text" name="sex" :value="old('sex')" />
                @error('sex') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="date_of_birth" value="{{ __('date_of_birth') }}" />
                <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" />
                @error('date_of_birth') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="type" value="{{ __('type') }}" />
                <x-jet-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" />
                @error('type') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="department" value="{{ __('department') }}" />
                <x-jet-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')" />
                @error('department') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                @error('email') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="profile_pic" value="{{ __('Profile_picture') }}" />
                <x-jet-input id="profile_pic" class="block mt-1 w-full" type="file" name="profile_pic" :value="old('profile_pic')" autofocus />
                @error('profile_pic') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                @error('password') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4"  wire:click="create" >
                    {{ __('Register') }}
                </x-jet-button>
            </div>
    </x-jet-authentication-card>
</x-guest-layout>
