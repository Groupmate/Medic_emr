<div class="p-6">
    <x-guest-layout>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div>
            <x-jet-label for="firstname" value="{{ __('First name') }}"/>
            <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="firstname"/>
            @error('firstname') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="lastname" value="{{ __('Last name') }}"/>
            <x-jet-input id="lastname" class="block mt-1 w-full" type="text" wire:model.defer="lastname"/>
            @error('lastname') <span class="error">{{$message}}</span>@enderror
        </div> 

        <div class="mt-4">
            <x-jet-label for="phone" value="{{ __('Phone') }}"/>
            <x-jet-input id="phone" class="block mt-1 w-full" type="text" wire:model.defer="phone"/>
            @error('phone') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="role" value="{{ __('Role') }}" />
            <select wire:model.defer="role" class="block mt-1 w-full border-gray-300 focus:border" >
                <option>---Select Role---</option>
                <option value="2">Regional Admin</option>
                <option value="2">City Adminstration Admin</option>
                <option value="2">Speciality Clinic</option>
            </select>
        </div>

        <div class="mt-4">
            <x-jet-label for="address" value="{{ __('address') }}" />
            <x-jet-input id="address" class="block mt-1 w-full" type="text" wire:model.defer="address" />
            @error('address') <span class="error">{{$message}}</span>@enderror
        </div>
            <div class="mt-4">
                <x-jet-label  value="{{ __('Sex') }}" />
                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.defer="sex" >
                    <option>---Select sex---</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
                @error('sex') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>
       
        <div class="mt-4">
            <x-jet-label for="date_of_birth" value="{{ __('date_of_birth') }}" />
            <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date" wire:model.defer="date_of_birth"/>
            @error('date_of_birth') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model.defer="email" :value="old('email')" required />
            @error('email') <span class="error">{{$message}}</span>@enderror
        </div>

        {{-- <div class="mt-4">
            <x-jet-label for="profile_pic" value="{{ __('Profile_picture') }}" />
            <x-jet-input id="profile_pic" class="block mt-1 w-full" type="file" wire:model.defer="profile_pic" :value="old('profile_pic')" autofocus />
            @error('profile_pic') <span class="error">{{$message}}</span>@enderror
        </div> --}}

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" wire:model.defer="password" required autocomplete="new-password" />
            @error('password') <span class="error">{{$message}}</span>@enderror
        </div>
{{--
        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" wire:model.defer="password_confirmation" required autocomplete="new-password" />
        </div> --}}

        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4"  wire:click="create" wire:loading.attr="disabled">
                Submit
            </x-jet-button>
        </div>
    </x-guest-layout>
</div>


