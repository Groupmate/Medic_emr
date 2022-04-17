<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use App\Models\Organization as Organ;

class Organization extends Component
{
    use WithPagination;

    public $modelFormVisible=false;
    public $modalConfirmDeleteVisible=false;
    public $modalViewDetailVisible=false;
    public $name;
    public $manager_id;
    public $type;
    public $zone;
    public $woreda;
    public $kebele;
    public $region;
    public $city_name;
    public $organizations;
    public $modelId;

    /**
     * createShowModel show modal
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
     * updateShowModal show update mode model
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
     * deleteShowModel delete show model
     *x
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
     * loadModel the past value when update
     *
     * @return void
     */
    public function loadModel()
    {
        $organizations=Organ::find($this->modelId);
        $this->name= $organizations->name;
        $this->manager_id= $organizations->manager_id;
        $this->type= $organizations->type;
        $this->region= $organizations->region;
        $this->zone= $organizations->zone;
        $this->woreda= $organizations->woreda;
        $this->kebele= $organizations->kebele;
        $this->city_name= $organizations->city_name;
    }

    /**
     * modelData
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'name'=>$this->name,
            'manager_id'=>$this->manager_id,
            'type'=>$this->type,
            'region'=>$this->region,
            'zone'=>$this->zone,
            'woreda'=>$this->woreda,
            'kebele'=>$this->kebele,
            'city_name'=>$this->city_name,
        ];
    }

    /**
     * store data into database
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        Organ::create($this->modeldata());
        $this->modelFormVisible= false;
        $this->resetvars();
    }

    /**
     * update the data
     *
     * @return void
     */
    public function update()
    {
        $this->validate();
        Organ::find($this->modelId)->update($this->modelData());
        $this->modelFormVisible= false;
        $this->resetvars();
    }

    /**
     * delete THE ORGAN
     *
     * @return void
     */
    public function delete()
    {
        Organ::destroy($this->modelId);
        $this->modalConfirmDeleteVisible=false;
        $this->resetpage();
    }

    /**
     * rules validate the form
     *
     * @return void
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'manager_id'=>'required',
            'type'=>'required',
            'region'=>'required',
            'zone'=>'required',
            'woreda'=>'required',
            'kebele'=>'required',
            'city_name'=>'required',
        ];
    }

    /**
     * resetvars clean the form after
     *
     * @return void
     */
    public function resetvars()
    {
        $this->modelId =null;
        $this->name=null;
        $this->manager_id=null;
        $this->type=null;
        $this->region=null;
        $this->zone=null;
        $this->woreda=null;
        $this->kebele=null;
        $this->city_name=null;
    }

    /**
     * read function
     *
     * @return void
     */
    public function read()
    {
        return Organ::paginate(5);
    }

    public function render()
    {
        $organs = Organ::latest()->paginate(5);

        return view('livewire.organization',[ 'organizations'=>$this->read(), $this->organizations=Organ::all(),]);
    }
}
