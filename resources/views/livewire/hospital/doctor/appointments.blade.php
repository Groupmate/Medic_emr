

<div class="mt-10 sm:mt-0">
     
     <!-- component -->
 <div class="p-6">

    <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
          <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4 text-center">+Create Appointment For Patients </h1>
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                       <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="patient_id" value="{{ __('Patient Name') }}"/>
                                        <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="patient_id"  wire:model.debounce.80ms="patient_id" >
                                        <option>select patient</option>
                                          @foreach($pname as $row)
                                              <option  class="block mt-1 w-full" type="text" value="{{$row->id}}">{{$row->firstname}}</option>
                                          
                                          @endforeach
                                          </select>
                                      @error('patient_id') <span class="error">{{$message}}</span>@enderror
                                    </div>
                                
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                                <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="status" value="{{ __('Status') }}"/>
                                                <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="status" wire:model.debounce.800ms="status">
                                                              <option value="confirmed">confirmed</option>
                                                              <option value="pending">pending</option>
                                                              <option value="cancelled">cancelled</option>
                                              </select>
                                            @error('status') <span class="error">{{$message}}</span>@enderror
                                        </div>
                            
                                </div>
                              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                  
                                          <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="issue_date" value="{{ __('Issue-Date') }}"/>
                                          <x-jet-input id="issue_date" name="issue_date" class="block mt-1 w-full" type="date" placeholder="issue_date" wire:model.debounce.800ms="issue_date"/> 
                                          @error('issue_date') <span class="error">{{$message}}</span>@enderror
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="visit_date" value="{{ __('Visit_date') }}"/>
                                        <x-jet-input id="visit_date" class="block mt-1 w-full" type="date" placeholder="visit_date" wire:model.debounce.800ms="visit_date"/> 
                                        @error('visit_date') <span class="error">{{$message}}</span>@enderror
                                    </div>
                              
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0"> 
                                            <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="description" value="{{ __('Description') }}"/>
                                            <textarea id="description" class="block mt-1 w-full" type="text" placeholder="description" wire:model.debounce.800ms="description"/></textarea> 
                                            @error('description') <span class="error">{{$message}}</span>@enderror
                                        </div>
                                </div>
                            <div class="flex items-center justify-end mt-4"  >
                                <x-jet-button  class="hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm"  wire:click="create" wire:loading.attr="disabled">
                                    save
                                </x-jet-button>   
                            </div>
                     </div>
      
  @if (session()->has('message'))
      <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
          <div class="flex">
              <div>
                  <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
              </div>
          </div>
      </div>
  @endif
 

                         
        
            
      
 <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Patient Name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Doctor Name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
               issue_date
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
               Visit_Date
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
               Status
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              Description
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              Action
              </th>
            </tr>
          </thead>
          <tbody>
              @foreach($appointment as $appoint)
            <tr class="border-b">
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$appoint->patient_id}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$appoint->doctor_id}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$appoint->issue_date}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$appoint->visit_date}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$appoint->status}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$appoint->descrpition}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <div class="flex items-center space-x-8 text-sm">
                                      <x-jet-button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  wire:click="updateShowModal({{ $appoint->id }})">
                                        <svg
                                          class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg> {{ __('Edit') }}
                                      </x-jet-button>
                                 
                                      <x-jet-danger-button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  wire:click="deleteShowModel({{ $appoint->id }})" >
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"viewBox="0 0 20 20">
                                          <path
                                            fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>   {{ __('Delete') }}
                                      </x-jet-danger-button>
                                 </div>
                                   
              </td>
             
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
           @if(count($appointment))  
                {{$appointment}}
                @endif
 <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">

        <x-slot name="title">
            {{ __('Delete Account') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete your patient appointment ? Once your appointment is deleted, all of its resources and data will be permanently deleted. ') }}


        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
              
            <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete ') }}
            </x-jet-danger-button>
        </x-slot>
</x-jet-dialog-modal>  

<x-jet-dialog-modal wire:model="modelFormVisible">

<x-slot name="title">
    {{ __('Edit Patient Appointment') }} {{$modelId}}
</x-slot>

<x-slot name="content">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                        <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4 text-center">+Create Appointment For Patients </h1>
                                        <div class="-mx-3 md:flex mb-2">
                                                  <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                                                  <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="patient_id" value="{{ __('Patient Name') }}"/>
                                                      <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="patient_id"  wire:model.debounce.80ms="patient_id" >
                                                      <option>select patient</option>
                                                        @foreach($pname as $row)
                                                            <option  class="block mt-1 w-full" type="text" value="{{$row->id}}">{{$row->firstname}}</option>
                                                        
                                                        @endforeach
                                                        </select>
                                                    @error('patient_id') <span class="error">{{$message}}</span>@enderror
                                                </div>
                                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                              
                                                            <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="doctor_id" value="{{ __('Doctor Name') }}"/>
                                                    
                                                              <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="doctor_id" wire:model.debounce.80ms="doctor_id">
                                                                <option>select doctor</option>
                                                                @foreach($dname as $row)
                                                                    <option value="{{$row->id}}"  class="block mt-1 w-full" type="text"  >{{$row->name}} {{$row->lastname}}</option>
                                                                
                                                                @endforeach
                                                            </select>
                                                          @error('doctor_id') <span class="error">{{$message}}</span>@enderror
                                                </div>
                                                
                                            
                                        </div>
                                              <div class="-mx-3 md:flex mb-2">
                                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                                  
                                                          <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="issue_date" value="{{ __('Issue-Date') }}"/>
                                                          <x-jet-input id="issue_date" name="issue_date" class="block mt-1 w-full" type="date" placeholder="issue_date" wire:model.debounce.800ms="issue_date"/> 
                                                          @error('issue_date') <span class="error">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                                        <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="visit_date" value="{{ __('Visit_date') }}"/>
                                                        <x-jet-input id="visit_date" class="block mt-1 w-full" type="date" placeholder="visit_date" wire:model.debounce.800ms="visit_date"/> 
                                                        @error('visit_date') <span class="error">{{$message}}</span>@enderror
                                                    </div>
                                              
                                                </div>
                                                <div class="-mx-3 md:flex mb-2">
                                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                                                <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="status" value="{{ __('Status') }}"/>
                                                                <select  class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" id="status" wire:model.debounce.800ms="status">
                                                                              <option value="confirmed">confirmed</option>
                                                                              <option value="pending">pending</option>
                                                                              <option value="cancelled">cancelled</option>
                                                              </select>
                                                            @error('status') <span class="error">{{$message}}</span>@enderror
                                                        </div>
                                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0"> 
                                                            <x-jet-label class="text-gray-800 text-sm font-bold leading-tight tracking-normal" for="description" value="{{ __('Description') }}"/>
                                                            <textarea id="description" class="block mt-1 w-full" type="text" placeholder="description" wire:model.debounce.800ms="description"/></textarea> 
                                                            @error('description') <span class="error">{{$message}}</span>@enderror
                                                        </div>
                                      
                                                </div>
                                            
                      </div>
</x-slot>

  <x-slot name="footer">
      @if($modelId)
              <x-jet-danger-button class="bg-green-500" wire:click="update" wire:loading.attr="disabled">
                  {{ __('Edit') }}
              </x-jet-danger-button>
              @else
              <x-jet-danger-button class="bg-green-500" wire:click="create" wire:loading.attr="disabled">
                  {{ __('create') }}
              </x-jet-danger-button>
          @endif


          <x-jet-secondary-button class="ml-3" wire:click="$toggle('modelFormVisible')" wire:loading.attr="disabled">
              {{ __('Cancel') }}
          </x-jet-secondary-button>
  </x-slot>
</x-jet-dialog-modal>                                  


        
</div>
</div>