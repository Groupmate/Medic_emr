
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
                {{ __('Add Health Bureau') }}
         </x-jet-button>
    </div>
    <x-jet-dialog-modal wire:model="modelFormVisible">
        <x-slot name="title">
            {{ __('Add Health Bureau') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="Bureau Name" value="{{ __('Bureau Name') }}" />
                <select name="name" class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="name">
                    <option selected >---Select Health Bureau Name---</option>
                    <option value="Oromia Regional Health bureau">Oromia Regional Health bureau</option>
                    <option value="Amhara Regional Health bureau">Amhara Regional Health bureau</option>
                    <option value="Tigray Regional Health bureau">Tigray Regional Health bureau</option>
                    <option value="Afar Regional Health bureau">Afar Regional Health bureau</option>
                    <option value="Benishangul Gumuz Regional Health bureau">Benishangul Gumuz Regional Health bureau</option>
                    <option value="Somali Regional Health bureau">Somali Regional Health bureau</option>
                    <option value="Harari Regional Health bureau">Harari Regional Health bureau</option>
                    <option value="SNNP Regional Health bureau">SNNP Regional Health bureau</option>
                    <option value="SWNNP Regional Health bureau">SWNNP Regional Health bureau</option>
                    <option value="Gambela Regional Health bureau">Gambela Regional Health bureau</option>
                    <option value="Sidama Regional Health bureau">Sidama Regional Health bureau</option>
                    <option value="Addis Ababa City Adminstration">Addis Ababa City Adminstration</option> 
                    <option value="Dire Dawa City Adminstration">Dire Dawa City Adminstration</option> 
                </select>
                @error('name') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>    
            <div class="mt-4">
                <x-jet-label for="manager" value="{{ __('Manager') }}" />
                <select id = "user_id" name = "user_id" class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="user_id">
                    <option selected >---Select Bureau Manager---</option>
                    @forelse ($users as $user)
                        <option value={{ $user->id }}>{{ $user->firstname }} {{ $user->lastname }}</option>
                    @empty
                        <option disabled>---No Manager to select, create manager first---</option>
                    @endforelse
                </select>
                @error('user_id') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="type" value="{{ __('Type') }}" />
                <select name="type" class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="type" >
                    <option selected>---Select Bureau Type---</option>
                    <option value="1">Regional Health bureau</option>
                    <option value="2">City Adminstration Health Bureau</option>
                    <option value="3">Speciality Clinics Health Bureau</option>
                </select>
                @error('type') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="region" value="{{ __('Region') }}" />
                <select name="region" class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="region">
                    <option selected>---Select Bureau Region---</option>
                    <option value="Oromia">Oromia</option>
                    <option value="Amhara">Amhara</option>
                    <option value="Tigray">Tigray</option>
                    <option value="Afar">Afar</option>
                    <option value="Benishangul Gumuz">Benishangul Gumuz</option>
                    <option value="Somali">Somali</option>
                    <option value="Harari">Harari</option>
                    <option value="SNNP">SNNP</option>
                    <option value="SWNNP">SWNNP</option>
                    <option value="Gambela">Gambela</option>
                    <option value="Sidama">Sidama</option>
                    <option value="Addis Ababa">Addis Ababa</option> 
                    <option value="Dire Dawa">Dire dawa</option> 
                </select>
                @error('region') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>    
            <div class="mt-4">
                <x-jet-label for="zone" value="{{ __('Zone') }}" />
                <x-jet-input id="zone" class="block mt-1 w-full" type="text" name="zone" wire:model.debounce.800ms="zone"/>
                @error('zone') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="woreda" value="{{ __('Woreda') }}" />
                <x-jet-input id="woreda" class="block mt-1 w-full" type="text" name="woreda" wire:model.debounce.800ms="woreda"/>
                @error('woreda') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('City') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="city" />
                @error('city') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="kebele" value="{{ __('Kebele') }}" />
                <x-jet-input id="kebele" class="block mt-1 w-full" type="text" name="kebele" wire:model.debounce.800ms="kebele" />
                @error('kebele') <span class="error text-red-600">{{$message}}</span>@enderror
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
                {{-- <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">manager</th> --}}
                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">type</th>
                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">region</th>
                <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">city</th>
                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">action</th>

            </tr>
        </thead>
        <tbody>
            @forelse($organizations as $organ)
                <tr>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->name}}</td>
                    {{-- @foreach ($user as $user)
                        @if( $user->id  == $organ->user_id)
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$user->firstname}}</td>
                        @endif
                        @if( $organ->user_id  == NULL)
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $organ->user_id }}</td>
                        @endif
                    @endforeach --}}
                    @if( $organ->type ==1 )
                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">Regional Health bureau</td>
                    @endif
                    @if( $organ->type ==2 )
                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">City Adminstration</td>
                    @endif
                    @if( $organ->type ==3 )
                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">Speciality Clinic</td>
                    @endif

                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->region}}</td>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->city}}</td>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                        <x-jet-button wire:click="updateShowModal({{ $organ->id }})">
                            {{ __('update') }}
                        </x-jet-button>
                        <x-jet-danger-button wire:click="deleteShowModal({{ $organ->id }})" >
                            {{ __('Delete') }}
                        </x-jet-button>
                        <x-jet-button class="bg-green-500" wire:click="viewShowModal({{ $organ->id }})">
                            {{ __('view') }}
                        </x-jet-button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-black-200 bg-white text-lg">No Health Bureau addede yet!</td>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                </tr>
            @endforelse
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
                            <td> {{ $user_id }}</td>
                        </tr>
                        <tr>
                            <th>Type of health center:</th>
                            <td>
                                @if ($type == 1)
                                    Regional
                                @elseif ($type == 2)
                                    City Adminstration
                                @elseif ($type == 3)
                                    Speciality Clinics
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Region of health center:</th>
                            <td> {{ $region }} </td>
                        </tr>
                        <tr>
                            <th>City of health center:</th>
                            <td> {{ $city }} </td>
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


