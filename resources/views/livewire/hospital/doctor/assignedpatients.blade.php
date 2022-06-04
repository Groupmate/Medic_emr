
<div class="mt-10 sm:mt-0">
      
                        
       
           
    <!-- strat content -->
<div class="bg-gray-100 flex-1 p-6 md:mt-16">   
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
                                Description
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($patients as $patient)
                                @foreach ($patient as $patient) 
                                    @foreach ($patient as $patient) 
                                        <tr class="border-b">
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $patient->first_name}}  {{ $patient->last_name}} 
                                            </td> 
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $patient->phone_no }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
                                                <x-jet-button wire:click="examine({{ $patient->id }})">
                                                    {{ __('Examine') }}
                                                </x-jet-button> 
                                            </td> 
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>