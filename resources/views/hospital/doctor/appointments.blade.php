
@include('hospital.doctor.layout.middle')
    <x-app-layout >
    <body>
        <div class="">
                <div class="bg-gray-400 overflow-hidden sm:rounded-lg">
                @livewire('hospital.doctor.appointments')
                </div>
        </div> 
    </body>
    </x-app-layout >
 