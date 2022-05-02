<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use App\Models\Patientss;

class RegisterPatient extends Component
{
    use WithFileUploads;

    public $firstname; public $lastname; public $phone_no; public $profile_pic; public $patient_id; public $date_of_birth; public $email;
    public $religion;public $blood_group;public $kebele;public $zone;public $woreda;public $region;public $cityname;public $middelname;public $sex;

    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        Patientss::create($this->modeldata());
        session()->flash('message', 'patient registered  Successfully.');
        $this->reset();
    }    
    /**
     * modelData
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'sex'=>$this->sex,
            'middelname'=>$this->middelname,
            'patient_id'=>$this->patient_id,
            'phone_no'=>$this->phone_no,
            'email'=>$this->email,
            'religion'=>$this->religion,
            'profil_pic'=>$this->profile_pic,
            'data_of_birth'=>$this->date_of_birth,
            'blood_group'=>$this->blood_group,
           
            'region'=>$this->region,
            'zone'=>$this->zone,
            'woreda'=>$this->woreda,
            'kebele'=>$this->kebele,
            'cityname'=>$this->cityname,
        ];
    }    
    /**
     * validation rule
     *
     * @return void
     */
    public function rules()
    {
        return [
            'firstname'=>'required',
            'lastname'=>'required',
            'middelname'=>'required',
            'region'=>'required',
            'profile_pic'=>'required',
            'patient_id'=>'required',
            'date_of_birth'=>'required',
            'woreda'=>'required',
            
        ];
    }
    public function render()
    {
        return view('livewire.hospital.reception.register-patient');
    }
}
