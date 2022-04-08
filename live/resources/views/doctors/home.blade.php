@extends('layouts.header ')

@section('header')
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/report.sass') }}" rel="stylesheet">  
  <title>EMR</title>
@endsection

<!-- start navbar -->
<body class="bg-gray-900">
<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
    <div class="flex-none w-56 flex flex-row items-center">
        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg3.svg" alt="logo" />
        <strong class="capitalize ml-1 flex-1">Medic-EMR</strong>
        
        <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden  md:block">
        <i class="fad fa-list-ul"></i>
        </button>   
    </div>
  
    
    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
      <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->
   
    <!-- navbar content -->
    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
      <!-- left -->
      <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-envelope-open-text"></i></a>        
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-comments-alt"></i></a>        
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-check-circle"></i></a>        
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-calendar-exclamation"></i></a>        
      </div>
      <!-- end left -->      

      <!-- right -->
      <div class="flex flex-row-reverse items-center"> 

        <!-- user -->
        <div class="dropdown relative md:static">

          <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
            <div class="w-8 h-8 overflow-hidden rounded-full">
                <img class="w-full h-full object-cover" src="{{asset('frontend/img/user.svg')}}" >
            </div> 

            <div class="ml-2 capitalize flex ">
              <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Doctor</h1>
              <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
            </div>                        
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-user-edit text-xs mr-1"></i> 
              edit my profile
            </a>     
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-inbox-in text-xs mr-1"></i> 
              my inbox
            </a>     
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-badge-check text-xs mr-1"></i> 
              tasks
            </a>     
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-comment-alt-dots text-xs mr-1"></i> 
              chats
            </a>     
            <!-- end item -->

            <hr>

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-user-times text-xs mr-1"></i> 
              log out
            </a>     
            <!-- end item -->

          </div>
        </div>
        <!-- end user -->

        


      </div>
      <!-- end right -->
    </div>
    <!-- end navbar content -->

  </div>
<!-- end navbar -->


<!-- strat wrapper -->
        <div class="h-screen flex flex-row flex-wrap">
        
            <!-- start sidebar -->
        <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
            

            <!-- sidebar content -->
            <div class="flex flex-col">

            <!-- sidebar toggle -->
            <div class="text-right hidden md:block mb-4">
                <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
                </button>
            </div>
            <!-- end sidebar toggle -->

            <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Homes</p>

            <!-- link -->
            <a href="{{ url('/index/home/patient_record') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="far fa-clinic-medical text-xl mr-2" ></i>        
                Dashboard
            </a>   <hr class="border-t border-gray-400 my-0">

                 <div id="dropdown" x-show="show" class="ml-2">
                    <a href="{{ url('/index/home/patient_record') }}" class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
                      <i class="far fa-files-medical text-xl mr-2"></i>
                          patient record
                      </a>
                    <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                    <i class="far fa-briefcase-medical text-xl mr-2"></i>
                        Request Examination Test
                    </a>
                    <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                    <i class="far fa-calendar-check text-xl mr-2"></i>
                        Add Appointement</a>
                    </a>
                    <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                        <i class="far fa-ambulance text-xl mr-2"></i>
                        Refer
                    </a>
                    <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                        <i class="far fa-pills text-xl mr-2"></i>
                    Perscribe Drug
                    </a>
                    <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                        <i class="far fa-procedures text-xl mr-2"></i>
                    Request For Bed
                    </a>
                    <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                    <i class="far fa-hospital-user text-xl mr-2"></i>
                    Request Patient Discharge
                    </a>
                    <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                        <i class="far fa-file-certificate text-xl mr-2"></i>
                    Generate Medical Certificate
                    </a>
                    <br>
                    <hr class="border-t border-gray-400 my-0">        
                </div>
                <!-- end link -->
                </div>
                <!-- end sidebar content -->
            </div>
            <!-- end sidbar  

            General Report -->
           
        <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

            <div class="bg-white p-8 rounded-md w-full">
            <div class="flex items-center justify-between pb-6">
                <div>
                <h2 class="text-gray-600 font-semibold">Find Patient </h2>
                <span class="text-xs">List of assigned patients </span>
                </div>
                <div class="flex items-center justify-between">
                <div class="flex bg-gray-50 items-center p-2 rounded-md">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <input
                    class="bg-gray-50 outline-none ml-1 block"
                    type="text"
                    name=""
                    id=""
                    placeholder="search..."
                    />
                </div>
                <div class="lg:ml-40 ml-10 space-x-8">
                    <button
                    class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"
                    >
                    New Report
                    </button>
                    <button
                    class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"
                    >
                    Create
                    </button>
                </div>
                </div>
            </div>
            <div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div
                    class="inline-block min-w-full shadow rounded-lg overflow-hidden"
                >
                    <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                        >
                            Name
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                        >
                            products
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                        >
                            Created at
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                        >
                            QRT
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                        >
                            Status
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img
                                class="w-full h-full rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                alt=""
                                />
                                
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                Vera Carpenter
                                </p>
                            </div>
                            </div>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <p class="text-gray-900 whitespace-no-wrap">Jan 21, 2020</p>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <p class="text-gray-900 whitespace-no-wrap">43</p>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <span
                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                            >
                            <span
                                aria-hidden
                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                            ></span>
                            <span class="relative">Activo</span>
                            </span>
                        </td>
                        </tr>
                        <tr>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img
                                class="w-full h-full rounded-full"
                                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                alt=""
                                />
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                Blake Bowman
                                </p>
                            </div>
                            </div>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <p class="text-gray-900 whitespace-no-wrap">Jan 01, 2020</p>
                        </td>

                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <p class="text-gray-900 whitespace-no-wrap">77</p>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <span
                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                            >
                            <span
                                aria-hidden
                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                            ></span>
                            <span class="relative">Activo</span>
                            </span>
                        </td>
                        </tr>
                        <tr>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img
                                class="w-full h-full rounded-full"
                                src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                alt=""
                                />
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                Dana Moore
                                </p>
                            </div>
                            </div>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <p class="text-gray-900 whitespace-no-wrap">Jan 10, 2020</p>
                        </td>

                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <p class="text-gray-900 whitespace-no-wrap">64</p>
                        </td>
                        <td
                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                        >
                            <span
                            class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight"
                            >
                            <span
                                aria-hidden
                                class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"
                            ></span>
                            <span class="relative">Suspended</span>
                            </span>
                        </td>
                        </tr>
                        <tr>
                        <td class="px-5 py-5 bg-white text-sm">
                            <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img
                                class="w-full h-full rounded-full"
                                src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                alt=""
                                />
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                Alonzo Cox
                                </p>
                            </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">Jan 18, 2020</p>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">70</p>
                        </td>
                        <td class="px-5 py-5 bg-white text-sm">
                            <span
                            class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight"
                            >
                            <span
                                aria-hidden
                                class="absolute inset-0 bg-red-200 opacity-50 rounded-full"
                            ></span>
                            <span class="relative">Inactive</span>
                            </span>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    <div
                    class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between"
                    >
                    <span class="text-xs xs:text-sm text-gray-900">
                        Showing 1 to 4 of 50 Entries
                    </span>
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button
                        class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l"
                        >
                        Prev
                        </button>
                        &nbsp; &nbsp;
                        <button
                        class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r"
                        >
                        Next
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
          </div>
           
          </div>

            </div>

        </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

<!-- script -->
<script src="{{ asset('js/scripts.js') }}" rel="stylesheet">
<script src="{{ asset('frontend/js/report.sass') }}" rel="stylesheet">
<script src="{{ asset('frontend/js/scripts.js')}}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    window.addEventListener('DOMContentLoaded', ()=> {
        const menuBtn = document.querySelector('#menu-btn')
        const dropdown = document.querySelector('#dropdown')
        
        menuBtn.addEventListener('click', () => {
            /* if(dropdown.classList.contains('hidden')){
                dropdown.classList.remove('hidden');
                dropdown.classList.add('flex');
            }else{
                dropdown.classList.remove('flex')
                dropdown.classList.add('hidden')
            } */

            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('flex')
        })

    })
</script>
<!-- end script -->

</body>
</html>
