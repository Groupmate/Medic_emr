 <!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Tailwind is included -->

  <link href="{{ asset('csss/main1.css?v=1628755089081') }}" rel="stylesheet">
  <link href="{{ asset('frontend/csss/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>
</head>

<body>

<div id="app">
    <nav id="navbar-main" class="navbar is-fixed-top">
        <div class="navbar-brand">
            <div class="navbar-brand">
            <a class="navbar-item mobile-aside-button">
                <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>

            </a>
            </div>

        </div>
            <div class="navbar-item dropdown has-divider has-user-avatar">
                <a class="navbar-link">
               
                </a>
                <div class="navbar-dropdown">
                <a href="profile.html" class="navbar-item">
                    <span class="icon"><i class="mdi mdi-account"></i></span>
                    <span>My Profile</span>
                </a>
                <a class="navbar-item">
                    <span class="icon"><i class="mdi mdi-settings"></i></span>
                    <span>Settings</span>
                </a>
                <a class="navbar-item">
                    <span class="icon"><i class="mdi mdi-email"></i></span>
                    <span>Messages</span>
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                    <span class="icon"><i class="mdi mdi-logout"></i></span>
                    <span>Log Out</span>
                </a>
                </div>
            </div>

            <a title="Log out" class="navbar-item desktop-icon-only">
                <span class="icon"><i class="mdi mdi-logout"></i></span>
                <span>Log out</span>
            </a>
            </div>
        </div>
    </nav>

    <aside class="aside is-placed-left is-expanded">
        <div class="aside-tools flex">
            <div class="flex">
                <div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
                    <div class="flex-none w-56 flex flex-row items-center">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg3.svg" alt="logo" />
                        
                        <strong class="capitalize ml-1 flex-1">Medic-EMR</strong>

                    </div>
                </div>   
                <div class="flex-row justify-end  mt-4 ">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        
           <div class="flex flex-col ml-4 bg-white">

          <!-- sidebar toggle -->
          <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
            </button>
          </div>  
          <!-- end sidebar toggle -->
              </a>  
              <div id="dropdown" x-show="show" class="ml-1">
                 <a href="/dashboard" class=" mblock px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fas fa-desktop text-xl mr-2"></i>
                  Dashboard
                 </a>
                 <hr class="border-t border-gray-200 my-0"><br>
                
                <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="/generatemedicaldata/{{$id}}">
                    <i class="far fa-briefcase-medical text-xl mr-2"></i>
                    Generate Medical data
                </a>
                <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="/viewpatienthistory/{{$id}}">
                  <i class="far fa-briefcase-medical text-xl mr-2"></i>
                  View Patient history
                </a>
                <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="/appointments/{{$id}} ">
                    <i class="far fa-calendar-check text-xl mr-2"></i>
                    Add Appointement</a>
                </a>
                <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="/bedassignment/{{$id}}">
                    <i class="far fa-procedures text-xl mr-2"></i>
                    Assign-Bed</a>
                <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="/referpatient/{{$id}}">
                  <i class="far fa-ambulance text-xl mr-2"></i>
                    Refer Patient 
                </a>
                <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="/requestexaminationtest/{{$id}}">
                    <i class="far fa-briefcase-medical text-xl mr-2"></i>
                    Request Examination Test
                </a>
                
                <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="/prescribe-medicaldrug/{{$id}}">
                    <i class="far fa-pills text-xl mr-2"></i>
                Perscribe Drug
                </a>         
                <a  class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="/medcertificate/{{$id}}">
                    <i class="far fa-file-certificate text-xl mr-2"></i>
                Generate Medical Certificate
                </a>
             
                <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
                 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                      <span i class="fas fa-lock"></i></i></span>
                      {{ __('Logout') }}
                  </a>

                </a>
              
                {{-- <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                <i class="fas fa-file-chart-line text-xl mr-2"></i>
                    Reports
                </a>  --}}
                <br><br><br>
               </a>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
  
              </div>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

          </div>
        
        </li>
        </ul>
        </div>
    </aside>
