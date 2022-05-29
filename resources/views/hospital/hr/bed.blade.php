
  
 
  @include('hospital.hr.layout.header')
    <section class="section main-section">
        <x-app-layout >
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('hospital.hr.add-bed')
                    </div>
                </div>
            </div>
    </x-app-layout>
</section>
@include('hospital.hr.layout.footer')

