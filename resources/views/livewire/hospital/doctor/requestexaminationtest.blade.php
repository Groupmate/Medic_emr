<div>
    <div class="flex justify-center items-center mt-4 w-full bg-grey-400"> 
        <div class="mt-4">
            <label class="mb-1 subpixel-antialiased text-lg text-gray-900">Description</label><br> 
            <textarea id="description" class="alert mb-4 border-1 ml-2 w-5/6 block" cols="20" wire:model.debounce.800ms="description" :value="old('description')" required> </textarea>
            @error('description') <span class="error">{{$description}}</span>@enderror
        </div>
        <div class="flex items-center justify-end mt-4"  >
            <x-jet-button  class="hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="request" wire:loading.attr="disabled">
                Request test
            </x-jet-button>   
        </div> 
    </div>  
    <x-jet-dialog-modal wire:model="modalFormVisible">

        <x-slot name="title">
            {{ __('Assign Patient') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-jet-label for="doctor" value="{{ __('Doctor') }}" />
                <select class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="user_id">
                    <option diabled>---Select Labratorian---</option>
                    @foreach ($users as $users)
                        <option value="{{ $users['id'] }}">{{ $users['firstname'] }}</option>
                    @endforeach
                </select>
                @error('user_id') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button class="bg-green-500" wire:click="create" wire:loading.attr="disabled">
                {{ __('create') }}
            </x-jet-secondary-button>
            <x-jet-secondary-button class="ml-3" wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
