<div class="mt-10 sm:mt-0">
<table class="table-auto w-3/4 whitespace-nowrap ">
    <thead class="text-purple-500 p-4">
        <tr >
            <th  class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wide">patient name</th>
            <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">prescribed drug</th>
            <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Quantity</th>
            <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Action</th>
        
        </tr>
    </thead>
    <tbody>
    @foreach($prescirbed as $prescirbed)
      <tr class="border-b">
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$prescirbed->patient_id}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
               
           
              </td>
        </tr>
      @endforeach
</div>