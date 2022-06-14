
<div class="mt-10 sm:mt-0">
     
     <!-- component -->       
    <x-guest-layout>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
            @if (session()->has('message'))
                <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
    

        <div class="mb-4">
            <form >
                <input  type="search"  placeholder="Search patient name" class="shadow apperance none bounded  rounded bg-transparent focus:outline-none text-xs" wire:model="search" />  
            </form>                                
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="patient">patient</label>
                    <select name="patient" id="patient"class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" wire:model="patient_id">
                        <option >select patient</option>
                        @foreach($receptionists as $receptionist)
                            @foreach($blocks as $block)
                                @foreach($bedpatientID as $bedpatientId)                                    
                                     @foreach($patientID as $patientId)
                                        @if($receptionist->hospital_id == $block->hospital_id && $block->id == $bedpatientId->block_id && $patientId->id == $bedpatientId->patient_id)
                                            <option value ="{{$patientId->id}}">{{$patientId->firstname}} {{$patientId->middle_name}}</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="admission_charge" value="{{ __('Admission_Charge') }}"/>
                    <x-jet-input id="admission_charge" class="block mt-1 w-full" type="Number" placeholder="Enter service price" wire:model.debounce.800ms="admission_charge"/> 
                    @error('admission_charge') <span class="error">{{$message}}</span>@enderror
                </div>
            </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="date_in" value="{{ __('Date-In') }}"/>
                        <x-jet-input id="date_in" class="block mt-1 w-full" type="date" placeholder="date_in" wire:model.debounce.800ms="date_in"/> 
                        @error('date_in') <span class="error">{{$message}}</span>@enderror
                    </div>
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="date_out" value="{{ __('Date-out') }}"/>
                        <x-jet-input id="date_out" class="block mt-1 w-full" type="date" placeholder="date_out" wire:model.debounce.800ms="date_out"/> 
                        @error('date_out') <span class="error">{{$message}}</span>@enderror
                    </div>
                </div>
              
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                             
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="ward" value="{{ __('Department') }}"/>
                        <x-jet-input id="ward" class="block mt-1 w-full" type="text" placeholder="Enter patient ward" wire:model.debounce.800ms="ward"/> 
                        @error('ward') <span class="error">{{$message}}</span>@enderror
                    </div>
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="status" value="{{ __('Status') }}"/>
                        <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="status" wire:model.debounce.800ms="status">
                            <option value="recover">Recover</option>
                            <option value="died">Died</option>
                            <option value = "escaped">Escaped</option>
                        </select>
                        @error('status') <span class="error">{{$message}}</span>@enderror
                    </div>                         
                </div>                                           
                <div class="flex items-center justify-end mt-4"  >
                    <x-jet-button  class="hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="create" wire:loading.attr="disabled">
                        save
                    </x-jet-button>   
                </div> 
              </div>
        </div>           
    </x-guest-layout>   
</div>
