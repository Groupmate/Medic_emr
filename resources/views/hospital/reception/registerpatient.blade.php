  @include('hospital.reception.layout.header')

  @include('hospital.reception.layout.aside')

        <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        @livewire('hospital.reception.registerpatient')
                </div>
        </div>
 @include('hospital.reception.layout.footer')
