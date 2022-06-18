<div class = "ml-6 pt-6 w-full"> 
    @if (session()->has('message'))
        <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
            <div class="flex">
                <div>
                    <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif
    <div class="border-b border-gray-400 shadow">
        <table class="table-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        ID
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Name
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Speciality
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @forelse ($users as $patients)
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $patients->id }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $patients->firstname }} {{ $patients->lastname }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $patients->lastname }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $patients->speciality }}
                            </div>
                        </td>
                @empty
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                $patients->speciality  
                            </div>
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
  
</div>

