<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employe;
class Viewemployee extends Component
{
    public $employes;
    public $first_name;  public $middel_name;  public $last_name;  public $user_id; public $organization_id; public $age;
    public $sex;  public $password; public $email; public $birth_date; public $image; public $type; public $phone; public $address;
    public function render()
    {
        return view('livewire.viewemployee');
    }
}
