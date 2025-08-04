<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\Support\Facades\Session;

class CrudController extends Controller
{
    public function showData()
    {
        //$showData = crud::all();
        $showData = crud::paginate(5);
        //$showData = crud::simplePaginate(5);


        return view('show_data' , compact('showData'));
    }
    public function addData()
    {
        return view('add_data');
    }
    public function storeData(UserRequest $request)
    {

        $crud = new Crud();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->address = $request->address;
        $crud->phone = $request->phone;
        $crud->save();
        Session::flash('msg', 'Data Successfully added');
        return to_route('crud.index') ;
    }
    public function editData($id=null)
    {
        $editData =Crud::find($id);

        return view('edit_data', compact('editData'));
    }

     public function updateData(UserRequest $request, $id)
    {

        $crud = Crud::find($id);
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->address = $request->address;
        $crud->phone = $request->phone;
        $crud->save();
        Session::flash('msg', 'Data Successfully updated');
        return to_route('crud.index') ;
    }
    public function deleteData($id=null)
    {
        $deleteData=Crud::find($id);
        $deleteData->delete();
        Session::flash('msg', 'Data Successfully deleted');
        return to_route('crud.index') ;
    }
}

