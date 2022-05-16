<div class="p-6">
       <p style = "color:blue; text-align:center;">
           A registration form for creating hospital manager at zonal level
       </p>
    <x-guest-layout>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>


        <div>
            <x-jet-label for="first_name" value="{{ __('First name') }}"/>
            <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="first_name" required/>
            @error('first_name') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="last_name" value="{{ __('Last name') }}"/>
            <x-jet-input id="last_name" class="block mt-1 w-full" type="text" wire:model.defer="last_name" required/>
            @error('last_name') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="organization" value="{{ __('Organization') }}"/>
            <x-jet-input id="organization" class="block mt-1 w-full" type="text" wire:model.defer="orgn_id" required/>
            @error('orgn_id') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="phone" value="{{ __('Phone') }}"/>
            <x-jet-input id="phone" class="block mt-1 w-full" type="text" wire:model.defer="phone" required/>
            @error('phone') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="role" value="{{ __('Role') }}" />
            <select wire:model.defer="role" class="block mt-1 w-full border-gray-300 focus:border" >
                <option>---Select Role---</option>
                <option value="4">Hospital Manager</option>
                <option value="2">Speciality Clinic</option>
            </select>
        </div>

        <div class="mt-4">
            <x-jet-label for="address" value="{{ __('address') }}" />
            <x-jet-input id="address" class="block mt-1 w-full" type="text" wire:model.defer="address" required />
            @error('address') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="sex" value="{{ __('sex') }}" />
            <x-jet-input id="sex" class="block mt-1 w-full" type="text" wire:model.defer="sex" required/>
            @error('sex') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="date_of_birth" value="{{ __('date_of_birth') }}" />
            <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date" wire:model.defer="date_of_birth" required/>
            @error('date_of_birth') <span class="error">{{$message}}</span>@enderror
        </div>

        <!-- <div class="mt-4">
            <x-jet-label for="type" value="{{ __('type') }}" />
            <x-jet-input id="type" class="block mt-1 w-full" type="text" wire:model.defer="type"/>
            @error('type') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="department" value="{{ __('department') }}" />
            <x-jet-input id="department" class="block mt-1 w-full" type="text" wire:model.defer="department" :value="old('department')" />
            @error('department') <span class="error">{{$message}}</span>@enderror
        </div> -->

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

        <!-- <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" wire:model.defer="password_confirmation" required autocomplete="new-password" />
        </div>  -->

        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4"  wire:click="create" wire:loading.attr="disabled">
                Submit
            </x-jet-button>
        </div>
    </x-guest-layout>
    @if (session()->has('message'))

        <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">

            <div class="flex">

                <div>

                    <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>

                </div>

            </div>

        </div>

     @endif
</div>



