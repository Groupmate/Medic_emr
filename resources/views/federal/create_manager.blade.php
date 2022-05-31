@include('federal.layout.header')
<body>

<div id="app">

        @include('federal.layout.aside')

          <div class="py-12"> 
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    @livewire('federal.create-manager')
              </div>
          </div>
    @include('federal.layout.footer')

