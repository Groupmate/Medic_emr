<?php

namespace App\Http\Livewire\Hospital\Pharmacy;

use Livewire\Component;

class IssueDrug extends Component
{
    public $orderProducts = [];
    public $allProducts = [];

    public function mount()
    {
     
        $this->orderProducts = [
            ['product_id' => '', 'quantity' => 1]
        ];
    }

    public function addProduct()
    {
        $this->orderProducts[] = ['product_id' => '', 'quantity' => 1];
    }
    public function render()
    {
        info($this->orderProducts);
        return view('livewire.hospital.pharmacy.issue-drug');
    }
}
