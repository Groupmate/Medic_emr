
@include('hospital.doctor.layout.middle')
<x-app-layout >
    <body>
      <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-400 overflow-hidden sm:rounded-lg bg-gray-400 overflow-hidden sm:rounded-lg">
              @livewire('hospital.doctor.create-bed-assignment',['id' => $id])
            </div>
      </div> 
    </body>
</x-app-layout>


