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
                            
                                
                            <div class="mb-4">
                                <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="name" value="{{ __('Name') }}"/>
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="name" wire:model.debounce.800ms="name"/> 
                                @error('name') <span class="error">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-4">
                               <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="room_id" value="{{ __('Room-number') }}"/>             
                                <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="room_id" wire:model.debounce.80ms="room_id">
                                    <option>select room number</option>
                                    @foreach($dname as $row)
                                        <option value="{{$row->id}}"  class="block mt-1 w-full" type="text"  >{{$row->room_no}} </option>
                                    @endforeach
                                </select>
                                @error('room_id') <span class="error">{{$message}}</span>@enderror
                            </div>
                    
                    
                            <div class="mb-4">
                                    <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="status" value="{{ __('Status') }}"/>
                                    <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="status" wire:model.debounce.800ms="status">
                                               <option >select status</option>
                                                <option value="free">free</option>
                                                <option value="busy">busy</option>
                                </select>
                                @error('status') <span class="error">{{$message}}</span>@enderror
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
