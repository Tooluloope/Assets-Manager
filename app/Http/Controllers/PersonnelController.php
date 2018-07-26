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

        $data = $request->all();
     
         $personnel = Personnel::find($request->personnel_id);

        if (!isset($personnel->id)) {
           return redirect()->back()->with('message','Personnel Does not Exist');
        }

        if ($request->hasFile('t_bosiet')) {
            $t_bosiet = $request->file('t_bosiet')->store('T-Bosiet');
               $data['t_bosiet'] = $t_bosiet;
         
              
        }else{

            unset($data['t_bosiet_validity_date']); 
        }

        if ($request->hasFile('general_medicals')) {
            $general_medicals = $request->file('general_medicals')->store('General Medicals');
               $data['general_medicals'] = $general_medicals;

             
              
        }else{

            unset($data['general_medicals_validity_date']); 
        }

        if ($request->hasFile('tuberculosis')) {
            $tuberculosis = $request->file('tuberculosis')->store('Tuberculosis');
               $data['tuberculosis'] = $tuberculosis;
            
              
        }else{

            unset($data['tuberculosis_validity_date']); 
        }

        if ($request->hasFile('alcohol_and_drug')) {
            $alcohol_and_drug = $request->file('alcohol_and_drug')->store('Alcohol & Drug');
               $data['alcohol_and_drug'] = $alcohol_and_drug;
             
                
        }else{

            unset($data['alcohol_and_drug_validity_date']); 
        }

        if ($request->hasFile('malaria')) {
            $malaria = $request->file('malaria')->store('Malaria');
               $data['malaria'] = $malaria;
      
              
        }else{

            unset($data['malaria_validity_date']); 
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

                  
                    $old_certificate->update(['name'=> $certificate,'certificate'=>$data['certificate'][$key],'personnel_id'=> $personnel_id]);
                 }else{
                   Certificate::create(['name'=> $certificate,'certificate'=>$data['certificate'][$key],'personnel_id'=> $personnel_id]); 
                 }

                 }

            }
        }
       return redirect()->back()->with('message','Personnel Updated succesfully');
    }

    public function person()
    {
    	$personnels = Personnel::get();
    	return view('person',compact('person'));
    }
}
