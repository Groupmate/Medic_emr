<div class="p-6">
    <div class="bg-white dark:bg-gray-800  shadow px-8 md:px-12 pt-4 md:pt-7 pb-5 overflow-y-auto">
        <div>
          <h2 class="text-gray-600 font-semibold">List  Of beds</h2>
          <span class="text-xs">All beds</span>
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
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wide">Name bed</th>
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider"> Room number</th>
                        <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider"> status</th>
                        <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">action</th>
                    
                    </tr>
                </thead>
                <tbody>
                @foreach($beds as $beds)
                    @foreach($beds as $bed) 
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$bed->name}}</td>
                                <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$bed->room_id}}</td>
                                <td   class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{$bed->status}}</td>
                                <td  class="px-5 py-5">
                                    <x-jet-button wire:click="editShowModal({{ $bed->id }})">
                                        {{ __('Edit') }}
                                    </x-jet-button>
                                    <x-jet-danger-button wire:click="deleteShowModal({{ $bed->id }})" >
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
</div>