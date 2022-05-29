  @include('hospital.reception.layout.header')

  @include('hospital.reception.layout.aside')
    <x-app-layout >
        @livewire('hospital.reception.viewpatients')
    </x-app-layout>
 @include('hospital.reception.layout.footer')
  