@include('federal.layout.header')
<body>
 @include('federal.layout.aside')
      <div class="ml-10"> 
             @livewire('federal.dashboard')
      </div>
    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              @livewire('statics.federal-statics') 
        </div></div>
    </div> 
 @include('federal.layout.footer')
   