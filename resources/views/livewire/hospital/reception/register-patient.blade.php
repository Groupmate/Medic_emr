
<div class="mt-10 sm:mt-0">
     
          <!-- component -->
      <div class="p-6">
          <x-guest-layout>
                      <x-slot name="logo">
                          <x-jet-authentication-card-logo />
                      </x-slot>

          
                  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                         <div><h2>patient registration</h2></div>
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
                            <div class="flex items-center justify-end mt-4">
                                  <x-jet-button class="ml-4" wire:click="create" >
                                      Submit
                                  </x-jet-button>
                              </div>
                                                                                  
                              <!-- <button type="submit" class="
                                  px-1
                                  py-4
                                  bg-blue-600
                                  text-white
                                  font-medium
                                  text-xs
                                  
                                  " wire:click="create">Submit</button> -->
                  </div>
          
          </x-guest-layout>
      </div>
</div>
@if (session()->has('message'))
    <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
        <div class="flex">
             <div>
                <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
            </div>
        </div>
    </div>
 @endif
 