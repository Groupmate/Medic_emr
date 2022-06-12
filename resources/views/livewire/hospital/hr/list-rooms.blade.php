<div class="p-6">
    <div class="bg-white dark:bg-gray-800  shadow px-8 md:px-12 pt-4 md:pt-7 pb-5 overflow-y-auto">
        <div>
          <h2 class="text-gray-600 font-semibold">List  Of rooms</h2>
          <span class="text-xs">All rooms</span>
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
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wide">Name room</th>
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Department</th>
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Cost</th>
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Totalcapacity</th>
                        <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">action</th>
                    
                    </tr>
                </thead>
                <tbody>
          
             @foreach($rooms as $room)
                @foreach($room as $room)
                    <tr>
                  <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{  $room->room_no }}</td>
                    <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$room->department}}</td>
                    <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$room->cost}}</td>
                    <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$room->totalcap}}</td>
                    <td  class="px-5 py-5">
                        <x-jet-button wire:click="editShowModal({{ $room->id }})">
                                {{ __('Edit') }}
                            </x-jet-button>
                            <x-jet-danger-button wire:click="deleteShowModal({{ $room->id }})" >
                                {{ __('Delete') }}
                            </x-jet-button>
                    </td>
                
                    </tr>
                @endforeach    
            @endforeach
             
                </tbody>
           </table>
         </div>
    </div>
     <!-- delete modal -->
        <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">

            <x-slot name="title">
                {{ __('Delete Account') }} {{$modelId}}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete your block ? Once your block is deleted, all of its resources and data will be permanently deleted. ') }}


            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>
                
                <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                    {{ __('Delete ') }}
                </x-jet-danger-button>
            </x-slot>
    </x-jet-dialog-modal> 
</div>