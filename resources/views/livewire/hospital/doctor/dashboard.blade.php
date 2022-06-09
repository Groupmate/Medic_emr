 
<!-- start navbar -->

  </div>
  <!-- end sidbar -->

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                         <div class="h6 text-green-700 fad fa-users"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-xs">
                           {{$patient_waiting_count}}
                            <i class="fal fa-chevron-up ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->
    
                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <a href="{{ url('/todayappointments') }}">New assigned patients</a>
                    </div>                
                    <!-- end bottom -->
                    
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
    
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-green-700 fad fa-users"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-xs">
                              {{$NoTodayAppointment}}
                            <i class="fal fa-chevron-up ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->
    
                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>Appointement Visitor</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
         
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-xs">
                             {{-- {{$TotalPatients}} --}}
                            <i class="fal fa-chevron-up ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->
    
                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>Total Patients vist</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
               <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-store"></div>
                        <span class="rounded-full text-white badge bg-red-400 text-xs">
                            2
                            <i class="fal fa-chevron-down ml-1"></i>
                        </span>
                    </div>
                    <!-- end top -->
    
                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5 num-4"></h1>
                        <p>new notifications</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
        <!-- end card -->
    </div>
        <!-- End General Report -->

     <!--Start of charts, bars -->
      
      <br>
      <div class="card p-0 overflow-hidden col-span-2 lg:col-span-1 flex flex-row lg:flex-col">
     
        <!-- right -->
        <div class="border-r border-gray-200 w-2/3 lg:w-full lg:mb-5">
            
            <!-- top -->
            <div class="p-5 flex flex-row flex-wrap justify-between items-center">
                <div class="font-bold text-lg">Monthly and Weekly Trends</div>
                <br>
                  @livewire('statics.hospital-statics')
                <div class="flex flex-row justify-center items-center">
                   
                      
                </div>
            </div>
            <!-- end top -->
    
            <!-- chart -->                
            <div id="SummaryChart"></div>
            <!-- end chart -->
    
        </div>
        <!-- end right -->
    
        <!-- left -->
        <div class="w-1/3 lg:w-full">
            
            <!-- top -->
            <div class="p-2 border-b border-gray-400">
                <h2 class="font-bold text-lg mb-6">List of Appointment Visitor</h2>
                  
                {{-- @foreach($appt as $appts)
                 <div class="flex flex-row justify-between mb-3">
              
                    <div class="">
                        <h4 class="text-gray-900 font-thin">{{  $appts['first_name'] }}  {{  $appts['last_name'] }}</h4><br>
                       <p class="text-red-400 text-xs font-hairline"> {{\Carbon\Carbon::parse($appts['visit_date'])->diffForHumans() }} </p>
                    </div>
                    <div class="text-sm font-medium">
                        <span class="text-red-400">+</span> {{ date('H:i:s', strtotime($appts['visit_date'])) }}
                    </div>
                    
                </div>
                @endforeach  --}}
    
            
    
                  <h2 class="font-bold text-lg mb-2">Today's Progress</h2>
                  <div class="bg-gray-300 h-2 rounded-full mt-2 relative">
                      <div class="rounded-full bg-teal-400 h-full w-3/4 shadow-md"></div>
                  </div>
  
              </div>
            </div>
            <!-- end top -->
    
            <!-- bottom -->
            
           
          </div>

            <!-- end bottom --> 
    
        </div>
        <!-- end left -->
    
    </div>
    
    
    
        <!-- end right -->
    
        <!-- left -->
     
        <!-- end left -->
    
    </div>
            
             
  
       
      
    <!--end of bars and charts-->

        

  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->
