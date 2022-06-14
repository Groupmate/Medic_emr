<div>
    @forelse ($medicaldata as $medicaldata) 
        <article class="flex flex-col shadow my-4"> 
        <div class="bg-white flex flex-col justify-start p-6">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                @foreach ($medicaldata->diagnosis_info as $diagnosis_info)
                {{ $diagnosis_info }}</a>
                @endforeach
            <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4"> 
                @foreach ($medicaldata->numerical_info as $numerical_info)
                {{ $numerical_info }}</a>
                @endforeach
            </a>
            <p href="#" class="text-sm pb-3">
                    <a href="#" class="font-semibold hover:text-gray-800">
                    @foreach ($medicaldata->disease as $disease)
                    {{ $disease }}</a>
                    @endforeach</a>
            </p>
            <a href="#" class="pb-6"> {{ $medicaldata->description }}</a>
        </div>
        </article>
    @empty
        Are you crazy did you put anything out here 
    @endforelse
</div>
