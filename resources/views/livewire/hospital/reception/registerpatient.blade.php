<div class="p-6">
    @if (session()->has('message'))
        <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
                    </div>
                </div>
         </div>
    @endif

    <form wire:submit.prevent="createPatient" class="w-full" >
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div>
                <x-jet-label for="first_name" value="{{ __('First-Name') }}" />
                <x-jet-input id="first_name" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="first_name" />
                @error('first_name') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div>
                <x-jet-label for="middle_name" value="{{ __('Middle-Name') }}" />
                <x-jet-input id="middle_name" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text"  wire:model.debounce.800ms="middle_name" />
                @error('middle_name') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>

            <div>
                <x-jet-label for="last_name" value="{{ __('Last-Name') }}" />
                <x-jet-input id="last_name" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="last_name" />
                @error('last_name') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>

        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="email" wire:model.debounce.800ms="email"/>
                @error('email') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="national_id" value="{{ __('National_id') }}" />
                <x-jet-input id="national_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="national_id" />
                @error('national_id') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>
        </div>
        <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="phone_no" value="{{ __('Phone-Number') }}" />
                <x-jet-input id="phone_no" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="phone_no" />
                @error('phone_no') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label  value="{{ __('Sex') }}" />
                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="sex" >
                    <option>---Select sex---</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
                @error('sex') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="profile_picture" value="{{ __('Profile-Picture') }}" />
                <x-jet-input id="profile_picture" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" wire:model.debounce.800ms="profile_picture"/>
                @error('profile_picture') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="date_of_birth" value="{{ __('Birth-Date') }}" />
                <x-jet-input id="date_of_birth" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" wire:model.debounce.800ms="date_of_birth" />
                @error('date_of_birth') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>
        </div>
        <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="region" value="{{ __('Region') }}" />
                <x-jet-input id="region" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="region" />
                @error('region') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="zone" value="{{ __('Zone') }}" />
                <x-jet-input id="zone" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="zone" />
                @error('zone') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('City') }}" />
                <x-jet-input id="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="city" />
                @error('city') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="woreda" value="{{ __('Woreda') }}" />
                <x-jet-input id="woreda" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="woreda" />
                @error('woreda') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="kebele" value="{{ __('Kebele') }}" />
                <x-jet-input id="kebele" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="kebele" />
                @error('kebele') <span class="error text-red-600">{{ $message }}</span>@enderror
            </div>
        </div>

        <button class="flex items-center justify-end mt-4" type="submit">
            <x-jet-button class="ml-4">
                Submit
            </x-jet-button>
        </button>
    </form>
</div>




