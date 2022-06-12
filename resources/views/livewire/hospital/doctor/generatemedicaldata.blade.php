
<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> 
  @foreach ($medicaldata as $medicaldata) 
    <article class="flex flex-col shadow my-4"> 
      <div class="bg-white flex flex-col justify-start p-6">
          <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
            @foreach ($medicaldata->diagnosis_info as $diagnosis_info)
              {{ $diagnosis_info }}</a>
            @endforeach
          <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4"> 
            @foreach ($medicaldata->numerical_info as $numerical_info)
              {{ $numerical_info }}</a>
            @endforeach
          </a>
          <p href="#" class="text-sm pb-3">
                <a href="#" class="font-semibold hover:text-gray-800">
                @foreach ($medicaldata->disease as $disease)
                  {{ $disease }}</a>
                @endforeach</a>
          </p>
          <a href="#" class="pb-6"> {{ $medicaldata->description }}</a>
      </div>
    </article>
  @endforeach
  <div class="card">
    <div class="card-header"> 
      <div class="text-3xl font-bold hover:text-gray-700 pb-4">Fill the Form</div>
    </div>
    <div class="card-body"> 
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
            <x-jet-button class="ml-4"  wire:click="saveRecord()" wire:loading.attr="disabled">
                Submit
            </x-jet-button>
        </div> 
    </div>  
  </div>
  
  
  