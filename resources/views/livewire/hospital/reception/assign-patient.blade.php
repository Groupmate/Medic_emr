<div class="p-6">
    <div class="border-b border-gray-400 shadow">
        <table class="table-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        ID
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        First Name
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Last Name
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        National_id
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Region
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Sex
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Created_at
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($patients as $patients)
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-gray-500">
                        {{ $patients->id }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $patients->lastname }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $patients->firstname }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $patients->national_id }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $patients->region }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $patients->sex }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            {{ $patients->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            <x-jet-button wire:click="createShowModal({{$patients->id}})">
                                {{ __('Assign') }}
                            </x-jet-button>
                        </td>
                    </tr>
                @endforeach

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
            <x-jet-secondary-button class="bg-green-500" wire:click="create" wire:loading.attr="disabled">
                {{ __('create') }}
            </x-jet-secondary-button>
            <x-jet-secondary-button class="ml-3" wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>

</div>
