<div class="mt-10 sm:mt-0">
     
     <!-- component -->
       
            <x-guest-layout>
            <x-jet-authentication-card>
                <x-slot name="logo">
                
                </x-slot>

                <x-jet-validation-errors class="mb-4" />

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
                 <div class="mt-4">
                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="name" value="{{ __('Block-Name') }}"/>
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="name" wire:model.debounce.800ms="name"/> 
                        @error('name') <span class="error">{{$message}}</span>@enderror
                    </div>
                    <div class="mt-4">
                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="no_room" value="{{ __('Numbers-OF-Room') }}"/>
                        <x-jet-input id="no_room" class="block mt-1 w-full" type="text" placeholder="no_room" wire:model.debounce.800ms="no_room"/> 
                        @error('no_room') <span class="error">{{$message}}</span>@enderror
                    </div>
                    <div class="flex items-center justify-end mt-4"  >
                        <x-jet-button  class="hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="create" wire:loading.attr="disabled">
                            save
                        </x-jet-button>   
                    </div> 
         </div>
            </x-jet-authentication-card>
        </x-guest-layout>

   
</div>
