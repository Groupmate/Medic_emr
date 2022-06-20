

<div class="p-6">
    <table class="w-full leading-normal">
            <thead class="text-purple-500">
                <tr >
                    <th  class="px-4 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">drug name</th>
                    <th  class="px-4 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">quantity</th>
                    <th  class="px-4 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">expired_date</th>

                </tr>
            </thead>
            <tbody>
                @forelse($medical_drug as $medical_drug)
                    <tr>
                    <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm">{{$medical_drug->name}}</td>
                        <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm">{{$medical_drug->quantity}}</td>
                        <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm">{{$medical_drug->expired_date}}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm">
                        <td class="px-4 py-3 border-b border-black-200 bg-white text-lg">No medical drug addede yet!</td>
                        <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm">
                    </tr>
                @endforelse
            </tbody>
    </table>
</div>
