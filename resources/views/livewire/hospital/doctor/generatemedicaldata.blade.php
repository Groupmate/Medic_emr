<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> 
  <div class="mt-4"> 
      <x-livewire-tag-input label="one" key="symptom" title="symptom"
        wire:key="tags" :select-all-enabled="true" /> 
    </div>
  
    <div class="mt-4">  
        <x-livewire-tag-input label="one" key="diagnosis_info" title="diagnosis_info"
        wire:key="tags" :select-all-enabled="true" /> 
    </div>
  
    <div class="mt-4"> 
      <x-livewire-tag-input label="one" key="numerical_info" title="numerical_info"
      wire:key="tags" :select-all-enabled="true" /> 
    </div>
  
    <div class="mt-4">
        <x-jet-label for="description" value="{{ __('Description') }}" />
        <textarea id="description" class="block mt-1 w-full" type="description" wire:model.debounce.800ms="description" :value="old('email')" required> </textarea>
        @error('description') <span class="error">{{$description}}</span>@enderror
    </div> 
  
    <div class="mt-4"> 
        <x-picture-tag-input label="one" key="picture" title="picture"
        wire:key="tags" :select-all-enabled="true" /> 
    </div>
  
    <div class="mt-4"> 
      <x-livewire-tag-input label="one" key="disease" title="disease"
      wire:key="tags" :select-all-enabled="true" /> 
    </div>
  
  
    <div class="flex items-center justify-end mt-4">
        <x-jet-button class="ml-4"  wire:click="one" wire:loading.attr="disabled">
            Submit
        </x-jet-button>
    </div> 
  </div>
  
  
  