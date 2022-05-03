
 <div class="p-6">
                    <div class=" max-w-sm mx-auto m-6 p-5 rounded-lg">
                                    <p class="text-sm text-grey-700"><h1><strong>create service time</strong></h1> </p><br>
                                    
                                
                                            <x-guest-layout>
                                                <x-slot name="logo">
                                                    <x-jet-authentication-card-logo />
                                                </x-slot>


                                                <div class="mb-6">
                                                    <x-jet-label for="name" value="{{ __('Name-Shift') }}"/>
                                                    <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="name"/>
                                                    @error('name') <span class="error">{{$message}}</span>@enderror
                                                </div>

                                                <div class="mt-4">
                                                    <x-jet-label for="duration" value="{{ __           ('Duration-time') }}"/>
                                                    <x-jet-input id="duration" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="duration"/>
                                                    @error('last_name') <span class="error">{{$message}}</span>@enderror
                                                </div>



                                                <div class="flex items-center justify-end mt-4">
                                                    <x-jet-button class="ml-4"  wire:click="create" wire:loading.attr="disabled">
                                                        save
                                                    </x-jet-button>
                                                </div>
                                            </x-guest-layout>
                                            @if (session()->has('message'))
                                            <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                                                <div class="flex">
                                                    <div>
                                                        <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                </div>


<div>