<div class = "ml-6 pt-80">
    The whole world belongs to you. 
    <div class="border-b border-gray-400 shadow">
        <table class="table-auto">
            <thead class="text-purple-500">
                <tr >
                    <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Patient ID</th>
                    <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">First Name</th>
                    <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Second Name</th>
                    <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Last Name</th>
                    <th   class="px-56 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr >
                    
                    @foreach($assignmentDoctor as $organ)
                        @foreach($userID as $userId)
                            @foreach($patientID as $patientId)
                                @if($userId -> id == $organ->user_id && $organ->patient_id == $patientId->id)
                                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patientId->id }}</td>
                                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patientId->first_name }}</td>
                                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patientId->middle_name }}</td>
                                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $patientId->last_name }}</td>
                                        <td>
                                            <x-jet-button class="bg-blue-500 ml-6 " wire:click="referShowModal({{ $patientId->id }})">
                                                {{ __('Refer Patient') }}
                                            </x-jet-button>
                                            <x-jet-button class="bg-green-500 ml-6"  wire:click="updateReferShowModal({{ $patientId->id }})">
                                                {{ __('update Refer') }}
                                            </x-jet-button>
                                            <x-jet-danger-button class="bg-red-500 ml-6" wire:click="deleteShowModal({{ $patientId->id }})" >
                                                {{ __('Delete Refer') }}
                                            </x-jet-button>
                                        </td>
                                @endif
                            @endforeach
                        @endforeach
                    @endforeach
                </tr>
                
            </tbody> 
        </table>
    </div>
   
</div>
