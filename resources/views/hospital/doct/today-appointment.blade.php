<link href="{{ asset('csss/style2.css') }}" rel="stylesheet">
 <x-app-layout >
  <body>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @livewire('hospital.doct.today-appointments')
            </div>
      </div>

  </body>
</x-app-layout >
