<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Personnel;
use App\Models\ProjectPersonnel;
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
        $this->middleware('auth');
    }

    public function index()
    {
    	$projects = Project::get();
    	return view('projects',compact('projects'));
    }


    public function create(Request $request)
    {
    	$validator = Validator::make($request->all(), [
                'name' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'location' => 'required',
                'project_manager' => 'required',
               

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
                'start_date' => 'required',
                'end_date' => 'required',
                'location' => 'required',
                'project_manager' => 'required',
               

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

    public function add_personnel(Request $request)
    {
    	  if ($request->isMethod('post')) {
    	  	$project_personnel = ProjectPersonnel::where('personnel_id',$request->personnel_id)->where('project_id',$request->project_id)->first();

    	  	if (isset($project_personnel->id)) {
    	  		return 'This Personnel has already been added';
    	  	}
    	  	$project_personnel = ProjectPersonnel::create($request->all());

    	  	if ($project_personnel) {
    	  		return 'Personnel added to project succesfully';
    	  	}

    	  	
    	  }

    	  $project = Project::find($request->id);

    	  $personnels = Personnel::where('t_bosiet','!=','')->where('general_medicals','!=','')->where('alcohol_and_drug','!=','')->where('tuberculosis','!=','')->get();

    	  $personnels_exparts = Personnel::where('t_bosiet','!=','')->where('general_medicals','!=','')->where('alcohol_and_drug','!=','')->where('tuberculosis','!=','')->where('malaria','!=','')->get();

    	  $personnels = $personnels->merge($personnels_exparts);

    	  return view('add-personnels',compact('personnels','project'));

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

    public function view_personnel(Request $request)
    {
    	 $project = Project::find($request->id);

    	 $project_personnels = ProjectPersonnel::where('project_id',$request->id)->get();
    	  
    	  return view('project-personnels',compact('project_personnels','project'));
    }
}
