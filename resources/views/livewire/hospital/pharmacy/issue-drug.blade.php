<div class="mt-10 sm:mt-0">
          <form >
            <input  type="text"  placeholder="Search patient " class="shadow apperance none bounded  rounded bg-transparent focus:outline-none text-xs" wire:model="search" /> 
            </form>        
          <table class="table-auto w-3/4 whitespace-nowrap">
            <thead class="text-purple-500 p-4">
                <tr>
                    <th  class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wide">patient name</th>
                    <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">prescribed drug</th>
                    <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Quantity</th>
                    <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Action</th> 
                </tr>
            </thead>
            <tbody>
              @forelse($prescribed as $prescribed)
                <tr class="border-b">
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$prescribed->patient_id}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$prescribed->drug_name}}
                  </td> 
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$prescribed->quantity}}
                    </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <x-jet-button wire:click="createShowModal({{$prescribed->id}})">
                                {{ __('take') }}
                            </x-jet-button>
                  </td> 
                    @empty
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                     no patient wating
                  </td>
                </tr>
              @endforelse
              
                    
            </tbody> 
        </table>               
</div> 



