
<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> 
  <div class="flex justify-center items-center mt-4 w-full bg-grey-400">
   
    <div class="w-full bg-white rounded shadow-2xl p-10 m-4 mx-5 my-5">
        <span class=" flex justify-center items-center   mr-12">
            <h4><strong>+Generate Medical For Patient</strong></h4>
        </span> 
        <div class="mt-5"> 
          <label class="mb-1 subpixel-antialiased text-lg text-gray-900">Symptom</label><br>
            <x-livewire-tag-input label="one" key="symptom" title=""
              wire:key="tags" :select-all-enabled="true" /> 
        </div>
      
        <div class="mt-4"> 
            <label class="mb-1 subpixel-antialiased text-lg text-gray-900">Diagnosis_info</strong></label><br> 
            <x-livewire-tag-input label="one" key="diagnosis_info" title=""
            wire:key="tags" :select-all-enabled="true" /> 
        </div>
      
        <div class="mt-4">
          <label class="mb-1 subpixel-antialiased text-lg text-gray-900">Numerical_info</strong></label><br> 
          <x-livewire-tag-input label="one" key="numerical_info" title=""
          wire:key="tags" :select-all-enabled="true" /> 
        </div>
      
        <div class="mt-4">
        <label class="mb-1 subpixel-antialiased text-lg text-gray-900">Description</label><br> 
            <textarea id="description" class="alert mb-4 border-1 ml-2 w-3/4 block" type="description" wire:model.debounce.800ms="description" :value="old('email')" required> </textarea>
            @error('description') <span class="error">{{$description}}</span>@enderror
        </div>
  
        <div class="mt-4"> 
        <label class="mb-1 subpixel-antialiased text-lg text-gray-900">Disease</label><br> 
          <x-livewire-tag-input class="alert mb-4 border-1 ml-2 w-3/4 block" label="one" key="disease" title=""
          wire:key="tags" :select-all-enabled="true" /> 
        </div>
        {{-- <div class="mt-4"> 
        <label class="mb-3 text-xl  ">Picture</label><br> 
            <x-picture-tag-input label="one" key="picture" title=""
            wire:key="tags" :select-all-enabled="true" /> 
        </div>
       --}}
      
        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4"  wire:click="saveRecord()" wire:loading.attr="disabled">
                Submit
            </x-jet-button>
        </div> 
        

      
    </div>
  </div>

  
  