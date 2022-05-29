<div class="p-6">
    <div class="bg-white dark:bg-gray-800  shadow px-8 md:px-12 pt-4 md:pt-7 pb-5 overflow-y-auto">
        <div>
          <h2 class="text-gray-600 font-semibold">List  Of Blocks</h2>
          <span class="text-xs">All blocks</span>
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
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wide">Name Block</th>
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Number of Room/Block</th>
                        <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">action</th>
                    
                    </tr>
                </thead>
                <tbody>
                @foreach($blocks as $block)
                 <tr>
                 <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$block->name}}</td>
                 <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$block->no_room}}</td>
                 <td  class="px-5 py-5">
                      <x-jet-button wire:click="editShowModal({{ $block->id }})">
                            {{ __('Edit') }}
                        </x-jet-button>
                        <x-jet-danger-button wire:click="deleteShowModal({{ $block->id }})" >
                            {{ __('Delete') }}
                        </x-jet-button>
                 </td>
               
                 </tr>
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
<!-- Edit modal -->
    <x-jet-dialog-modal wire:model="modalEditFormVisible">

        <x-slot name="title">
            {{ __('Edit block') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">
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
                        
                </div>
        </x-slot>

        <x-slot name="footer">
            @if($modelId)
                    <x-jet-danger-button class="bg-green-500" wire:click="update" wire:loading.attr="disabled">
                        {{ __('Edit') }}
                    </x-jet-danger-button>
                    @else
                    <x-jet-danger-button class="bg-green-500" wire:click="create" wire:loading.attr="disabled">
                        {{ __('create') }}
                    </x-jet-danger-button>
                @endif


                <x-jet-secondary-button class="ml-3" wire:click="$toggle('modalEditFormVisible')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>