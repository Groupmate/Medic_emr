<<<<<<< Updated upstream
<div class = "ml-6 pt-6 w-full">
=======
<div class = "ml-6 mt-4 pt-6 w-3/4">
>>>>>>> Stashed changes
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @if (session()->has('message'))
        <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
            <div class="flex">
                <div>
                    <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif
    <div class="border- pt-5 border-gray-400 shadow">
        <table class="table-auto">
            <thead class="text-purple-500">
                <tr >
                    <th  class="px-6 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Patient ID</th>
                    <th  class="px-6 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">First Name</th>
                    <th   class="px-6 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Second Name</th>
                    <th   class="px-5 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Last Name</th>
                    <th   class="px-20 py-3 border-b-2 border-gray-500 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider ">Action</th>

                </tr>
            </thead>
            <tbody>                                 
                    @forelse($referals as $refer)
                        @foreach($receptionists as $receptionist)
                            @foreach($patients as $patient)
                                <tr>
                                    @if($refer -> refered_to == $receptionist->hospital_id && $refer->patient_id == $patient->id)
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patient->id }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patient->firstname }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patient->middle_name }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patient->lastname }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                                                <x-jet-button class="bg-green-500 ml-6 rounded-full" wire:click="assignShowModal({{ $patient->id }})">
                                                    {{ __('Assign Patient') }}
                                                </x-jet-button>
                                            </td>
                                    @endif
                                </tr>                    
                            @endforeach
                        @endforeach
                    @empty
                        <tr>
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm"></td>
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm"></td>
                            <td class="px-6 py-3 border-b border-black-200 bg-white text-lg">Nope</td>
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm"></td>
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm"></td>
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm"></td>
                        </tr>
                    @endforelse                                            
            </tbody>      
        </table>
    </div>
    <x-jet-dialog-modal wire:model="modalFormVisible">

        <x-slot name="title">
            {{ __('Assign Patient') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-jet-label for="doctor" value="{{ __('Doctor') }}" />
                <select class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="user_id">
                    <option diabled>---Select Doctor---</option>
                    @foreach ($users as $users)
                        <option value="{{ $users['id'] }}">{{ $users['firstname'] }}</option>
                    @endforeach
                </select>
                @error('user_id') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button class="bg-green-500 rounded-full" wire:click="assign" wire:loading.attr="disabled">
                {{ __('Assign') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-3 rounded-full" wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>

