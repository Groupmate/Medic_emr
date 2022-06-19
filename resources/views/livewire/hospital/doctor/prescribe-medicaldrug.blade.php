
<div class="mt-8 sm:mt-0 bg-white">
  
    <x-guest-layout>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <div class="bg-white shadow-md rounded px-8 pt-4 pb-8 mb-4 flex flex-col my-2">
                                <!-- @if (session()->has('message'))
                                    <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                                        <div class="flex">
                                            <div>
                                                <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif -->
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="drug_name">Drug_Name</label>
                                    <select name="block" id="drug_name"class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" wire:model.debounce.800ms="drug_name">
                                        <option value="">select drug</option>
                                        @foreach( $medical_drug as  $medical_drug)
                                        <option value="{{ $medical_drug->name}}">{{ $medical_drug->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('drug_name') <span class="error">{{$message}}</span>@enderror
                                </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="quantity" value="{{ __('quantity') }}"/>
                                        <x-jet-input id="quantity" class="block mt-1 w-full" type="number"  wire:model.debounce.800ms="quantity"/> 
                                        @error('quantity') <span class="error">{{$message}}</span>@enderror
                                    </div>
                    <div class="mb-4">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0"> 
                                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="descrpition" value="{{ __('Instruction') }}"/>
                                        <textarea id="ddescrpition" class="block mt-1 w-full" type="text" placeholder="instruction" wire:model.debounce.800ms="descrpition"/></textarea> 
                                        @error('descrpition') <span class="error">{{$message}}</span>@enderror
                                </div>
                            <div class="flex items-center justify-end mt-4"  >
                                <x-jet-button  class="hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="create" wire:loading.attr="disabled">
                                    submit
                                </x-jet-button>   
                            </div> 
                    </div>
            </div>
            <div class="bg-white shadow-md rounded px-8 pt-4 pb-8 mb-4 flex flex-col my-2">
                <table class="bg-white">
                    <thead>
                        <tr>
                            <th class="text-sm  font-medium px-6 py-4 whitespace-nowrap">
                            drug
                            </th>
                            <th class="text-sm  font-medium px-6 py-4 whitespace-nowrap">
                            quantity
                            </th>
                            <th class="text-sm  font-medium px-6 py-4 whitespace-nowrap">
                            instruction
                            </th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($prescribe as $prescribe)
                        <tr>
                            <td class="text-sm  font-medium px-6 py-4 whitespace-nowrap"  >
                            {{$prescribe->drug_name}}
                            </td>
                            <td class="text-sm  font-medium px-6 py-4 whitespace-nowrap"  >
                            {{$prescribe->quantity}}
                            </td>
                            <td class="text-sm  font-medium px-6 py-4 whitespace-nowrap"  >
                            {{$prescribe->descrpition}}
                            </td>
                                    
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
<<<<<<< Updated upstream
                </table>
                  <div class="flex items-center justify-end mt-4"  >
                        <button  class="bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="complete" wire:loading.attr="disabled">
                        complet
                        </button>   
                    </div>          
=======
                </table> 
                              <div class="flex items-center justify-end mt-4"  >
                                    <button class="bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="complete()" wire:loading.attr="disabled">
                                        complete
                                    </button>   
                                </div> 
>>>>>>> Stashed changes
            </div>
            
        </div>

    </x-guest-layout>
</div>
