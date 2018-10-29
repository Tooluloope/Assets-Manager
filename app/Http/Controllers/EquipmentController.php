<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{
    
    public function index()
    {
    	$equipments = Equipment::get();
    	##return var_dump($equipments);
    	return view('equipment.view-equipments',compact('equipments'));
    }


    public function create(Request $request)
    {
    	$validator = Validator::make($request->all(), [
                'name' => 'required',
                'category' => 'required',
               

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $equipments = new Equipment();
            $equipments->fill($request->except('_token'));
            $equipments->save();
            return redirect()->back()->with('message','Equipment Created succesfully');
    }

    public function delete($id)
    {
    	$equipment = Equipment::where('id',$id)->first();
    	if (!isset($equipment->id)) {
    		return redirect()->back()->with('message',"Equipment already deleted or doesn't exist");
    	}
    	$equipment->delete();
    	return redirect()->back()->with('message','Equipment Deleted succesfully');
    }

    public function update(Request $request)
    {
    	$validator = Validator::make($request->all(), [
                'name' => 'required',
                'category' => 'required',
               

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $equipment = Equipment::where('id',$id)->first();
    	if (!isset($equipment->id)) {
    		return redirect()->back()->with('message',"Equipment already deleted or doesn't exist");
    	}
    	$equipment->update($request->except('_token'));
    	return redirect()->back()->with('message','Equipment Updated succesfully');

    }


}
