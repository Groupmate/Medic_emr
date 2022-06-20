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
                  <form class="p-10 bg-white rounded shadow-xl">
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      type="checkbox" wire:model.defer="test" value="blood" id="test1" @if (in_array('blood',$test))
                        checked
                      @endif>
                      <label class="form-check-label inline-block text-gray-800" for="test1" >Blood</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="urine" id="test2"  @if (in_array('urine',$test))
                      checked
                    @endif>
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox2" >urine</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="sugar_level" id="test3"  @if (in_array('sugar_level',$test))
                      checked
                    @endif>
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">sugar level</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="sugar level" id="test4"  @if (in_array('sugar level',$test))
                      checked
                    @endif>
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox4">sugar level</label>
                    </div>
                </div>
                <div class="flex justify-right py-5"><strong> Imagery </strong></div>
                <div class="flex justify-center py-2">
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      type="checkbox" wire:model.defer="test" value="blood_count" id="test5"  @if (in_array('blood_count',$test))
                      checked
                    @endif>
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">Blood count</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="blood_enzyme_test" id="test6"  @if (in_array('blood_enzyme_test',$test))
                      checked
                    @endif>
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox2">blood_enzyme_test</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="blood_thyroid_panel" id="test7"  @if (in_array('blood_thyroid_panel',$test))
                      checked
                    @endif>
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">Endoscopy</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="blood_lipid_profile" id="test8"  @if (in_array('blood_lipid_profile',$test))
                      checked
                    @endif>
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">X-ray</label>
                    </div>
                </div>
                {{-- <div class="flex justify-right py-5"><strong> Blood Tests </strong></div>
                <div class="flex justify-center py-2">
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      type="checkbox" wire:model.defer="test" value="blood_count" id="test9">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">Blood count</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="blood_enzyme_test" id="test10">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox2">Blood enzyme test</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="blood_thyroid_panel" id="test11">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">Blood thyroid_panel</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="blood_lipid_profile" id="test12">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">Blood lipid profile</label>
                    </div>
                </div> --}}
                
                <div class="flex justify-center py-5">
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      type="checkbox" wire:model.defer="test" value="blood_1" id="test13">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox1">Blood</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="urine_1" id="test14">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox2">urine</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="sugarlevel_1" id="test15">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">sugar level</label>
                    </div>
                    <div class="form-check form-check-inline px-8">
                      <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" 
                      type="checkbox" wire:model.defer="test" value="sugar_level_1" id="test16">
                      <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">sugar1 level</label>
                    </div>
                </div>

                {{-- <div class="flex  py-5">
                    <div class="flex items-center mr-4">
                        <input id="inline-checkbox" type="checkbox" wire:model.defer="test" value="sugar_level class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 1</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="inline-2-checkbox" type="checkbox" wire:model.defer="test" value="sugar_level_1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-2-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 2</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="inline-3-checkbox" type="checkbox" wire:model.defer="test" value="sugar_level_2 class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-3-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 1</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="inline-4-checkbox" type="checkbox" wire:model.defer="test" value="sugar_level_1 class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-4-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline 2</label>
                    </div>
                </div> --}}
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


    </form>
    <x-jet-dialog-modal wire:model="modalFormVisible">

        <x-slot name="title">
            {{ __('Assign Patient') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-jet-label for="doctor" value="{{ __('Doctor') }}" />
                <select class="block mt-1 w-full border-gray-300 focus:border" wire:model.defer="user_id">
                    <option diabled>---Select Labratorian---</option>
                    @foreach ($employee as $single)
                        <option value="{{ $single['user_id'] }}">{{ $single['full_name'] }}</option>
                    @endforeach
                </select> 
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
