
<div class="mt-10 sm:mt-0">
    <x-guest-layout>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
         <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4 text-center">+Bed assignment for patient Patients </h1>
                      <form >
                        <input  type="search"  placeholder="Search patient name" class="shadow apperance none bounded  rounded bg-transparent focus:outline-none text-xs" wire:model="search" />  
                        </form>
                <div class="-mx-3 md:flex mb-2">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="patient">patient</label>
                    <select name="patient" id="patient"class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" wire:model="patient_id">
                        <option value="">select patient</option>
                        @foreach($patients as $patient)
                        <option value ="{{$patient->id}}">{{$patient->firstname}}{{$patient->lastname}}</option>
                        @endforeach
                    </select>
                    </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="block">block</label>
                    <select name="block" id="block"class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" wire:model="selectedBlock">
                        <option value="">select block</option>
                        @foreach($blocks as $block)
                        <option value="{{$block->id}}">{{$block->name}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
             <div class="-mx-3 md:flex mb-2">
                @if(!is_null($selectedBlock))
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="room">room</label>
                                <select name="room" id="room" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border right-0" wire:model="selectedRoom">
                                    <option value="">select room</option>
                                    @foreach($rooms as $room)
                                    <option value="{{$room->id}}">{{$room->room_no}}</option>
                                    @endforeach
                                </select>
                        </div>
                @endif
                @if(!is_null($selectedRoom))
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="bed">bed</label>
                                <select name="bed" id="bed" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" wire:model="selectedBed">
                                    <option value="">select bed</option>
                                    @foreach($beds as $bed)
                                    <option value="{{$bed->id}}">{{$bed->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                @endif
          </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">                                 
                    <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="allotment_time" value="{{ __('Allotment_Time') }}"/>
                    <x-jet-input id="allotment_time" name="allotment_time" class="block mt-1 w-full" type="date" placeholder="allotment_time" wire:model.debounce.800ms="allotment_time"/> 
                    @error('allotment_time') <span class="error">{{$message}}</span>@enderror
                </div>
                <div class="flex items-center justify-end mt-4"  >
                            <x-jet-button  class="hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="create" wire:loading.attr="disabled">
                                Assignbed
                            </x-jet-button>   
                        </div> 
        </div>
    </x-guest-layout>
</div>
     
     <!-- component -->
       
    

