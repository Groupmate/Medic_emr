<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\Employee;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class AddEmployee extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $modelFormVisible, $modalConfirmDeleteVisible, $modalViewDetailVisible=false;
    public $employees;
    public $modelId;
    public $first_name, $last_name, $user_id, $organization_id=NULL, $sex, $password,
           $email, $date_of_birth, $profile_pic, $phone, $address, $hospital_id, $hospital_a,
           $department, $hospitals, $shift =[''], $role;


    /**
     * create store data to database
     *;
     * @return void
     */
    public function CreateEmployee()
    {

        $this->validate();

        $Employee = Employee::create($this->employeeModelData());
        User::create($this->userModelData());
        session()->flash('message', 'Employee registered Successfully.');
        $this->modelFormVisible= false;
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
        Employee::find($this->modelId)->update($this->modelData());
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
            'role'=>$this->role,
            'sex'=>$this->sex,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'date_of_birth'=>$this->date_of_birth,
            'profile_pic'=>$this->profile_pic,
            'password' => Hash::make($this->password),
        ];
    }

    public function employeeModelData()
    {
        $this->user_id = Auth()->user()->id;
        $hospital_a = Hospital::where('user_id', $this->user_id)->first();

        return [
            'hospital_id'=>$hospital_a->id,
            'user_id'=>$this->user_id,
            'shift'=>$this->shift,
            'department'=>$this->department,
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
            'last_name' => 'required',
            'email' => ' required',
            'password' =>'required',
            'profile_pic'=>'required',
            'role'=>'required',
            'sex'=>'required',
            'phone'=>'required',
            'shift'=>'required',
            'department'=>'required',
            'address'=>'required',
            'date_of_birth'=>'required',
        ];
    }
    /**
     * loadModel in edit get old value
     *
     * @return void
     */
    public function loadModel()
    {
        $employees=Employee::find($this->modelId);

        $this->first_name= $employees->first_name;
        $this->hospital_id= $employees->hospital_id;
        $this->last_name= $employees->last_name;
        $this->role= $employees->role;
        $this->user_id= $employees->user_id;
        $this->phone= $employees->phone;
        $this->address= $employees->address;
        $this->email= $employees->email;
        $this->sex= $employees->sex;
        $this->profile_pic= $employees->profile_pic;
        $this->organization_id= $employees->organization_id;
        $this->$date_of_birth= $employees->$date_of_birth;
    }
    /**
     * read
     *
     * @return void
     */
    public function read()
    {
      return Employee::paginate(5);
    }

    public function render()
    {
        return view('livewire.hospital.hr.add-employee',[ 'employes'=>$this->read(),
                    $this->employees=Employee::all(),
                    $this->hospitals=Hospital::all(),]
                );
    }
}
