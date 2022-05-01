
<div class="mt-10 sm:mt-0">
     
          <!-- component -->
 <div class="p-6">
 <x-guest-layout>
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
  <div><h2 class="text-gray-800 font-semibold">Patient Full Information</h2><br></div>
      <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="firstname">
                First Name
              </label>
              <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="firstname" type="text" placeholder="Name" wire:model.debounce.800ms="firstname">
            </div>
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="lastname">
                Last Name
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="lastname" type="text" placeholder="Last Name" wire:model.debounce.800ms="lastname">
            </div>
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="middelname">
                Middle Name
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="middelname" type="text" placeholder="Middle Name" wire:model.debounce.800ms="middlename">
            </div>  
          </div>
    <div class="-mx-3 md:flex mb-6">
    
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="patient_id">
          National Id
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="patient_id" type="text" placeholder="Identification Number" wire:model.debounce.800ms="patient_id">
     
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
         Email
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="email" type="email" placeholder="Email" wire:model.debounce.800ms="email">
      </div>
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="phone_no">
          Phone Number
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="phone_no" type="text" placeholder="phone number" wire:model.debounce.800ms="phone_no">
      </div>
    </div>
   
      <div class="-mx-3 md:flex mb-2">
       
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="region">
            Region
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="region" type="text" placeholder="Region" wire:model.debounce.800ms="region">
        </div>
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="zone">
             Zone
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="zone" type="text" placeholder="zone" wire:model.debounce.800ms="zone">
        </div>  
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="wereda">
            Woreda
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="wereda" type="text" placeholder="woreda" wire:model.debounce.800ms="wereda">
        </div>  
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="kebele">
            Kebele
            </label>
           <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="kebele" type="text" placeholder="kebele" wire:model.debounce.800ms="kebele">
        </div>  
      </div>

    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="date_of_birth">
         Date Of Birth
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="date_of_birth" type="date" placeholder="date_of_birth" wire:model.debounce.800ms="date_of_birth">
      
      
    </div>
    
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="profile_pic">
            profile_pic
            </label>
           <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="profile_pic" type="file" wire:model.debounce.800ms="profile_pic">
        </div> 
     
    </div>
    <div class="-mx-3 md:flex mb-2">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="cityname">
          City Name
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="cityname" type="text" placeholder="city_name" wire:model.debounce.800ms="cityname">
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="blood_group">
         Blood Group
        </label>
        <div class="relative">
          <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="blood_group" wire:model.debounce.800ms="blood_group">
            <option>Select</option>
            <option>A</option>
            <option>B</option>
            <option>AB</option>
            <option>O+</option>
            <option>O-</option>
            <option>B+</option>
          </select>
         
        </div>
       
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="religion">
            Religion
            </label>
            <div class="relative">
              <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="religion" wire:model.debounce.800ms="religion">
                <option>Select</option>
                <option>Ortodox</option>
                <option>Muslim</option>
                <option>Christian</option>
                <option>Budist</option>
                
              </select>
          </div>     
        </div>
      </div>
      <div>
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
       
            <x-jet-label for="wereda" value="{{ __           ('wereda') }}"/>
            <x-jet-input id="wereda" class="block mt-1 w-full" type="text" placeholder="wereda" wire:model.debounce.800ms="wereda"/>
            @error('wereda') <span class="error">{{$message}}</span>@enderror
        </div>
        
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-jet-label for="kebele" value="{{ __('kebele') }}"/>
            <x-jet-input id="kebele" class="block mt-1 w-full" type="text" placeholder="kebele" wire:model.debounce.800ms="kebele"/>
            @error('kebele') <span class="error">{{$message}}</span>@enderror
       </div>
    
</div>
<div class="-mx-3 md:flex mb-2">
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
                  <option>Select</option>
                <option>Ortodox</option>
                <option>Muslim</option>
                <option>Christian</option>
                <option>Budist</option>
                
                  </select>
           </div>
  </div>
      <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4"  wire::click="create" wire:loading.attr="disabled" >
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