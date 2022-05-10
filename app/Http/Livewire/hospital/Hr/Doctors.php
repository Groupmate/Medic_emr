<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\Doctor;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class Doctors extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $modelFormVisible=false; public $modalConfirmDeleteVisible=false; public $modalViewDetailVisible=false;
    public $employes;    public $modelId;
    public $images=[];
    public $first_name;  public $middel_name;  public $last_name;   public $organization_name; public $department;
    public $sex; public $role; public $password; public $email; public $date_of_birth; public $profile_pic;  public $phone; public $address;

/**
     * createShowModal show modal
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->resetValidation();
         $this->resetVars();
       $this->modelFormVisible=true;

    }
   /**
     * updateShowModal
     *
     * @param  mixed $id
     * @return void
     */
    public function updateShowModal($id)
    {
        $this->modelId = $id;
        $this->modelFormVisible=true;
         $this->loadModel();
    }    
    /**
     * deleteShowModel
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteShowModel($id)
    {
        $this->modelId=$id;
        $this->modalConfirmDeleteVisible=true;
    }    
    /**
     * viewShowModel
     *
     * @param  mixed $id
     * @return void
     */
    public function viewShowModel($id)
    {
        $this->modelId=$id;
        $this->modalViewDetailVisible=true;
        $this->loadModel();
    }    
    /**
     * create
     *
     * @return void
     */
        public function create()
        {
        

               $this->validate();
                Doctor::create($this->modeldata());
                session()->flash('message', 'Doctors Registered Successfully.');
                $this->modelFormVisible= false;
                $this->resetvars();
        }   
        public function update()
        {
            $this->validate();
            Doctor::find($this->modelId)->update($this->modelData());
            $this->modelFormVisible= false;
            $this->resetvars();
        }
    /**
     * delete
     *
     * @return void
     */
        public function delete()
        {
        Doctor::destroy($this->modelId);
            $this->modalConfirmDeleteVisible=false;
            $this->resetpage();
        }
    /**
     * modelData
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'name'=>$this->first_name,
           
            'lastname'=>$this->last_name,
            'middelname'=>$this->middel_name,
            'password' => Hash::make($this->password),
            'email'=>$this->email,
          
             'orgn_id'=>$this->organization_name,
            
            'role'=>$this->role,
            'department'=>$this->department,
            'sex'=>$this->sex,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'date_of_birth'=>$this->date_of_birth,
            'profile_pic'=>$this->profile_pic,

        ];
    }
    /**
     * resetvars reset values
     *
     * @return void
     */
    public function resetvars()
    {
        $this->modelId =null;
        $this->first_name=null;
        
        $this->last_name=null;
        $this->email=null;
        $this->password=null;
        
        $this->organization_id=null;
        $this->type=null;
        $this->role=null;
        $this->department=null;
        $this->sex=null;
        $this->profile_pic=null;
        $this->date_of_birth=null;
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
            
            'last_name'=>'required',
            'middel_name'=>'required',
            'email'=>'required',
            'password'=>'required',
           
             'organization_id'=>'required',
             'profile_pic'=>'required',
           
            'role'=>'required',
            'department'=>'required',
            'sex'=>'required',
            'phone'=>'required',
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
        $employes=Doctor::find($this->modelId);
            $this->first_name= $employes->first_name;
           
            $this->last_name= $employes->last_name;
            $this->middel_name= $employes->middel_name;
            $this->department= $employes->department;
            
            $this->phone= $employes->phone;
            $this->address= $employes->address;
            $this->email= $employes->email;
            $this->sex= $employes->sex;
            $this->profile_pic= $employes->profile_pic;
          
            $this->date_of_birth= $employes->date_of_birth;
           
            $this->role= $employes->role;


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
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        $employes = Doctor::latest()->paginate(5);
        return view('livewire.hospital.hr.doctors',[ 'employess'=> Doctor::latest()->paginate(5)
       ]);
    }
}


   


    
    
   
  
