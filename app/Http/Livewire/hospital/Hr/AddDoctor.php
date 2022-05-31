<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class AddDoctor extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $modelFormVisible, $modalConfirmDeleteVisible, $modalViewDetailVisible=false;
    public $doctors;
    public $modelId;
    public $first_name, $last_name, $user_id, $organization_id=NULL, $sex, $password,
           $email, $date_of_birth, $profile_pic, $phone, $address, $hospital_id, $hospital_name,
           $department, $hospitals, $shift =[''], $role=5, $speciality;


    /**
     * create store data to database
     *;
     * @return void
     */
    public function CreateDoctor()
    {
        $this->validate();
        //dd(3);
        $this->user_id = Auth()->user()->id;
        $hospital_name = Hospital::where('user_id', $this->user_id)->first()->id;

        $user = User::create($this->userModelData());
        $doctor = Doctor::create($this->doctorModelData());
        $doctor->user_id = $user->id;
        $doctor->hospitals()->sync($hospital_name);
        session()->flash('message', 'Doctor registered Successfully.'); 
        $this->reset();
    }

    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->validate();
        Doctor::find($this->modelId)->update($this->modelData());
        $this->modelFormVisible= false;
        $this->reset();
    }

    /**
     * delete
     *
     * @return void
     */
    public function delete()
    {
        Employe::destroy($this->modelId);
        $this->modalConfirmDeleteVisible=false;
        $this->resetpage();
    }

    /**
     * modelData
     *
     * @return void
     */
    public function userModelData()
    {
        return [
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'password'=>$this->password,
            'email'=>$this->email,
            'organization_id'=>$this->organization_id,
            'role'=>6,
            'sex'=>$this->sex,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'date_of_birth'=>$this->date_of_birth,
            'profile_pic'=>$this->profile_pic,
            'password' => Hash::make($this->password),
        ];
    }

    public function doctorModelData()
    {
        $this->user_id = Auth()->user()->id;
        $hospitals = Hospital::where('user_id', $this->user_id)->first();
        $this->hospitals = $hospitals->id;

        return [
            'user_id'=>$this->user_id,
            'shift'=>$this->shift,
            'department'=>$this->department,
            'speciality'=>$this->speciality,
        ];
    }

    /**
     * rules validate
     *
     * @return void
     */
    public function rules()
    {
        return [
            'first_name' => 'required', 
        ];
    }
    /**
     * read
     *
     * @return void
     */
    public function read()
    {
      return Doctor::paginate(5);
    }

    public function render()
    {
        return view('livewire.hospital.hr.add-doctor');
    }
}
