
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
                   
                   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="ward" value="{{ __('Department') }}"/>
                              <x-jet-input id="ward" class="block mt-1 w-full" type="text" placeholder="ward" wire:model.debounce.800ms="ward"/> 
                              @error('ward') <span class="error">{{$message}}</span>@enderror
                          </div>
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="admission_charge" value="{{ __('Admission_Charge') }}"/>
                              <x-jet-input id="admission_charge" class="block mt-1 w-full" type="text" placeholder="admission_charge" wire:model.debounce.800ms="admission_charge"/> 
                              @error('admission_charge') <span class="error">{{$message}}</span>@enderror
                          </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="date_in" value="{{ __('Date-out') }}"/>
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
                          <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="status" value="{{ __('Status') }}"/>
                                                <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="status" wire:model.debounce.800ms="status">
                                                              <option value="recover">recover</option>
                                                              <option value="died">died</option>
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
