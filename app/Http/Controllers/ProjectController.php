<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Manifest;
use App\Models\Personnel;
use App\Models\ProjectEquipment;
use Illuminate\Support\Facades\Validator;
class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        ##$this->middleware('auth');
    }

    public function index()
    {
    	$projects = Project::get();
    	return view('projects.index',compact('projects'));
    }


    public function create(Request $request)
    {
    	$validator = Validator::make($request->all(), [
                'name' => 'required',
                'location' => 'required',
               

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

           $project = Project::create($request->all());

           if ($project) {
           return redirect()->back()->with('message','Project Created succesfully');
           }

    }

    public function update(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
                'name' => 'required',
                'location' => 'required',
               

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }


           $project = Project::where('id',$request->project_id)->update($request->except('_token','project_id'));

           if ($project) {
           return redirect()->back()->with('message','Project updated succesfully');
           }
    }

    public function add_equipment(Request $request)
    {
    	  if ($request->isMethod('post')) {
    	  	$project_equipmet = ProjectEquipment::where('equipment_id',$request->equipment_id)->where('project_id',$request->project_id)->first();

    	  	if (isset($project_equipmet->id)) {
    	  		return 'This Equipment has already been added to this project';
    	  	}
            $project_equipmet = ProjectEquipment::where('equipment_id',$request->equipment_id)->first();
            if (isset($project_equipmet->id)) {
                return 'This Equipment has already been added to another project';
            }
    	  	$project_equipmet = ProjectEquipment::create($request->all());

    	  	if ($project_equipmet) {
    	  		return 'Equipment added to project succesfully';
    	  	}

    	  	
    	  }

    	  $project = Project::find($request->id);
        $project_equipmet = ProjectEquipment::where('project_id',$request->project_id)->get();
    	  return view('add-equipmet',compact('project_equipmet','project'));

    }

    public function remove_personnel(Request $request)
    {	
    		
    		$project_personnel = ProjectPersonnel::where('personnel_id',$request->personnel_id)->where('project_id',$request->project_id)->first();
    		
    	  	if (!isset($project_personnel->id)) {
    	  		 return redirect()->back()->with('message','This Personnel has already been removed');
    	  	}
    	  	$project_personnel->delete();

    	  	if ($project_personnel) {
    	  		 return redirect()->back()->with('message','Personnel removed from project succesfully');
    	  	}
    }

    public function view_equipment(Request $request)
    {
    	 $project = Project::find($request->id);

    	 $project_personnels = ProjectPersonnel::where('project_id',$request->id)->get();
    	  
    	  return view('project-personnels',compact('project_personnels','project'));
    }


     public function view_manifest(Request $request)
    {
       $project = Project::find($request->id);

       $project_manifest = Manifest::where('project_id',$request->id)->get();
        
        return view('project-manifest',compact('project_manifest','project'));
    }
}