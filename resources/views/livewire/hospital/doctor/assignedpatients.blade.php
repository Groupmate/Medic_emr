
    <!-- end sidbar-->
       <!-- start content -->
  
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">   
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                     <div class="card col-span-4 xl:col-span-1">
                        <div class="card-header alert alert-dark mb-5 h4">Today's Appointment</div>
                            <table class="min-w-full">
                                <thead class="border-b">
                                    <tr>
                                       <th class="px-2 py-2 border-r">Patient Id</th>
                                        <th scope="col" class="px-1 py-1 border-r">
                                            First Name
                                        </th>  
                                        <th scope="col" class="px-1 py-1 border-r">
                                            Last Name
                                        </th>
                                        <th scope="col" class="px-1  py-1 border-r">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($todayAppointment as $patient) 
                                        <tr class="border-b">
                                         <td class="border border-l-0 px-4 py-2 text-center text-green-500">  {{ $patient['patient_id']}} </td>
                                            <td class="text-sm border border-l-0 px-4 py-2 px-6 py-4 whitespace-nowrap">
                                                {{ $patient['firstname']}}
                                            </td> 
                                            <td class="text-sm border border-l-0 px-4 py-2 px-6 py-4 whitespace-nowrap">
                                                {{ $patient['lastname']}} 
                                            </td>
                                            <td class="text-sm border border-l-0 px-4 py-2 px-6 py-4 whitespace-nowrap">
                                                <button class="btn-shadow" wire:click="appoint({{ $patient['patient_id'] }})">
                                                    {{ __('Examine') }}
                                                </button>
                                            </td>
                                        </tr>  
                                    @empty
                                    <td class="text-lg border border-l-0 px-4 py-2 px-6 py-4 whitespace-nowrap">
                                        no appointed patient
                                    </td>
                                    @endforelse 
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                
      
                     <div class="card col-span-4 xl:col-span-1">
                        <div class="card-header alert alert-dark mb-5 h4">Recent Assigned Patients</div>
                            <table class="min-w-full">
                                <thead class="border-b">
                                    <tr>
                                       <th class="px-2 py-2 border-r">Patient Id</th>
                                        <th scope="col" class="px-1 py-1 border-r">
                                            First Name
                                        </th>  
                                        <th scope="col" class="px-1 py-1 border-r">
                                            Last Name
                                        </th>
                                        <th scope="col" class="px-1  py-1 border-r">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($patients as $patient) 
                                        <tr class="border-b">
                                         <td class="border border-l-0 px-4 py-2 text-center text-green-500">  {{ $patient['id']}} </td>
                                            <td class="text-sm border border-l-0 px-4 py-2 px-6 py-4 whitespace-nowrap">
                                                {{ $patient['firstname']}}
                                            </td> 
                                            <td class="text-sm border border-l-0 px-4 py-2 px-6 py-4 whitespace-nowrap">
                                                {{ $patient['lastname']}} 
                                            </td>
                                            <td class="text-sm border border-l-0 px-4 py-2 px-6 py-4 whitespace-nowrap">
                                                <button class="btn-shadow" wire:click="examine({{ $patient['id'] }})">
                                                    {{ __('Examine') }}
                                                </button>
                                            </td>
                                        </tr>  
                                        @empty
                                        <td class="text-lg border border-l-0 px-4 py-2 px-6 py-4 whitespace-nowrap">
                                            no assigned patient
                                        </td>
                                        @endforelse  
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div> 
                </div>
            </div>
        </div>  
    </div>