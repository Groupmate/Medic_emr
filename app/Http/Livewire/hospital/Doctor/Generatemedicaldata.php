<?php

namespace App\Http\Livewire\Hospital\Doctor;

use Livewire\Component;

class Generatemedicaldata extends Component
{
    protected $listeners = ['generatemedicaldata' => 'render'];
    
    public function render()
    {
        // dd('one');
        return view('livewire.hospital.doctor.generatemedicaldata');
    }
}
