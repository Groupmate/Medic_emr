  @include('hospital.reception.layout.header')

  @include('hospital.reception.layout.aside')
        <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        @livewire('hospital.reception.register-patient') 
                          @foreach($slots as $slot)
                                {{ $slot }}<br>
                        @endforeach     
                </div>
        </div>     
    
 @include('hospital.reception.layout.footer')

