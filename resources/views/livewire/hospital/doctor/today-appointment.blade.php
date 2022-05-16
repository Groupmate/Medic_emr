<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Patient ID
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Doctor ID
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
               Issue_Date
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
              {{$appoint->patientss_id}}
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
                                        <x-jet-button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  wire:click="approve({{ $appoint->id }})">
                                            <svg
                                            class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                            </svg> {{ __('Approve') }}
                                        </x-jet-button>
                                            
                                        <x-jet-danger-button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  wire:click="cancel({{ $appoint->id }})" >
                                               {{ __('Cancel') }}
                                        </x-jet-danger-button>
                                    </div>
                                       
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