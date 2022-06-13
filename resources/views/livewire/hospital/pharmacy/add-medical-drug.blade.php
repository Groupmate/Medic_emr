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
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="name" value="{{ __('Drug-Name') }}"/>
                              <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="name" wire:model.debounce.800ms="name"/> 
                              @error('name') <span class="error">{{$message}}</span>@enderror
                          </div>
                           <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="type" value="{{ __('Type') }}"/>
                              <x-jet-input id="type" class="block mt-1 w-full" type="text" placeholder="type" wire:model.debounce.800ms="type"/> 
                              @error('type') <span class="error">{{$message}}</span>@enderror
                          </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                           <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="department" value="{{ __('Department') }}"/>
                              <x-jet-input id="department" class="block mt-1 w-full" type="text" placeholder="department" wire:model.debounce.800ms="department"/> 
                              @error('department') <span class="error">{{$message}}</span>@enderror
                          </div>
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="expired_date" value="{{ __('Expired_Date') }}"/>
                              <x-jet-input id="expired_date" class="block mt-1 w-full" type="date" placeholder="expired_date" wire:model.debounce.800ms="expired_date"/> 
                              @error('expired_date') <span class="error">{{$message}}</span>@enderror
                          </div>
                  </div>
              
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                           <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="quantity" value="{{ __('Quantity') }}"/>
                              <x-jet-input id="quantity" class="block mt-1 w-full" type="number" placeholder="quantity" wire:model.debounce.800ms="quantity"/> 
                              @error('quantity') <span class="error">{{$message}}</span>@enderror
                          </div>
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="photo" value="{{ __('photo') }}"/>
                              <x-jet-input id="photo" class="block mt-1 w-full"  type="file" placeholder="photo" wire:model.debounce.800ms="photo"/> 
                              @error('photo') <span class="error">{{$message}}</span>@enderror
                          </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                           <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="price" value="{{ __('Price') }}"/>
                              <x-jet-input id="price" class="block mt-1 w-full" type="number" placeholder="price" wire:model.debounce.800ms="price"/> 
                              @error('price') <span class="error">{{$message}}</span>@enderror
                          </div>
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="description" value="{{ __('Descrption') }}"/>
                              <x-jet-input id="description" class="block mt-1 w-full" type="text" placeholder="description" wire:model.debounce.800ms="description"/> 
                              @error('description') <span class="error">{{$message}}</span>@enderror
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
