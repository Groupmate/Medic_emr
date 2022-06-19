
<div class="mt-8 sm:mt-0 bg-white">
     <!-- component -->   
     <!-- <div class="flex items-center justify-start px-4 py-3 text-right sm:px-6">
        <x-jet-button wire:click="createShowModal">
                {{ __('prescribe drug') }}
         </x-jet-button>
    </div>
    <x-jet-dialog-modal wire:model="modelFormVisible">
        <x-slot name="title">
            {{ __('prescribe drug') }} {{$patient_id}}
        </x-slot>
        <x-slot name="content">
         <div class="bg-white shadow-md rounded px-8 pt-4 pb-8 mb-4 flex flex-col my-2">
                                <!-- @if (session()->has('message')) -->
                                    <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                                        <div class="flex">
                                            <div>
                                                <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif -->
                                    <!-- <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="drug_name" value="{{ __('Drug_Name') }}"/>
                                        <x-jet-input id="drug_name" class="block mt-1 w-full" type="text"  wire:model.debounce.800ms="drug_name"/> 
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
        </x-slot>
        <x-slot name="footer">
        </x-slot>
    </x-jet-dialog-modal>  -->
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
                                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="drug_name" value="{{ __('Drug_Name') }}"/>
                                        <x-jet-input id="drug_name" class="block mt-1 w-full" type="text"  wire:model.debounce.800ms="drug_name"/> 
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
                </table>
                  <div class="flex items-center justify-end mt-4"  >
                        <button  class="bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="complete" wire:loading.attr="disabled">
                        complet
                        </button>   
                    </div>          
            </div>
        </div>

    </x-guest-layout>
</div>
