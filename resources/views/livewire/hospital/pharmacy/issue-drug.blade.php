<div class="mt-10 sm:mt-0">
<table class="table-auto w-3/4 whitespace-nowrap ">
    <thead class="text-purple-500 p-4">
        <tr >
            <th  class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wide">patient name</th>
            <th  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Drug name</th>
            <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Quantity</th>
            <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold  text-purple-500 uppercase tracking-wider">Action</th>
        
        </tr>
    </thead>
    <tbody>
      <tr class="border-b">
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
             
              </td>
        </tr>
        @foreach ($orderProducts as $index => $orderProduct)
                        <tr>
                           <td>
                            <input type="text"
                                    name="orderProducts[{{$index}}][product_id]"
                                    class="form-control"
                                    wire:model="orderProducts.{{$index}}.product_id" />
                            </td>
                            <td>
                                <input type="number"
                                       name="orderProducts[{{$index}}][quantity]"
                                       class="form-control"
                                       wire:model="orderProducts.{{$index}}.quantity" />
                            </td>
                            <td>
                                <a href="#" wire:click.prevent="removeProduct({{$index}})">Delete</a>
                            </td>
                        </tr>
        @endforeach
    </tbody>
</table>
             <div class="row">
                    <div class="col-md-12">
                        <button class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 rounded"
                            wire:click.prevent="addProduct">+</button>
                    </div>
                </div>
</div>