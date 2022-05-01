<div class="p-6">
<div class="bg-white dark:bg-gray-800  shadow px-8 md:px-12 pt-4 md:pt-7 pb-5 overflow-y-auto">
         <div clas="flex justify-between">
            <div class="ml-2 p-4">
                <input  type="search"  placeholder="Search..." class="shadow apperance none bounded  rounded bg-transparent focus:outline-none text-xs" wire:model="search" />  
               
           </div>
         </div>

         <div class="p-4">
                <table class="table-auto w-full whitespace-nowrap ">
                                        <thead class="text-purple-500 p-4">
                                            <tr >
                                                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">first-name</th>
                                                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">last-name</th>
                                                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">patient_id</th>
                                                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">phone_no</th>
                                                <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">email</th>
                                                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">action</th>
                                            
                                            </tr>
                                        </thead>
                                <tbody>
                                        @foreach($patients as $patient)
                                                    <tr>
                                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$patient->firstname}}</td>
                                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$patient->lastname}}</td>
                                                            <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$patient->patient_id}}</td>
                                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$patient->phone_no}}</td>
                                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$patient->email}}</td>
                                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                                                                    <x-jet-button wire:click="updateShowModal({{ $patient->id }})">
                                                                    {{ __('Edit') }}
                                                                    </x-jet-button>
                                                                   
                                                                    <x-jet-button wire:click="viewShowModel({{ $patient->id }})" class="bg-green-500">
                                                                        {{ __('view') }}
                                                                    </x-jet-button>
                                                                    <x-jet-danger-button wire:click="deleteShowModel({{ $patient->id }})" >
                                                                        {{ __('Delete') }}
                                                                    </x-jet-button>
                                                            </td>
                                        
                                                        </tr>
                                              @endforeach

                                </tbody>
                    </table>
                    @if(count($patients))
                      {{$patients}}
                     @endif

         </div>    
         <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">

                    <x-slot name="title">
                        {{ __('Delete Account') }} {{$modelId}}
                    </x-slot>

                    <x-slot name="content">
                        {{ __('Are you sure you want to delete your patient account ? Once your account is deleted, all of its resources and data will be permanently deleted. ') }}


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
</div>

</div>

