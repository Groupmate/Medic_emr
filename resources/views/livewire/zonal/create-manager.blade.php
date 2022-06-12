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
            <x-jet-input id="lastname" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="lastname"/>
            @error('lastname') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="phone" value="{{ __('Phone') }}"/>
            <x-jet-input id="phone" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="phone"/>
            @error('phone') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="role" value="{{ __('Role') }}" />
            <select wire:model.debounce.800ms="role" class="block mt-1 w-full border-gray-300 focus:border" >
                <option>---Select Role---</option>
                <option value="4">General Provost</option>
            </select>
        </div>

        <div class="mt-4">
            <x-jet-label for="address" value="{{ __('address') }}" />
            <x-jet-input id="address" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="address" />
            @error('address') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="sex" value="{{ __('sex') }}" />
            <x-jet-input id="sex" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="sex"/>
            @error('sex') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="date_of_birth" value="{{ __('date_of_birth') }}" />
            <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date" wire:model.debounce.800ms="date_of_birth"/>
            @error('date_of_birth') <span class="error">{{$message}}</span>@enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model.debounce.800ms="email" :value="old('email')" required />
            @error('email') <span class="error">{{$message}}</span>@enderror
        </div>


        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" wire:model.debounce.800ms="password" required autocomplete="new-password" />
            @error('password') <span class="error">{{$message}}</span>@enderror
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4"  wire:click="create" wire:loading.attr="disabled">
                Submit
            </x-jet-button>
        </div>
    </x-guest-layout>
</div>


