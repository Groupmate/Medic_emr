<?php

namespace App\Http\Livewire\Zonal;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use App\Models\Hospital;
use App\Models\User;

class CreateHospital extends Component
{
    use WithPagination;

    public $modelFormVisible, $modalConfirmDeleteVisible, $modalViewDetailVisible=false;
    public $name, $user_id, $hospital_id ,$type, $zone, $woreda, $kebele, $region, $city, $hospitals, $modelId, $users, $user;

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
        $hospitals=Hospital::find($this->modelId);
        $this->name= $hospitals->name;
        $this->user_id= $hospitals->user_id;
        $this->type= $hospitals->type;
        $this->region= $hospitals->region;
        $this->zone= $hospitals->zone;
        $this->woreda= $hospitals->woreda;
        $this->kebele= $hospitals->kebele;
        $this->city= $hospitals->city;
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
        $hospital = Hospital::create($this->modeldata());
        $FetchHospital = DB::select('select * from hospitals where user_id = ?',[$this->user_id]);
        // dd($FetchHospital);
        foreach($FetchHospital as $fetchHospital){
            $this->hospital_id = $fetchHospital->id;
        }
        $user = User::where('id', $this->user_id)->first();
        $user->update(['organization_id' => $this->hospital_id]);
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
        $hospital = Hospital::find($this->modelId);
        $user = User::where('id', $hospital->user_id)->first();
        $user->update(['organization_id' => null]);
        Hospital::find($this->modelId)->update($this->modelData());
        $FetchHospital = DB::select('select * from hospitals where user_id = ?',[$this->user_id]);
        // dd($FetchHospital);
        foreach($FetchHospital as $fetchHospital){
            $this->hospital_id = $fetchHospital->id;
        }
        $user = User::where('id', $this->user_id)->first();
        $user->update(['organization_id' =>$this->hospital_id]);
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
        $user = User::where('id', $this->user_id)->first();
        $user->update(['organization_id' =>null]);
        Hospital::destroy($this->modelId);
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
        //return Hospital::paginate(5);
    }

    /**
     * display hospitals based on
     * their type when executing the
     * regional and zonal level
     *
     * @return void
     */
    public function render()
    {
        $hospital = Hospital::latest()->paginate(5);
        //$manager = User::where('id', $this->user_id)->first();
        return view('livewire.zonal.create-hospital', [ 'hospitals'=>$this->read(),
            $this->hospitals = Hospital::where('type' , 'hospital')->get(),
            $this->users = User::whereNull('organization_id')->where('role', '=', 4)->get(),
        ]);
    }
}
