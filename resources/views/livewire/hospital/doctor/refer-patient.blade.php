<div class = "ml-2 pt-6 w-full"> 
                <div class="mt-4">
                    <x-jet-label for="date" value="{{ __('Refered Date') }}" />
                    <x-jet-input id="date" class="" type="date" wire:model.debounce.800ms="date" />
                    @error('date') <span class="error text-red-600">{{$message}}</span>@enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="Refere_to" value="{{ __('Refered To') }}" />
                    <select class="block mt-1 w-1/2 p-6  border-2 bg-gray-500  border-gray-500 " wire:model.debounce.800ms="refered_to" />
                    :value="old('refered_to')" required autofocus autocomplete="refered_to">
                        <option selected >---Select Hospital---</option>
                        @forelse ($hospitals as $hospital)
                            <option value= {{ $hospital->id }} > {{ $hospital->name }} </option>
                        @empty
                            <option disabled>---No Hospital to Refer to---</option>
                        @endforelse
                    </select>
                    @error('refered_to') <span class="error text-red-600">{{$message}}</span>@enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="diagnosis Result" value="{{ __('Diagnosis Result') }}" />
                    <x-jet-input id="diagnosis" class="block p-6 mt-1 w-1/2 bg-gray-500  border-2 border-gray-500 text-left text-xl font-semibold" type="text" name="diagnosis" wire:model.debounce.800ms="diagnosis" />
                    @error('diagnosis') <span class="error text-red-600">{{$message}}</span>@enderror
                </div>  
                <x-jet-secondary-button class="bg-black-500" wire:click="refer()" wire:loading.attr="disabled">
                    {{ __('Refer Patient') }}
                </x-jet-secondary-button>   
    </div> 
</div>
