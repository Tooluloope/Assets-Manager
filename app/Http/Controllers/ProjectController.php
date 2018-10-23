<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Manifest;
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
    	  		return 'This Personnel has already been added to this project';
    	  	}
            $project_personnel = ProjectPersonnel::where('personnel_id',$request->personnel_id)->first();
            if (isset($project_personnel->id)) {
                return 'This Personnel has already been added to another project';
            }
    	  	$project_personnel = ProjectPersonnel::create($request->all());

    	  	if ($project_personnel) {
    	  		return 'Personnel added to project succesfully';
    	  	}

    	  	
    	  }

    	  $project = Project::find($request->id);

          if ($project->type == 'Offshore') {
              $personnels = Personnel::where('nationality','Local')->where('t_bosiet','!=','')->where('t_bosiet_validity_date','>',date('Y-m-d'))->where('general_medicals','!=','')->where('general_medicals_validity_date','>',date('Y-m-d'))->where('alcohol_and_drug','!=','')->where('alcohol_and_drug_validity_date','>',date('Y-m-d'))->where('tuberculosis','!=','')->where('tuberculosis_validity_date','>',date('Y-m-d'))->where('osp','!=','')->where('osp_validity_date','>',date('Y-m-d'))->get();

          //return var_dump($personnels);

          $personnels_exparts = Personnel::where('nationality','Expatriate')->where('t_bosiet','!=','')->where('t_bosiet_validity_date','>',date('Y-m-d'))->where('general_medicals','!=','')->where('general_medicals_validity_date','>',date('Y-m-d'))->where('alcohol_and_drug','!=','')->where('alcohol_and_drug_validity_date','>',date('Y-m-d'))->where('tuberculosis','!=','')->where('tuberculosis_validity_date','>',date('Y-m-d'))->where('osp','!=','')->where('osp_validity_date','>',date('Y-m-d'))->where('malaria','!=','')->where('malaria_validity_date','>',date('Y-m-d'))->get();
            //return var_dump($personnels_exparts);
          

          }

          elseif ($project->type == 'Onshore') {
            $personnels = Personnel::where('nationality','Local')->where('t_bosiet','!=','')->where('t_bosiet_validity_date','>',date('Y-m-d'))->where('general_medicals','!=','')->where('general_medicals_validity_date','>',date('Y-m-d'))->where('alcohol_and_drug','!=','')->where('alcohol_and_drug_validity_date','>',date('Y-m-d'))->get();

          //return var_dump($personnels);

          $personnels_exparts = Personnel::where('nationality','Expatriate')->where('t_bosiet','!=','')->where('t_bosiet_validity_date','>',date('Y-m-d'))->where('general_medicals','!=','')->where('general_medicals_validity_date','>',date('Y-m-d'))->where('alcohol_and_drug','!=','')->where('alcohol_and_drug_validity_date','>',date('Y-m-d'))->where('malaria','!=','')->where('malaria_validity_date','>',date('Y-m-d'))->get();
            //return var_dump($personnels_exparts);
          

          }else{
             return redirect()->back()->with('message','Project Type Not Specified (Offshore or Onshore)');
        
          
          }
    	  
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


     public function view_manifest(Request $request)
    {
       $project = Project::find($request->id);

       $project_manifest = Manifest::where('project_id',$request->id)->get();
        
        return view('project-manifest',compact('project_manifest','project'));
    }
}
