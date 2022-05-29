<div class="p-6">
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
                                        
                                        <img class="w-full h-full rounded-full" src="{{asset('storage/'.$patient['profil_pic'])}}"/>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm whitespace-no-wrap"> {{$patient->firstname}}{{$patient->lastname}}</p>
                                   
                                </div>
                            </td>
                            <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$patient->patient_id}}</td>
                            <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$patient->phone_no}}</td>
                            <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$patient->email}}</td>
                            <td   class="px-5 py-5">
                                <div class="flex items-center space-x-8 text-sm">
                                      <x-jet-button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5  rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  wire:click="updateShowModal({{ $patient->id }})">
                                        <svg
                                          class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg> {{ __('Edit') }}
                                      </x-jet-button>
                                       <x-jet-button wire:click="createShowModal({{ $patient->id }})">
                                        {{ __('Assign') }}
                                        </x-jet-button> 
                                 </div> 
                           </td>
                    
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if(count($patients))
                {{$patients}}
                @endif
        </div>    
<x-jet-dialog-modal wire:model="modalEditFormVisible">

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
              
                    <x-jet-label for="lastname" value="{{ __           ('Last name') }}"/>
                    <x-jet-input id="lastname" class="block mt-1 w-full" type="text" placeholder="Last_Name" wire:model.debounce.800ms="lastname"/>
                    @error('last_name') <span class="error">{{$message}}</span>@enderror
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
              
                    <x-jet-label for="middelname" value="{{ __           ('middel name') }}"/>
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
                            <x-jet-label for="data_of_birth" value="{{ __('date_of_birth') }}"/>
                            <x-jet-input id="data_of_birth" class="block mt-1 w-full" type="date"  wire:model.debounce.800ms="data_of_birth"/>
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


        <x-jet-secondary-button class="ml-3" wire:click="$toggle('modalEditFormVisible')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-jet-secondary-button>
</x-slot>
</x-jet-dialog-modal>  
    
        <!-- new from sere                                 -->
        <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Assign Patient') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
