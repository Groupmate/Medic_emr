  @include('hospital.reception.layout.header')

  @include('hospital.reception.layout.aside')
    {{-- <x-app-layout > --}}
        <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('hospital.reception.register-patient')
                    </div>
                </div>
        </div>      
    {{-- </x-app-layout> --}}
    
     @include('hospital.reception.layout.footer')
  