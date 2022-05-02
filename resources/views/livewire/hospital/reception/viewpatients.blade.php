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


        <x-jet-dialog-modal wire:model="modelFormVisible">

                    <x-slot name="title">
                        {{ __('Edit patient information') }} {{$modelId}}
                    </x-slot>

                    <x-slot name="content">
                        <div class="-mx-3 md:flex mb-2">
                                      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label for="firstname" value="{{ __('First name') }}"/>
                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="First_Name" wire:model.debounce.800ms="firstname"/>
                                        @error('firstname') <span class="error">{{$message}}</span>@enderror
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                  
                                        <x-jet-label for="last_name" value="{{ __           ('Last name') }}"/>
                                        <x-jet-input id="lastname" class="block mt-1 w-full" type="text" placeholder="Last_Name" wire:model.debounce.800ms="lastname"/>
                                        @error('last_name') <span class="error">{{$message}}</span>@enderror
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                  
                                        <x-jet-label for="lmiddelname" value="{{ __           ('middel name') }}"/>
                                        <x-jet-input id="middelname" class="block mt-1 w-full" type="text" placeholder="Middel_Name" wire:model.debounce.800ms="middelname"/>
                                        @error('middelname') <span class="error">{{$message}}</span>@enderror
                                    </div>
                                
                            </div>
                            <div class="-mx-3 md:flex mb-2">
                                  <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <x-jet-label for="patient_id" value="{{ __('National_Id') }}"/>
                                    <x-jet-input id="patient_id" class="block mt-1 w-full" type="text" placeholder="National_Id" wire:model.debounce.800ms="patient_id"/>
                                    @error('patient_id') <span class="error">{{$message}}</span>@enderror
                                </div>
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              
                                    <x-jet-label for="email" value="{{ __           ('Email') }}"/>
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" placeholder="email" wire:model.debounce.800ms="email"/>
                                    @error('email') <span class="error">{{$message}}</span>@enderror
                                </div>
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              
                                    <x-jet-label for="phone_no" value="{{ __           ('phone_no') }}"/>
                                    <x-jet-input id="phone_no" class="block mt-1 w-full" type="text" placeholder="phone_no" wire:model.debounce.800ms="phone_no"/>
                                    @error('phone_no') <span class="error">{{$message}}</span>@enderror
                                </div>
                                
                            </div>

                        <div class="-mx-3 md:flex mb-2">
                                  <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <x-jet-label for="region" value="{{ __('Region') }}"/>
                                    <x-jet-input id="region" class="block mt-1 w-full" type="text" placeholder="region" wire:model.debounce.800ms="region"/>
                                    @error('region') <span class="error">{{$message}}</span>@enderror
                                </div>
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              
                                    <x-jet-label for="zone" value="{{ __ ('Zone') }}"/>
                                    <x-jet-input id="zone" class="block mt-1 w-full" type="text" placeholder="zone" wire:model.debounce.800ms="zone"/>
                                    @error('zone') <span class="error">{{$message}}</span>@enderror
                                </div>
                                  <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                
                                      <x-jet-label for="woreda" value="{{ __           ('woreda') }}"/>
                                      <x-jet-input id="woreda" class="block mt-1 w-full" type="text" placeholder="woreda" wire:model.debounce.800ms="woreda"/>
                                      @error('woreda') <span class="error">{{$message}}</span>@enderror
                                  </div>
                                
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                          <x-jet-label for="kebele" value="{{ __('kebele') }}"/>
                                          <x-jet-input id="kebele" class="block mt-1 w-full" type="text" placeholder="kebele" wire:model.debounce.800ms="kebele"/>
                                          @error('kebele') <span class="error">{{$message}}</span>@enderror
                                    </div>
                            
                        </div>
                              <div class="-mx-3 md:flex mb-2">
                                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                                      <x-jet-label for="sex" value="{{ __('sex') }}" />
                                                      <select wire:model.debounce.800ms="sex" class="block mt-1 w-full border-gray-300 focus:border" >
                                                      <option>Select</option>
                                                      <option value="male">Male</option>
                                                      <option value="female">Female</option>
                                                      
                                                      </select>
                                              </div>
                                              <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                                <x-jet-label for="date_of_birth" value="{{ __('date_of_birth') }}"/>
                                                <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date"  wire:model.debounce.800ms="date_of_birth"/>
                                                @error('date_of_birth') <span class="error">{{$message}}</span>@enderror
                                            </div>
                                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                          
                                                <x-jet-label for="profile_pic" value="{{ __           ('profile_pic') }}"/>
                                                <x-jet-input id="profile_pic" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" type="file"  wire:model.debounce.800ms="profile_pic"/>
                                                @error('profile_pic') <span class="error">{{$message}}</span>@enderror
                                            </div> 
                                </div>
                          <div class="-mx-3 md:flex mb-2">
                                      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <x-jet-label for="cityname" value="{{ __('cityname') }}"/>
                                            <x-jet-input id="cityname" class="block mt-1 w-full" type="text" placeholder="cityname" wire:model.debounce.800ms="cityname"/>
                                            @error('cityname') <span class="error">{{$message}}</span>@enderror
                                      </div>
                                      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                              <x-jet-label for="blood_group" value="{{ __('blood_group') }}" />
                                              <select wire:model.debounce.800ms="blood_group" class="block mt-1 w-full border-gray-300 focus:border" >
                                              <option>Select</option>
                                              <option value="A">A</option>
                                              <option value="B">B</option>
                                              <option value="AB">AB</option>
                                              <option value="O+">O+</option>
                                              <option value="O-">O-</option>
                                              <option value="B+">B+</option>
                                              </select>
                                      </div>
                                      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                              <x-jet-label for="blood_group" value="{{ __('blood_group') }}" />
                                              <select wire:model.debounce.800ms="blood_group" class="block mt-1 w-full border-gray-300 focus:border" >
                                              <option >Select</option>
                                              <option value="orthodox">Ortodox</option>
                                              <option value="muslim">Muslim</option>
                                              <option value="christian">Christian</option>
                                              <option value="budist">Budist</option>
                                            
                                              </select>
                                      </div>
                        </div>
                    </x-slot>

                    <x-slot name="footer">
                        @if($modelId)
                                <x-jet-danger-button class="bg-green-500" wire:click="update" wire:loading.attr="disabled">
                                    {{ __('Edit') }}
                                </x-jet-danger-button>
                                @else
                                <x-jet-danger-button class="bg-green-500" wire:click="create" wire:loading.attr="disabled">
                                    {{ __('create') }}
                                </x-jet-danger-button>
                            @endif


                            <x-jet-secondary-button class="ml-3" wire:click="$toggle('modelFormVisible')" wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                            </x-jet-secondary-button>
                    </x-slot>
        </x-jet-dialog-modal>                                  
        </div>
    </div>

