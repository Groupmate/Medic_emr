<div class = "ml-6 pt-6 bg-black ">
    <!-- The whole world belongs to you.  -->
    <div class="border-b pt-5 border-gray-400 shadow">
        <table class="table-auto">
            <thead class="text-purple-500">
                <tr >
                    <th  class="px-6 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Patient ID</th>
                    <th  class="px-6 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">First Name</th>
                    <th   class="px-6 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Second Name</th>
                    <th   class="px-5 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Last Name</th>
                    <th   class="px-56 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Action</th>

<<<<<<< Updated upstream
                </tr>
            </thead>
            <tbody>                                 
                    @foreach($assignmentDoctor as $organ)
                        @foreach($userID as $userId)
                            @foreach($patientID as $patientId)
                                <tr>
                                    @if($userId -> id == $organ->user_id && $organ->patient_id == $patientId->id)
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patientId->id }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patientId->firstname }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patientId->middle_name }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patientId->lastname }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                                                <x-jet-button class="bg-blue-500 ml-6 " wire:click="referShowModal({{ $patientId->id }}, {{$userId->id}})">
                                                    {{ __('Refer Patient') }}
                                                </x-jet-button>
                                                <x-jet-button class="bg-green-500 ml-6"  wire:click="updateReferShowModal({{ $patientId->id }})">
                                                    {{ __('update Refer') }}
                                                </x-jet-button>
                                                <x-jet-danger-button class="bg-red-500 ml-6" wire:click="deleteShowModal({{ $patientId->id }})" >
                                                    {{ __('Delete Refer') }}
                                                </x-jet-button>
                                            </td>
                                    @endif
                                </tr>                    
                            @endforeach
                        @endforeach
                    @endforeach                                             
            </tbody> 
        </table>
    </div>  

                 {{-- Modal form for refering each patient goes here --}}

    <x-jet-dialog-modal wire:model="modelFormVisible">
        <x-slot name="title">
            {{ __('Refer Patient') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-jet-label for="date" value="{{ __('Refered Date') }}" />
                <x-jet-input id="date" class="block p-6  mt-1 w-1/2 bg-gray-500 border-2 border-gray-500" type="date" name="date" wire:model.debounce.800ms="date" />
                @error('date') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="Refere_to" value="{{ __('Refered To') }}" />
                <select class="block mt-1 w-1/2 p-6  border-2 bg-gray-500  border-gray-500 " wire:model.debounce.800ms="refered_to" />
                :value="old('refered_to')" required autofocus autocomplete="refered_to">
                    <option selected >---Select Hospital---</option>
                    @forelse ($hospitals as $hospital)
                        <option value= {{ $hospital->id }} > {{ $hospital->name }} </option>
                    @empty
                        <option disabled>No Hospital to Refer to</option>
                    @endforelse
                </select>
                @error('refered_to') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="diagnosis Result" value="{{ __('Diagnosis Result') }}" />
                <x-jet-input id="diagnosis" class="block p-6 mt-1 w-1/2 bg-gray-500  border-2 border-gray-500 text-left text-xl font-semibold" type="text" name="diagnosis" wire:model.debounce.800ms="diagnosis" />
                @error('diagnosis') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </x-slot>
        <x-slot name="footer">
            @if($modelId)
                <x-jet-secondary-button class="bg-green-500" wire:click="update" wire:loading.attr="disabled">
                    {{ __('update') }}
                </x-jet-secondary-button>
            @else
                <x-jet-secondary-button class="bg-green-500" wire:click="refer" wire:loading.attr="disabled">
                    {{ __('Refer Patient') }}
                </x-jet-secondary-button>
            @endif

            <x-jet-secondary-button class="ml-3" wire:click="$toggle('modelFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
 
=======
            </tr>
        </thead>
        <tbody>
            @foreach($organizations as $organ)
            <tr>
                <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ['patient_id']}}</td>
                <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ['firstname']}}</td>  
            @endforeach
         @foreach($assignmentDoctor as $assign)
           @foreach($userID  as $assigns)
            @if($assign->user_id == $assigns->id)
                abc
            @endif
            @endforeach
        @endforeach

                
                
                    {{-- <!-- @if( $userID->id  == $organizations->user_id)
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->patient_id}}</td>
                    @endif -->
                        <!-- @if( $userID  == $organ->user_id)
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$user->firstname}}</td>
                        @endif
                        @if( $organ->user_id  == NULL)
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $organ->user_id }}</td>
                        @endif
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
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm"> -->
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
                    <td class="px-6 py-3 border-b border-black-200 bg-white text-lg">Nope</td>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                </tr>
            @endforelse --}}
        </tbody>
    </table>
   
>>>>>>> Stashed changes
</div>
