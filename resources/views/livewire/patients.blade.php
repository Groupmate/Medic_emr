  
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-16 text-xl bg-white">
         Patient
    </div>
    <div class="bg-white dark:bg-gray-800  shadow px-8 md:px-12 pt-4 md:pt-7 pb-5 overflow-y-auto">
        <div clas="flex justify-between">
            <div class="ml-2">
                <input  type="search"  placeholder="Type something..." class="shadow apperance none bounded  rounded bg-transparent focus:outline-none text-xs" wire:model="q" />  
               
           </div>
        </div>
      
        <div class="mr-12 flex justify-end">
            <input type="checkbox" class="mr-2 leading-tight" wire:model="active"/> Active
        </div>

        </div>
            <table class="table-auto w-full whitespace-nowrap">
                <thead>
                    <tr>
                       <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                           <div class="flex flex-row ml-2">
                              <button wire:click="sortBy('id')">ID_No</button>
                                 <x-sort-icon  sortFeild="id" :sort-by="$sortBy" :sort-asc="$sortAsc"/>
                            </div>
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            <div class="flex flex-row ml-2">
                                <button wire:click="sortBy('firstname')">FIRSTNAME</button>
                                  <x-sort-icon  sortFeild="firstname" : sort-by="sortBy" :sort-asc="$sortAsc"/>
                            </div>
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                             <div class="flex flex-row ml-2">
                                <button wire:click = "sortBy('lastname')">LASTNAME</button>
                                    <x-sort-icon  sortFeild="lastname" : sort-by="sortBy" :sort-asc="$sortAsc"/>
                            </div>
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Cityname  </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ZONE </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Woreda  </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Region  </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status  </th>


                    </tr>
                </thead>
                <tbody>
                  @foreach($patient as $patients)
                    <tr class="border-gray-500">    
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">{{$patients->id}}</td>
                        <td class="px-5px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$patients->firstname}}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$patients->lastname}}</td> 
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">{{$patients->cityname}}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$patients->woreda}}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$patients->zone}}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$patients->region}}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$patients->status ? 'active' :'Passive' }}</td>
                      </tr>
                  @endforeach
               </tbody>
           </table>
        
    <div class="mt-4">
       {{ $patient->links() }}
    </div>
</div>  