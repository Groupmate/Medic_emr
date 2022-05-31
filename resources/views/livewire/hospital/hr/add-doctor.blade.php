

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


    <form wire:submit.prevent="CreateDoctor" class="w-full">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="first_name" value="{{ __('First-Name') }}" />
                <x-jet-input id="first_name" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="first_name" wire:model.debounce.800ms="first_name" />
                @error('first_name') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="last_name" value="{{ __('Last-Name') }}" />
                <x-jet-input id="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="last_name" wire:model.debounce.800ms="last_name" />
                @error('last_name') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="email" wire:model.debounce.800ms="email" />
                @error('email') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>


            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password" name="password" required autocomplete="current-password" wire:model.debounce.800ms="password" />
                @error('password') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </div>
        <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="address" wire:model.debounce.800ms="address" />
                @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="sex" value="{{ __('Sex') }}" />
                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model.debounce.800ms="sex" />
                :value="old('sex')" required autofocus autocomplete="type">
                    <option disabled>---Select sex---</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @error('sex') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </div>
        <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="speciality" value="{{ __('Speciality') }}" />
                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    wire:model.debounce.800ms="speciality" />
                    <option>---Select speciality---</option>
                    <option value="Mathernal">Mathernal</option> 
                    <option value="Pediatric">Pediatric</option> 
                </select>
                @error('speciality') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="department" value="{{ __('Department') }}" />
                <x-jet-input id="department" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="department" wire:model.debounce.800ms="department" />
                @error('department') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 gap-6">
            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone-Number') }}" />
                <x-jet-input id="phone" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="phone" wire:model.debounce.800ms="phone" />
                @error('phone') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="date_of_birth" value="{{ __('Date_Of_Birth') }}" />
                <x-jet-input id="date_of_birth" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="date_of_birth" wire:model.debounce.800ms="date_of_birth" />
                @error('date_of_birth') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="profile_pic" value="{{ __('Profile-Picture') }}" />
                <x-jet-input id="profile_pic" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" name="profile_pic" wire:model.debounce.800ms="profile_pic" />
                @error('profile_pic') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </div>

        <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <label>Shifts</label><br/>
                <input type="checkbox" wire:model.debounce.800ms="shift" value="monday">Monday<br/>
                <input type="checkbox" wire:model.debounce.800ms="shift" value="tuesday">Tuesday<br/>
            </div>
        </div>

        <button class="flex items-center justify-end mt-4" type="submit">
            <x-jet-button class="ml-4">
                Submit
            </x-jet-button>
        </button>

    </form>
</div>






