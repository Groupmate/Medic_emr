
<div class="w-full  mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> 
      <div class=" ml-10 py-12">
            <div class=" mx-auto sm:px-6 lg:px-8">
   <h1 class="text-black-900 font-lg font-bold tracking-normal leading-tight mb-2 text-center mr-10">+Referal For Patients </h1>
                <div class="mt-4">
                    <x-jet-label class="mb-1 subpixel-antialiased text-lg text-gray-900" for="date" value="{{ __('Refered Date') }}" />
                    <x-jet-input id="date" class="block mt-1 w-3/4 p-4  border-1 alert alert-light" type="date" wire:model.debounce.800ms="date" />
                    @error('date') <span class="error text-red-600">{{$message}}</span>@enderror
                </div>
                <div class="mt-4">
                    <x-jet-label class="mb-1 subpixel-antialiased text-lg text-gray-900" for="Refere_to" value="{{ __('Refered To') }}" />
                    <select class="block mt-1 w-3/4 p-4  border-2  border-1 alert alert-light " wire:model.debounce.800ms="refered_to" />
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
                    <x-jet-label class="mb-1 subpixel-antialiased text-lg text-gray-900" for="diagnosis Result" value="{{ __('Diagnosis Result') }}" />
                    <x-jet-input id="diagnosis" class="block p-6 mt-1 w-3/4   border-1 alert alert-light semibold" type="text" name="diagnosis" wire:model.debounce.800ms="diagnosis" />
                    @error('diagnosis') <span class="error text-red-600">{{$message}}</span>@enderror
                </div>
                <div class="flex justify-between items-center pt-4">  
                <button class="btn-bs-dark " wire:click="refer()" wire:loading.attr="disabled">
                    {{ __('Refer Patient') }}
                </button>     
              
               </div>
        </div> 
    </div>
</div> 

