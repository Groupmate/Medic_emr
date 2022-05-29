<!-- <div class="py-10 px-5 bg-gray-200 transition duration-150 ease-in-out z-10 " >
        <div  class="container mx-auto w-11/12 ">
            <div class="relative py-10 px-12 md:px-10 bg-white shadow-md rounded border border-gray-400    ">
                <div class="w-full flex justify-start text-gray-600 mb-3"> 
                    <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="52" height="52" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                    </svg>
                </div> -->
               
             
                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">create appointment for patients </h1>
                <x-guest-layout>
                       <div class="mb-6">
                            <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="firstname" value="{{ __('Patient Name') }}"/>
                              <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border">
                              <option>select patient</option>
                                @foreach($pname as $row)
                                    <option id="firstname" class="block mt-1 w-full" type="text" wire:model.debounce.80ms="firstname"  value="{{$row->id}}">{{$row->firstname}}</option>
                                
                                @endforeach
                                </select>
                            @error('firstname') <span class="error">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-6">
                            <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="name" value="{{ __('Doctor Name') }}"/>
                                
                              <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border">
                                 <option>select doctor</option>
                                @foreach($dname as $row)
                                    <option id="name" class="block mt-1 w-full" type="text" wire:model.debounce.80ms="name" value="{{$row->id}}">{{$row->name}} {{$row->lastname}}</option>
                                
                                @endforeach
                            </select>
                            @error('name') <span class="error">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-6">
                            <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="status" value="{{ __('Status') }}"/>
                              <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border">
                                            <option value="confirmed">confirmed</option>
                                            <option value="pending">pending</option>
                                            <option value="cancelled">cancelled</option>
                            </select>
                            @error('status') <span class="error">{{$message}}</span>@enderror
                        </div>
                       <div class="mb-6">
                            <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="issue_date" value="{{ __('Issue-Date') }}"/>
                            <x-jet-input id="issue_date" name="issue_date" class="block mt-1 w-full" type="date" placeholder="issue_date" wire:model.debounce.800ms="issue_date"/> 
                            @error('issue_date') <span class="error">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-6">
                            <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="visit_date" value="{{ __('Visit_date') }}"/>
                            <x-jet-input id="visit_date" class="block mt-1 w-full" type="date" placeholder="visit_date" wire:model.debounce.800ms="visit_date"/> 
                            @error('visit_date') <span class="error">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-6">
                            <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="description" value="{{ __('Description') }}"/>
                            <x-jet-input id="description" class="block mt-1 w-full" type="text" placeholder="description" wire:model.debounce.800ms="description"/> 
                            @error('description') <span class="error">{{$message}}</span>@enderror
                        </div>
                        <div class="flex items-center justify-end mt-4"  >
                            <x-jet-button  class="hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="create" wire:loading.attr="disabled">
                                save
                            </x-jet-button>   
                        </div>
                    </x-guest-layout>