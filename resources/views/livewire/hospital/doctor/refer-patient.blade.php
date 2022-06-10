<div class = "ml-6 pt-80">
    The whole world belongs to you. 
    <table class="min-w-full leading-normal">
        <thead class="text-purple-500">
            <tr >
                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Patient ID</th>
                {{-- <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">manager</th> --}}
                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">First Name</th>
                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Last Name</th>
                <!-- <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">city</th> -->
                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($organizations as $organ)
        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ['patient_id']}}</td>
        @
            <!-- @forelse($organizations as $organizations) -->
                <tr>
                    <!-- <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->name}}</td> -->
                    <!-- @if( $userID->id  == $organizations->user_id)
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->patient_id}}</td>
                    @endif -->
                        <!-- @if( $userID  == $organ->user_id)
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$user->first_name}}</td>
                        @endif
                        @if( $organ->user_id  == NULL)
                            <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $organ->user_id }}</td>
                        @endif
                    @if( $organ->type ==1 )
                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">Regional Health bureau</td>
                    @endif
                    @if( $organ->type ==2 )
                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">City Adminstration</td>
                    @endif
                    @if( $organ->type ==3 )
                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">Speciality Clinic</td>
                    @endif

                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->region}}</td>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->city}}</td>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm"> -->
                        <x-jet-button wire:click="updateShowModal({{ $organ->id }})">
                            {{ __('update') }}
                        </x-jet-button>
                        <x-jet-danger-button wire:click="deleteShowModal({{ $organ->id }})" >
                            {{ __('Delete') }}
                        </x-jet-button>
                        <x-jet-button class="bg-green-500" wire:click="viewShowModal({{ $organ->id }})">
                            {{ __('view') }}
                        </x-jet-button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-black-200 bg-white text-lg">Nope</td>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                </tr>
            @endforelse
        </tbody>
    </table>
   
</div>
