<?php

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Personnel;
use App\Models\ProjectPersonnel;
class ProjectsPersonnelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        
         $csv = array_map('str_getcsv', file('personnels.csv'));
         

        array_walk($csv, function(&$a) use ($csv) {
           
          $a = array_combine($csv[0], $a);
        });

       (array_shift($csv)); # remove column header
        
        
       if ($csv == NULL) {
          return "CSV file isn't well Formatted";
       }

       $personnel = new Personnel();
       $project = new Project();
       $fillable = $personnel->getFillable();

       foreach ($csv as $key => $value) {
          $projects = explode(' & ',  $value['project']);
          foreach ($projects as $project) {
          if($project != '')
          $project  = Project::firstOrCreate(['name' => $project]);
          }
         
       }

       foreach ($csv as $key => $value) {
      
         $personnel = Personnel::create(array_intersect_key($value, array_flip($fillable)));
           $projects = explode(' & ',  $value['project']);
          foreach ($projects as $project) {
          if($project != '')
         $project_personnel = ProjectPersonnel::create(['personnel_id' => $personnel->id,'project_id' => Project::where('name',$project)->first()->id]);
          }
          
       }
    }
}
