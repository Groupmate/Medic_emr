<div class = "ml-6 pt-6">
    <div class="border  pt-5 border-gray-400 shadow">
        <table class="table-auto border-separate border-spacing-2 ">
            <thead class="text-purple-500">
                <tr >
                    <th  class="px-6 py-3 border-b-2 border-gray-500 bg-white text-left text-xs font-semibold text-black uppercase tracking-wider">Patient ID</th>
                    <th  class="px-6 py-3 border-b-2 border-gray-500 bg-white text-left text-xs font-semibold text-black uppercase tracking-wider">First Name</th>
                    <th   class="px-6 py-3 border-b-2 border-gray-500 bg-white text-left text-xs font-semibold text-black uppercase tracking-wider">Last Name</th> 
                    <th   class="px-20 py-3 border-b-2 border-gray-500 bg-white text-left text-xs font-semibold text-black uppercase tracking-wider ">Examined On</th>
                    <th   class="px-20 py-3 border-b-2 border-gray-500 bg-white text-left text-xs font-semibold text-black uppercase tracking-wider ">Status</th>

                </tr>
            </thead>
            <tbody>                                 
                    @forelse($patientVisited as $patientVisited)
                            @foreach($patientID as $patient)
                                <tr>
                                    @if($patientVisited->patient_id == $patient->id)
                                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-lg text-red-500">{{ $patient->id }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-lg text-teal-500">{{ $patient->firstname }}</td>
                                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-lg text-blue-500">{{ $patient->middle_name }}</td>
                                            <td class="px-20 py-3 border-b border-gray-200 bg-gray-100 text-lg ">{{ $patientVisited->created_at }}</td> 
                                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-lg">
                                                <x-jet-button class="bg-green-500 ml-6 rounded-full">
                                                    {{ __('Examined Patient') }}
                                                </x-jet-button>
                                            </td>
                                    @endif
                                </tr>                    
                            @endforeach                        
                    @empty
                        <tr>
                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-sm text-red-500"></td>
                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-sm text-red-500"></td>
                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-lg text-red-500">You Haven't examined anyone this Week</td>
                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-sm text-red-500"></td>
                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-sm text-red-500"></td>
                            <td class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-sm text-red-500"></td>
                        </tr>
                    @endforelse                                            
            </tbody>      
        </table>
    </div>
</div>



