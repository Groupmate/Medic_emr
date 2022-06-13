@include('zonal.layout.header')
<body>

<div id="app">


@include('zonal.layout.aside')

<x-app-layout>
 <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('zonal.create-hospital')
            </div>
        </div>
    </div>
    </x-app-layout>
</section>


<footer class="footer">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
      <div class="flex items-center justify-start space-x-3">
        <div>
                <strong>© 2022, CEMRS.copyright<strong>
        </div>
          <a href="https://github.com/Naty-Tefera/Medic_emr_backup.git" style="height: 20px">
          <img src="https://img.shields.io/github/v/release/justboil/admin-one-tailwind?color=%23999">
        </a>
      </div>

      </a>
    </div>
</footer>

<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
