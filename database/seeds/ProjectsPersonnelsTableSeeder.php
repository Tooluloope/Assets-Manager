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


        //  return 1;
         $csv = array_map('str_getcsv', file_get_contents('personnels.csv'));
          //return var_dump($csv);

        array_walk($csv, function(&$a) use ($csv) {
           
          $a = array_combine($csv[0], $a);
        });

       (array_shift($csv)); # remove column header
        //return var_dump($csv);
       if ($csv == NULL) {
          return "CSV file isn't well Formatted";
       }
      
       foreach ($csv as $key => $value) {
           Personnel::create($value);
       }
    }
}
