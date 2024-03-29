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
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
        <x-jet-button wire:click="createShowModal">
                {{ __('Add Zonal Health Bureaus') }}
         </x-jet-button>
    </div>
    <x-jet-dialog-modal wire:model="modelFormVisible">
        <x-slot name="title">
            {{ __('Add Zonal Health Bureau') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" wire:model.debounce.800ms="name" />
                @error('name') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="manager" value="{{ __('Manager') }}" />
                <x-jet-input id="manager" class="block mt-1 w-full" type="text" name="manager_id" wire:model.debounce.800ms="manager_id" />
                @error('manager_id') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="type" value="{{ __('Type') }}" />
                <select name="type" class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="type" />
                :value="old('type')" required autofocus autocomplete="type">
                    <option>---Select Type---</option>
                    <option value="4">Hospital Or Other Health Center</option>
                </select>
                @error('type') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="region" value="{{ __('Region') }}" />
                <x-jet-input id="region" class="block mt-1 w-full" type="text" name="region" wire:model.debounce.800ms="region" />
                @error('region') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="zone" value="{{ __('Zone') }}" />
                <x-jet-input id="zone" class="block mt-1 w-full" type="text" name="zone" wire:model.debounce.800ms="zone" />
                @error('zone') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="woreda" value="{{ __('Woreda') }}" />
                <x-jet-input id="woreda" class="block mt-1 w-full" type="text" name="woreda" wire:model.debounce.800ms="woreda" />
                @error('woreda') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="kebele" value="{{ __('Kebele') }}" />
                <x-jet-input id="kebele" class="block mt-1 w-full" type="text" name="kebele" wire:model.debounce.800ms="kebele" />
                @error('kebele') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="city_name" value="{{ __('City_Name') }}" />
                <x-jet-input id="city_name" class="block mt-1 w-full" type="text" name="city_name" wire:model.debounce.800ms="city_name" />
                @error('city_name') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            @if($modelId)
                <x-jet-secondary-button class="bg-green-500" wire:click="update" wire:loading.attr="disabled">
                    {{ __('update') }}
                </x-jet-secondary-button>
            @else
                <x-jet-secondary-button class="bg-green-500" wire:click="create" wire:loading.attr="disabled">
                    {{ __('create') }}
                </x-jet-secondary-button>
            @endif


            <x-jet-secondary-button class="ml-3" wire:click="$toggle('modelFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
                <!-- data table -->
    <table class="min-w-full leading-normal">
        <thead class="text-purple-500">
            <tr >
                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Name center</th>
                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">manager</th>
                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">type</th>
                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">region</th>
                <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">city_name</th>
                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">action</th>

            </tr>
        </thead>
        <tbody>
            @if($organizations->count())
                @foreach($organizations as $organ)
                    <tr>
                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->name}}</td>
                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->manager_id}}</td>
                        @if( $organ->type ==5 )
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">Zonal</td>
                        @endif
                        <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->region}}</td>
                        <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->city_name}}</td>
                        <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">

                            <x-jet-button wire:click="updateShowModal({{ $organ->id }})">
                                {{ __('update') }}
                            </x-jet-button>
                            <x-jet-danger-button wire:click="deleteShowModel({{ $organ->id }})" >
                                {{ __('Delete') }}
                            </x-jet-button>
                            <x-jet-button class="bg-green-500" wire:click="viewShowModel({{ $organ->id }})">
                                {{ __('view') }}
                            </x-jet-button>
                        </td>
                    </tr>
                @endforeach
            @else
                    <tr>
                        <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                        <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                        <td class="px-6 py-3 border-b border-black-200 bg-white text-lg">Nope</td>
                        <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                        <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                        <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    </tr>
            @endif
        </tbody>
    </table>
                    <!-- Delete the organization modal -->
    <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">

        <x-slot name="title">
            {{ __('Delete Account') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete your organization ? Once your account is deleted, all of its resources and data will be permanently deleted. ') }}


        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete ') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
    <!-- For view Detail -->    
    <x-jet-dialog-modal wire:model="modalViewDetailVisible">

        <x-slot name="title">
            {{ __('View Detail') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">

            <table class="leading-normal">
                <tbody>
                        <tr>
                            <th>Name of health center:</th>
                            <td> {{ $name }}</td>
                        </tr>
                        <tr>
                            <th>Manager of the health center:</th>
                            <td> {{ $manager_id }}</td>
                        </tr>
                        <tr>
                            <th>Type of health center:</th>
                            <td>
                                @if ($type == 5)
                                    Hospital
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Region of health center:</th>
                            <td> {{ $region }} </td>
                        </tr>
                        <tr>
                            <th>City of health center:</th>
                            <td> {{ $city_name }} </td>
                        </tr>
                </tbody>
            </table>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalViewDetailVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>
