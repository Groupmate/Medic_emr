<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component; 
use Livewire\WithFileUploads;
use App\Models\Patient;
use App\Models\Organization;
use Illuminate\Validation\Rule;
use Livewire\WithPagination; 

class Registerpatient extends Component
{
    use WithFileUploads;

    public $name, $firstname, $middle_name, $lastname, $email, $national_id, $phone_no, $age,
           $sex, $date_of_birth, $profile_picture, $kebele, $woreda, $city, $zone, $region;

    public function createPatient()
    {   
        $this->validate();         
        Patient::create($this->modeldata());
        session()->flash('message', 'Succesfully Registered the patient!'); 
        $this->profile_picture->store('patient/images', 'public');
        $this->reset();
    }

    public function rules()
    {
        return[
            'firstname' => 'required',
            'middle_name'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required', 
            'national_id'=> 'required|unique:patients',
            'phone_no'=> 'required|size:13',            
            'sex'=> 'required',
            'date_of_birth'=> 'required',
            'profile_picture'=>  'required', 
            'kebele'=>  'required',
            'woreda'=>  'required',
            'city'=>  'required',
            'zone'=> 'required',
            'region'=> 'required',
        ];
    }

    public function modeldata()
    {
        return[
            'firstname'=>$this->firstname,
            'middle_name'=>$this->middle_name,
            'lastname'=>$this->lastname,
            'email'=>$this->email, 
            'national_id'=>$this->national_id,
            'phone_no'=>$this->phone_no,            
            'sex'=>$this->sex,
            'date_of_birth'=>$this->date_of_birth,
            'profile_picture'=> $this->profile_picture, 
            'kebele'=>$this->kebele,
            'woreda'=>$this->woreda,
            'city'=>$this->city,
            'zone'=>$this->zone,
            'region'=>$this->region,
        ];
    }

    public function read()
    {
        //return Organization::paginate(5);
    }
    public function render()
    {
        return view('livewire.hospital.reception.registerpatient');
    }
}
