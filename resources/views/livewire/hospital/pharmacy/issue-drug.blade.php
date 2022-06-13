<div class="mt-10 sm:mt-0">
    
 <div>
    <!-- <input  type="text"  placeholder="Search patient " class="shadow apperance none bounded  rounded bg-transparent focus:outline-none text-xs" wire:model="search" /> 
    
    <x-jet-button class="btn btn-sm btn-secondary" wire:click="search">+search< </x-jet-button> -->
    <x-guest-layout>
    

                    <div class="mb-4">
                   
                        
                           <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                              <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="type" value="{{ __('Type') }}"/>
                              <x-jet-input id="type" class="block mt-1 w-full" type="text" placeholder="type" wire:model.debounce.800ms="type"/> 
                              @error('type') <span class="error">{{$message}}</span>@enderror
                          </div>
                  </div> 
              
                  
                  
                      <div class="flex items-center justify-end mt-4"  >
                          <x-jet-button  class="hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="search" wire:loading.attr="disabled">
                              save
                          </x-jet-button>   
                      </div>    
                      <table class="table-auto w-3/4 whitespace-nowrap ">
    <thead class="text-purple-500 p-4">
        <tr >
            <th  class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wide">patient name</th>
            <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">prescribed drug</th>
            <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Quantity</th>
            <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Action</th>
        
        </tr>
    </thead>
    <tbody>
   
      <tr class="border-b">
     
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        
          </td>
       
        </tr>
     </tbody>
</table>          
    </x-guest-layout>            
    <ul>
      
    </ul>
 </div>
  


</div> 



