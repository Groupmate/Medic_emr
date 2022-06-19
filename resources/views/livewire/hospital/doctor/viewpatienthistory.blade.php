<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-1">
  @forelse ($medicaldata as $medicaldata) 
    <div class="rounded overflow-hidden shadow-lg">
       
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">  Dignosis Information </div> 
                <p class="text-gray-700 text-base">
                @foreach ($medicaldata->diagnosis_info as $diagnosis_info)
                    {{ $diagnosis_info }}
                @endforeach
                </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black-700 mr-2 mb-2">
              @foreach ($medicaldata->numerical_info as $numerical_info)
                {{ $numerical_info }}
              @endforeach
            </span>
           
        </div>
        <div class="px-6 pt-4 pb-2">
            @foreach ($medicaldata->disease as $disease)
                {{ $disease }}
            @endforeach
        </div>
    </div>
        @empty
            #No Data Generated Medical Data
    @endforelse
</div>
