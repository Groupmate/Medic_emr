<?php

namespace App\Http\Livewire\Zonal;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateHospitalManager extends Component
{
    public $first_name, $last_name, $email, $orgn_id, $phone, $address, $sex, $date_of_birth, $password, $role;
    public $modelId;
    
    /**
     * create()-a method to crate a hospital manager/hr at zonal level
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        User::create($this->modeldata());
        session()->flash('message', 'Hospital manager registered Successfully.');
        $this->reset();
    }

    public function rules()
    {
        return [
            'first_name'=>'required',
        ];
    }

    public function modeldata()
    {
        return[
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
            'orgn_id'=>$this->orgn_id,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'sex'=>$this->sex,
            'date_of_birth'=>$this->date_of_birth,
            'profile_pic'=> "asfas",
            'password' => Hash::make($this->password),
            'role'=>$this->role,
        ];
    }


    public function render()
    {
        return view('livewire.zonal.create-hospital-manager');
    }
}
