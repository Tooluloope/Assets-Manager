<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumable;

use Illuminate\Support\Facades\Validator;
class ConsumableController extends Controller
{
    
    public function index()
    {
    	$consumables = Consumable::get();
    	##return var_dump($equipments);
    	return view('consumables.view-consumables',compact('consumables'));
    }


    public function create(Request $request)
    {

       if ($request->isMethod('post')) {
           $validator = Validator::make($request->all(), [
                'name' => 'required',
                'category' => 'required',
                'quantity' => 'required',
                'uom' => 'required',
                'current_location' => 'required',
    
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $consumable = new Consumable();
            $consumable->fill($request->except('_token'));
            $consumable->save();
            return redirect()->back()->with('message','Consumable Created succesfully');

        }

        $uoms = Consumable::where('uom','!=','')->select('uom')->groupBy('uom')->get();
        $categories = Consumable::where('category','!=','')->select('category')->groupBy('category')->get();
        return view ('consumables.add-consumables',compact('uoms','categories'));
    	
    }

    public function delete($id)
    {
    	$consumable = Consumable::where('id',$id)->first();
    	if (!isset($consumable->id)) {
    		return redirect()->back()->with('message',"Consumable already deleted or doesn't exist");
    	}
    	$consumable->delete();
    	return redirect()->back()->with('message','Consumable Deleted succesfully');
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

            $consumable = Consumable::where('id',$id)->first();
    	if (!isset($consumable->id)) {
    		return redirect()->back()->with('message',"Consumable already deleted or doesn't exist");
    	}
    	$consumable->update($request->except('_token'));
    	return redirect()->back()->with('message','Consumable Updated succesfully');

    }


}
