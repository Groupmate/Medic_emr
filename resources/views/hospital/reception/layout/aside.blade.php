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
              <a href="{{ url('') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                  <i class="far fa-clinic-medical text-xl mr-2" ></i>        
                     Home
              </a>   <hr class="border-t border-gray-400 my-0">

                  <div id="dropdown" x-show="show" class="ml-2">
                      <a href="{{ url('/register_patient') }}" class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="far fa-files-medical text-xl mr-2"></i>
                            Add Patient
                        </a>
                      
                      <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                      <i class="far fa-calendar-check text-xl mr-2"></i>
                          Book An Appointement</a>
                      </a>
                      <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                      <i class="far fa-hospital-user text-xl mr-2"></i>
                         Profile
                      </a>
                      <a class="block px-3 py-2  capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500" href="#">
                      <i class="far fa-calendar-check text-xl mr-2"></i>
                          Logout</a>
                      </a>
                      <br>
                      <hr class="border-t border-gray-400 my-0">        
                  </div>
                  <!-- end link -->
                  </div>
                  <!-- end sidebar content -->
              </div>
              <!-- end sidbar  -->
          <!-- middle display --> 
              <div class="bg-gray-100 flex-1 p-4 md:mt-16"> 
              
          
      