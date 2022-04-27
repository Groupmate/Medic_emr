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
@include('zonal.layout.footer')
