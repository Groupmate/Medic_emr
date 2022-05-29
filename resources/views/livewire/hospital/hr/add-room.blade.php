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
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="department" value="{{ __('Department') }}"/>
                              <x-jet-input id="department" class="block mt-1 w-full" type="text" placeholder="department" wire:model.debounce.800ms="department"/> 
                              @error('department') <span class="error">{{$message}}</span>@enderror
                          </div>
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="totalcap" value="{{ __('Total-capacity') }}"/>
                              <x-jet-input id="totalcap" class="block mt-1 w-full" type="text" placeholder="totalcap" wire:model.debounce.800ms="totalcap"/> 
                              @error('totalcap') <span class="error">{{$message}}</span>@enderror
                          </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="room_no" value="{{ __('Room-Number') }}"/>
                              <x-jet-input id="room_no" class="block mt-1 w-full" type="text" placeholder="room_no" wire:model.debounce.800ms="room_no"/> 
                              @error('room_no') <span class="error">{{$message}}</span>@enderror
                          </div>
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="type" value="{{ __('Type') }}"/>
                              <x-jet-input id="type" class="block mt-1 w-full" type="text" placeholder="type" wire:model.debounce.800ms="type"/> 
                              @error('type') <span class="error">{{$message}}</span>@enderror
                          </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                          <div class="md:w-1/2 px-3 mb-8 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="block_id" value="{{ __('Block Name') }}"/>             
                              <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="block_id" wire:model.debounce.80ms="block_id">
                                  <option>select block name</option>
                                  @foreach($dname as $row)
                                      <option value="{{$row->id}}"  class="block mt-1 w-full" type="text"  >{{$row->name}} </option>
                                  @endforeach
                              </select>
                              @error('block_id') <span class="error">{{$message}}</span>@enderror
                          </div>
                          <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="cost" value="{{ __('Cost') }}"/>
                              <x-jet-input id="cost" class="block mt-1 w-full" type="text" placeholder="cost" wire:model.debounce.800ms="cost"/> 
                              @error('cost') <span class="error">{{$message}}</span>@enderror
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
