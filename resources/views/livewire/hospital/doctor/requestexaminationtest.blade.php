<div>
    <form wire:submit.prevent="request" class="w-full py-4 px-8">
        <div class="card w-full">
            <div class="card-header">
                <div class="flex justify-center">
                    <strong> Laboratory Form </strong>
                </div>
            </div>
            <div class="card-body">
                <div class="flex justify-center py-5"> 
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                      type="checkbox" wire:model.debounce.800ms="test" value="blood">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">Blood</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                      type="checkbox" wire:model.debounce.800ms="test" value="urine">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox2">urine</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" 
                      type="checkbox" wire:model.debounce.800ms="test" value="sugar level">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">sugar level</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" 
                      type="checkbox" wire:model.debounce.800ms="test" value="sugar level">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">sugar level</label>
                    </div>
                </div>
                <div class="flex justify-right py-5"><strong> Imagery </strong></div>
                <div class="flex justify-center py-2">
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                      type="checkbox" wire:model.debounce.800ms="test" value="blood_count">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">Radiology</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                      type="checkbox" wire:model.debounce.800ms="test" value="blood_enzyme_test">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox2">City Scan</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" 
                      type="checkbox" wire:model.debounce.800ms="test" value="blood_thyroid_panel">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">Endoscopy</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" 
                      type="checkbox" wire:model.debounce.800ms="test" value="blood_lipid_profile">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">X-ray</label>
                    </div>
                </div>
                <div class="flex justify-right py-5"><strong> Blood Tests </strong></div>
                <div class="flex justify-center py-2">
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                      type="checkbox" wire:model.debounce.800ms="test" value="blood_count">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">Blood count</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                      type="checkbox" wire:model.debounce.800ms="test" value="blood_enzyme_test">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox2">Blood enzyme test</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" 
                      type="checkbox" wire:model.debounce.800ms="test" value="blood_thyroid_panel">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">Blood thyroid_panel</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" 
                      type="checkbox" wire:model.debounce.800ms="test" value="blood_lipid_profile">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">Blood lipid profile</label>
                    </div>
                </div>
                
                <div class="flex justify-center py-5">
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                      type="checkbox" wire:model.debounce.800ms="test" value="blood">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">Blood</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                      type="checkbox" wire:model.debounce.800ms="test" value="urine">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox2">urine</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" 
                      type="checkbox" wire:model.debounce.800ms="test" value="sugar level">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">sugar level</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" 
                      type="checkbox" wire:model.debounce.800ms="test" value="sugar level">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">sugar level</label>
                    </div>
                </div>
            </div> 
            <div class="card-footer">
                <button class="flex items-center justify-end mt-4" type="submit">
                    <x-jet-button class="ml-4">
                        Submit
                    </x-jet-button>
                </button>
            </div>
        </div>
        


    </form>
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
