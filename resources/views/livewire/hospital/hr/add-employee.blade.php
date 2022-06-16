

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


    <form wire:submit.prevent="CreateEmployee" class="w-full">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="firstname" value="{{ __('First-Name') }}" />
                <x-jet-input id="firstname" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="firstname" />
                @error('firstname') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="lastname" value="{{ __('Last-Name') }}" />
                <x-jet-input id="lastname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="lastname" />
                @error('lastname') <span class="error text-red-600">{{$message}}</span>@enderror
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
                <x-jet-input id="password" type="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password" wire:model.debounce.800ms="password" />
                @error('password') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </div>
        <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="address" />
                @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="sex" value="{{ __('sex') }}" />
                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    wire:model.debounce.800ms="sex" />
                    <option>---Select sex---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option> 
                </select>
                @error('sex') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </div>
        <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <x-jet-label for="role" value="{{ __('Role') }}" />
                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    wire:model.debounce.800ms="role" />
                    <option>---Select role---</option>
                    <option value="5">Receptionist</option>
                    <option value="7">Pharmacy</option>
                    <option value="8">Laboratory</option>
                </select>
                @error('role') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="department" value="{{ __('Department') }}" />
                <x-jet-input id="department" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="department" />
                @error('department') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 gap-6">
            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone-Number') }}" />
                <x-jet-input id="phone" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.debounce.800ms="phone" />
                @error('phone') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="date_of_birth" value="{{ __('Date_Of_Birth') }}" />
                <x-jet-input id="date_of_birth" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" wire:model.debounce.800ms="date_of_birth" />
                @error('date_of_birth') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="profile_pic" value="{{ __('Profile-Picture') }}" />
                <x-jet-input id="profile_pic" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" wire:model.debounce.800ms="profile_pic" />
                @error('profile_pic') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </div>

        <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="mt-4">
                <label>Shifts</label><br/>
                <input type="checkbox" wire:model.debounce.800ms="shift" value="Monday">Monday<br/>
                <input type="checkbox" wire:model.debounce.800ms="shift" value="Tuesday">Tuesday<br/>
                <input type="checkbox" wire:model.debounce.800ms="shift" value="Wedneday">Wednesday<br/>
                <input type="checkbox" wire:model.debounce.800ms="shift" value="Thurday">Thurday<br/>
                <input type="checkbox" wire:model.debounce.800ms="shift" value="Friday">Friday<br/>
                <input type="checkbox" wire:model.debounce.800ms="shift" value="Saturday">Saturday<br/>
                <input type="checkbox" wire:model.debounce.800ms="shift" value="Sunday">Sunday<br/> 
            </div>
        </div>

        <button class="flex items-center justify-end mt-4" type="submit">
            <x-jet-button class="ml-4">
                Submit
            </x-jet-button>
        </button>

    </form>
</div>






