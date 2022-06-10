<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    
    @livewireStyles
</head> 
<!-- start navbar -->
<body class="">
<div>
<!-- start navbar -->
  <div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
      
      <!-- logo -->
      <div class="flex-none w-56 flex flex-row items-center">
        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg3.svg" alt="logo" />
        
          <strong class="capitalize ml-1 flex-1">Medic-EMR</strong>

      </div>
      
      <!-- end navbar content toggle -->

      <!-- navbar content -->
      <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
        <!-- left -->
    
        <!-- end left -->      
          <!-- right -->
        <div class="flex flex-row-reverse items-center"> 

          <!-- user -->
          <div class="dropdown relative md:static">

            <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
              <div class="w-8 h-8 overflow-hidden rounded-full">
                  <img class="w-full h-full object-cover" src="<?php echo e(asset('frontend/img/user.svg')); ?>" >
              </div> 

              <div class="ml-2 capitalize flex ">
                <strong class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none"></strong>
              
                    <!-- Topbar Navbar -->
                  
                </nav>
                <!-- End of Topbar -->
              </div>                        
            

            <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">
     
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

    <x-app-layout >
    <body>
        <div class="">
                <div class="bg-gray-400 overflow-hidden sm:rounded-lg">
                @livewire('hospital.doctor.appointments')
                </div>
        </div> 
    </body>
    </x-app-layout >
