            <!-- Content header -->
            <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
              <h1 class="text-2xl font-semibold"></h1>
             
            </div>
            <!-- Content -->
            <div class="mt-2">
              <!-- State cards -->
              <div class=" flex flex-row ml-10 gap-10 p-8 lg:grid-cols-2 xl:grid-cols-4">
                <div class="flex items-center p-6 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <div class="p-3 mr-4 text-orange-800 bg-gray-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" ></path>
                    </svg>
                  </div>
                <div>
                  <p  class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                      <strong>Total Users</strong></p>
                    <p  class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{$TotalUsers}}
                    </p>
                  </div>
                </div>

                <div class="flex items-center p-6 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <div class="p-3 mr-4 text-green-800 bg-red-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" ></path>
                    </svg>
                  </div>
                <div>
                  <p  class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                      <strong>Total Patients</strong></p>
                    <p  class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                   {{$TotalPatient}}
                    </p>
                  </div>
                  
                </div>
                <div class="flex items-center p-6 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <div class="p-3 mr-4 text-orange-800 bg-green-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" ></path>
                    </svg>
                  </div>
                <div>
                  <p  class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                       <strong>Total Doctors</strong></p>
                    <p  class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                      {{$TotalDoctor}}
                    </p>
                  </div>
                </div>

                 <div class="flex items-center p-6 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <div class="p-3 mr-4 text-gray-800 bg-red-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" ></path>
                    </svg>
                  </div>
                <div>
                  <p  class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                      <strong>Total  Hospitals</strong></p>
                    <p  class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                      {{$TotalHospital}}
                    </p>
                  </div>
                </div>
            </div>
          </div>