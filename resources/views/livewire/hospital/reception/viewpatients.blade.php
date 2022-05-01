<div class="p-6">
    <div class="bg-white dark:bg-gray-800  shadow px-8 md:px-12 pt-4 md:pt-7 pb-5 overflow-y-auto">
        <div>
          <h2 class="text-gray-600 font-semibold">Patient Full Information</h2>
          <span class="text-xs">All Patients Clients</span>
        </div><br>
        <div clas="flex justify-between">
            <div class="ml-2 p-4">
                <input  type="search"  placeholder="Search..." class="shadow apperance none bounded  rounded bg-transparent focus:outline-none text-xs" wire:model="search" />  
                
            </div>
        </div><br>

         <div class="p-4">  
            <table class="table-auto w-full whitespace-nowrap ">
                <thead class="text-purple-500 p-4">
                    <tr >
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wide">Full name</th>
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">patient_id</th>
                        <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">phone_no</th>
                        <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">email</th>
                        <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">action</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td  class="px-5 py-5 border-b border-gray-200 bg-white text-sm" >
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"/>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm whitespace-no-wrap"> {{$patient->firstname}} {{$patient->lastname}}</p>
                                   
                                </div>
                            </td>
                            <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$patient->patient_id}}</td>
                            <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$patient->phone_no}}</td>
                            <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$patient->email}}</td>
                            <td   class="px-5 py-5">
                                <div class="flex items-center space-x-8 text-sm">
                                      <x-jet-button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  wire:click="updateShowModal({{ $patient->id }})">
                                        <svg
                                          class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg> {{ __('Edit') }}
                                      </x-jet-button>
                                         {{-- <x-jet-button wire:click="viewShowModel({{ $patient->id }})" class="bg-green-500">
                                        {{ __('view') }}
                                        </x-jet-button> --}}
                                      <x-jet-danger-button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  wire:click="deleteShowModel({{ $patient->id }})" >
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"viewBox="0 0 20 20">
                                          <path
                                            fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>   {{ __('Delete') }}
                                      </x-jet-danger-button>
                                 </div>
                                    {{-- <x-jet-button wire:click="updateShowModal({{ $patient->id }})">
                                    {{ __('Edit') }}
                                    </x-jet-button>
                                    
                                 
                                    <x-jet-danger-button wire:click="deleteShowModel({{ $patient->id }})" >
                                        {{ __('Delete') }}
                                    </x-jet-button> --}}
                           </td>
                    
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if(count($patients))
                {{$patients}}
                @endif
        </div>    
         <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">

                    <x-slot name="title">
                        {{ __('Delete Account') }} {{$modelId}}
                    </x-slot>

                    <x-slot name="content">
                        {{ __('Are you sure you want to delete your patient account ? Once your account is deleted, all of its resources and data will be permanently deleted. ') }}


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
        </div>
    </div>

