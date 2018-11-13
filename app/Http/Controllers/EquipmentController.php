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

    public function add_equipment(Request $request)
    {

        $locations = Equipment::where('current_location','!=','')->select('current_location')->groupBy('current_location')->get();
        $categories = Equipment::where('category','!=','')->select('category')->groupBy('category')->get();
        return view ('equipment/add-equipment',compact('locations','categories'));
    }


     public function view_equipment(Request $request)
    {

      $equipment = Equipment::find($request->eid);
      return view('equipment.equipment',compact('equipment'));
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
