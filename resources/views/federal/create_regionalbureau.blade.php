@include('federal.layout.header')
<body>

<div id="app">

 @include('federal.layout.aside')

 <x-app-layout> 
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @livewire('federal.create-regional')
            </div>
      </div>
</x-app-layout >
</section>

<footer class="footer">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
      <div class="flex items-center justify-start space-x-3">
        <div>
                 © 2022, @NatSenTB.copyright
        </div>
          <a href="https://github.com/Naty-Tefera/Medic_emr_backup.git" style="height: 20px">
          <img src="https://img.shields.io/github/v/release/justboil/admin-one-tailwind?color=%23999">
        </a>
      </div>

      </a>
    </div>
  </footer>

   <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">



