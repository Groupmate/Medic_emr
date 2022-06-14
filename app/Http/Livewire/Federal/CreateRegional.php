<?php

namespace App\Http\Livewire\Federal;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use App\Models\Organization;
use App\Models\User;

class CreateRegional extends Component
{
    use WithPagination;

    public $modelFormVisible, $modalConfirmDeleteVisible, $modalViewDetailVisible=false;
    public $name, $user_id ,$type, $zone, $woreda, $kebele, $region, $city, $organizations, $modelId, $users, $user;

    /**
     * createShowModel show modal
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
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
    public function deleteShowModal($id)
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
    public function viewShowModal($id)
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
        $organizations=Organization::find($this->modelId);
        $this->name= $organizations->name;
        $this->user_id= $organizations->user_id;
        $this->type= $organizations->type;
        $this->region= $organizations->region;
        $this->zone= $organizations->zone;
        $this->woreda= $organizations->woreda;
        $this->kebele= $organizations->kebele;
        $this->city= $organizations->city;
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
            'user_id'=>$this->user_id,
            'type'=>$this->type,
            'region'=>$this->region,
            'zone'=>$this->zone,
            'woreda'=>$this->woreda,
            'kebele'=>$this->kebele,
            'city'=>$this->city,
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
        $organization = Organization::create($this->modeldata());
        $user = User::where('id', $this->user_id)->first();
        $user->update(['organization_id' => $organization->id]);
        session()->flash('message', 'Health Bureau registered Successfully.');
        $this->modelFormVisible= false;
        $this->reset();
    }

    /**
     * update the data
     *
     * @return void
     */
    public function update()
    {
        $this->validate();
        $organization = Organization::find($this->modelId)->update($this->modelData());
        // $user = User::where('id', $this->user_id)->first();
        // $user->update(['organization_id' => $organization->id]);
        $this->modelFormVisible= false;
        $this->reset();
    }

    /**
     * delete THE ORGAN
     *
     * @return void
     */
    public function delete()
    {
        Organization::destroy($this->modelId);
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
            'user_id'=>'required',
            'type'=>'required',
            'region'=>'required',
            'zone'=>'required',
            'woreda'=>'required',
            'kebele'=>'required',
            'city'=>'required',
        ];
    }

    /**
     * read function
     *
     * @return void
     */
    public function read()
    {
        return Organization::paginate(5);
    }

    /**
     * display organizations based on
     * their type when executing the
     * regional and zonal level
     *
     * @return void
     */
    public function render()
    {
        $organization = Organization::latest()->paginate(5);

        return view('livewire.federal.create-regional',[ 'organizations'=>$this->read(),
                $this->organizations=Organization::whereIn('type' , [1,2,3])->get(),
                $this->users = User::whereNull('organization_id')->where('role', '=', 2)->get(),
            ]);
    }
}
