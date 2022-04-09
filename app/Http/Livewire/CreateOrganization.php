<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateOrganization extends Component
{
    public $modelFormVisible=true;
    public $name;
    public $manager;
    public $type;
    public $region;
    public $city_name;

    public function createShowModel()
    {
       $this->modelFormVisible=true;
    }
    public function render()
    {
        return view('livewire.create-regionalbureau')->layout('layouts.base');
    }
}
