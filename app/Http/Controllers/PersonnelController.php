<?php

namespace App\Http\Controllers;
use App\Models\Personnel;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class PersonnelController extends Controller
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
    	$personnels = Personnel::get();
    	return view('personnels',compact('personnels'));
    }


    public function create(Request $request)
    {

         $validator = Validator::make($request->all(), [
                'firstname' => 'required',
                'lastname' => 'required',
                'phone_number' => 'required',
                't_bosiet' => 'required',
                'general_medicals' => 'required',
                'tuberculosis' => 'required',
                'alcohol_and_drug' => 'required',
                'malaria' => 'required',
               

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

  
        $data = $request->all();
     


        if ($request->hasFile('t_bosiet')) {
            $t_bosiet = $request->file('t_bosiet')->store('T-Bosiet');
               $data['t_bosiet'] = $t_bosiet;
            
              
        }

        if ($request->hasFile('general_medicals')) {
            $general_medicals = $request->file('general_medicals')->store('General Medicals');
               $data['general_medicals'] = $general_medicals;
              
        }

        if ($request->hasFile('tuberculosis')) {
            $tuberculosis = $request->file('tuberculosis')->store('Tuberculosis');
               $data['tuberculosis'] = $tuberculosis;
              
        }

        if ($request->hasFile('alcohol_and_drug')) {
            $alcohol_and_drug = $request->file('alcohol_and_drug')->store('Alcohol & Drug');
               $data['alcohol_and_drug'] = $alcohol_and_drug;
              
        }

        if ($request->hasFile('malaria')) {
            $malaria = $request->file('malaria')->store('Malaria');
               $data['malaria'] = $malaria;
              
        }

        $data['name'] = $data['firstname'].' '.$data['lastname']; 
        $personnel = Personnel::Create($data);
        if (isset($data['certificate_name'])){

                
            foreach ($data['certificate_name'] as $key => $certificate) {
                
                if ($request->file('certificate')[$key] != NULL){
                $certificate_file = $request->file('certificate')[$key]->store('Other Certificates');
               $data['certificate'][$key] = $certificate_file;

               Certificate::create(['name'=> $certificate,'certificate'=>$data['certificate'][$key],'personnel_id'=> $personnel->id]);

                 }


                 }
              
            }
        
       return redirect()->back()->with('message','Personnel Added succesfully');
    }


    public function update(Request $request)
    {

       
         $validator = Validator::make($request->all(), [
                'firstname' => 'required',
                'lastname' => 'required',
                'phone_number' => 'required',
                't_bosiet' => 'required',
                'general_medicals' => 'required',
                'tuberculosis' => 'required',
                'alcohol_and_drug' => 'required',
                'malaria' => 'required',
               

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

  
        $data = $request->all();
     
         $personnel = Personnel::find($request->personnel_id);

        if (!isset($personnel->id)) {
           return redirect()->back()->with('message','Personnel Does not Exist');
        }

        if ($request->hasFile('t_bosiet')) {
            $t_bosiet = $request->file('t_bosiet')->store('T-Bosiet');
               $data['t_bosiet'] = $t_bosiet;
            if (isset($personnel->t_bosiet)) {
                  Storage::delete('T-Bosiet/'.$personnel->t_bosiet);
                }
              
        }

        if ($request->hasFile('general_medicals')) {
            $general_medicals = $request->file('general_medicals')->store('General Medicals');
               $data['general_medicals'] = $general_medicals;

               if (isset($personnel->general_medicals)) {
                  Storage::delete('General Medicals/'.$personnel->general_medicals);
                }
              
        }

        if ($request->hasFile('tuberculosis')) {
            $tuberculosis = $request->file('tuberculosis')->store('Tuberculosis');
               $data['tuberculosis'] = $tuberculosis;
               if (isset($personnel->tuberculosis)) {
                  Storage::delete('Tuberculosis/'.$personnel->tuberculosis);
                }
              
        }

        if ($request->hasFile('alcohol_and_drug')) {
            $alcohol_and_drug = $request->file('alcohol_and_drug')->store('Alcohol & Drug');
               $data['alcohol_and_drug'] = $alcohol_and_drug;
              if (isset($personnel->alcohol_and_drug)) {
                  Storage::delete('Alcohol & Drug/'.$personnel->alcohol_and_drug);
                }
                
        }

        if ($request->hasFile('malaria')) {
            $malaria = $request->file('malaria')->store('Malaria');
               $data['malaria'] = $malaria;

                if (isset($personnel->malaria)) {
                  Storage::delete('Malaria/'.$personnel->malaria);
                }
                
              
        }

        $data['name'] = $data['firstname'].' '.$data['lastname']; 

        $personnel_id = $personnel->id;
        $personnel = $personnel->update($data);
        if (isset($data['certificate_name'])){

                
            foreach ($data['certificate_name'] as $key => $certificate) {
                
                if ($request->file('certificate')[$key] != NULL){
               $certificate_file = $request->file('certificate')[$key]->store('Other Certificates');
               $data['certificate'][$key] = $certificate_file;
                

                 $old_certificate = Certificate::where('name',$certificate)->where('personnel_id',$personnel_id)->first();
                 if (isset($old_certificate->id)) {

                    if (isset($old_certificate->certificate)) {
                      Storage::delete('Other Certificates/'.$old_certificate->certificate);
                    }
                    
                    $old_certificate->update(['name'=> $certificate,'certificate'=>$data['certificate'][$key],'personnel_id'=> $personnel_id]);
                 }else{
                   Certificate::create(['name'=> $certificate,'certificate'=>$data['certificate'][$key],'personnel_id'=> $personnel_id]); 
                 }

                 }

            }
        }
       return redirect()->back()->with('message','Personnel Updated succesfully');
    }
}
