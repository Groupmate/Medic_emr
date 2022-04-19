<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Employe;
use Illuminate\Validation\Rule;
class Employee extends Component

{
    use WithFileUploads;
    public $modelFormVisible=false;
    public $employes;
    public $first_name;  public $middel_name;  public $last_name;  public $user_id; public $organization_id; public $age;
    public $sex;  public $password; public $email; public $birth_date; public $image; public $type; public $phone; public $address;
    public function createShowModal()
    {
        $this->resetValidation();
         $this->resetVars();
       $this->modelFormVisible=true;

    }          
    /**
     * create store data to database
     *;
     * @return void
     */
    public function create()
    {
        $this->validate();
       Employe::create($this->modeldata());
        $this->modelFormVisible= false;
        $this->resetvars();
    }    
    /**
     * modelData
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'first_name'=>$this->first_name,
            'middel_name'=>$this->middel_name,
            'last_name'=>$this->last_name,
            'password'=>$this->password,
            'email'=>$this->email,
            'user_id'=>$this->user_id,
            'organization_id'=>$this->organization_id,
            'type'=>$this->type,
            'age'=>$this->age,
            'sex'=>$this->sex,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'birth_date'=>$this->birth_date,
            'image'=>$this->image,
           
        ];
    }    
    /**
     * resetvars reset values
     *
     * @return void
     */
    public function resetvars()
    {
       
        $this->first_name=null;
        $this->middel_name=null;
        $this->last_name=null;
        $this->email=null;
        $this->password=null;
        $this->user_id=null;
        $this->organization_id=null;
        $this->type=null;
        $this->age=null;
        $this->sex=null;
        $this->image=null;
        $this->birth_date=null;
        $this->phone=null;
        $this->address=null;
       
    }    
    /**
     * rules validate
     *
     * @return void
     */
    public function rules()
    {
        return [
            'first_name'=>'required',
            'middel_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'user_id'=>'required',
            'organization_id'=>'required',
            'image'=>'required',
            'type'=>'required',
            'age'=>'required',
            'sex'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'birth_date'=>'required',
        ];
    }
    public function render()
    {
        return view('livewire.employee');
    }
}
