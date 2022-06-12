<table class="min-w-full leading-normal">
                                    <thead class="text-purple-500">
                                        <tr >
                                            <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">first-name</th>
                                            <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">last-name</th>
                                            <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">type</th>
                                            <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">address</th>
                                            <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">profile-picture</th>
                                            <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">action</th>
                                        
                                        </tr>
                                </thead>
                            <tbody>
                            @foreach($employes as $employe)
                                <tr>
                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->firstname}}</td>
                                            <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->lastname}}</td>
                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->type}}</td>
                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->address}}</td>
                                            <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->image}}</td>
                                            <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                                                        
                                                <x-jet-button wire:click="updateShowModal({{ $employe->id }})">
                                                    {{ __('update') }}
                                                    </x-jet-button>
                                                <x-jet-danger-button wire:click="deleteShowModel({{ $employe->id }})" >
                                                    {{ __('Delete') }}
                                                </x-jet-button>
                                                <x-jet-button wire:click="viewShowModel({{ $employe->id }})" class="bg-green-500">
                                                    {{ __('view') }}
                                                </x-jet-button>
                                            </td>
                                 @endforeach
                                        </tr>
                               
                                   
                            </tbody>
                    </table>