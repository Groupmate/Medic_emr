<?php

namespace App\Http\Livewire\Hospital\Hr;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Employe;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
class Employee extends Component
{
    use WithFileUploads;
    use WithPagination; 


    public $modelFormVisible=false; public $modalConfirmDeleteVisible=false; public $modalViewDetailVisible=false;
    public $employes;    public $modelId;
    public $images=[];
    public $first_name;  public $middel_name;  public $last_name;  public $user_id; public $organization_id; public $age;
    public $sex;  public $password; public $email; public $birth_date; public $image; public $type; public $phone; public $address;    
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
     * create store data to database
     *;
     * @return void
     */
    public function create()
    {
        foreach($this->images as $key=>$image){
            $this->images[$key]= $image->store('image','public');
        }
        $this->images =json_encode($this->images);
        $this->validate();
       Employe::create($this->modeldata());
       session()->flash('message', 'Employee registered Successfully.');
        $this->modelFormVisible= false;
        $this->resetvars();
    }     
    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->validate();
        Employe::find($this->modelId)->update($this->modelData());
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
        Employe::destroy($this->modelId);
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
        $this->modelId =null;
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
    /**
     * loadModel in edit get old value
     *
     * @return void
     */
    public function loadModel()
    {
        $employes=Employe::find($this->modelId);
            $this->first_name= $employes->first_name;
            $this->middel_name= $employes->middel_name;
            $this->last_name= $employes->last_name;
            $this->age= $employes->age;
            $this->user_id= $employes->user_id;
            $this->phone= $employes->phone;
            $this->address= $employes->address;
            $this->email= $employes->email;
            $this->sex= $employes->sex;
            $this->image= $employes->image;
            $this->organization_id= $employes->organization_id;
            $this->birth_date= $employes->birth_date;
            $this->type= $employes->type;
        
    }     
    /**
     * read
     *
     * @return void
     */
    public function read()
    {
      return Employe::paginate(5);
    }    
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        $employes = Employe::latest()->paginate(5);
        return view('livewire.hospital.hr.employee',[ 'employes'=>$this->read(), 
        $this->employes=Employe::all(),]);
    }
}