<?php

use Illuminate\Database\Seeder;
use App\Models\Equipment;
use App\Models\Calibration;
use App\Models\Maintenance;
use App\Models\Consumable;
use App\Models\Basket;
class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        
         $csv = array_map('str_getcsv', file('rigging.csv'));
         

        array_walk($csv, function(&$a) use ($csv) {
           
          $a = array_combine($csv[0], $a);
        });
       
       (array_shift($csv)); # remove column header
      //return var_dump($csv);
       if ($csv == NULL) {
          return "CSV file isn't well Formatted";
       }

       $fillable = new Equipment();
       $fillable = $fillable->getFillable();
       $calib = new Calibration();
       $calib = $calib->getFillable();
       $main  = new Maintenance();
        $main = $main->getFillable();


       foreach ($csv as $value) {
	       	  $equipment = new Equipment();
            if ($value['current_location'] = ' ') {unset($value['current_location']);}
	          $equipment->fill(array_intersect_key($value, array_flip($fillable)));
            
	          $equipment->save();

            if (isset($data['calibration_frequency'])) {
                $calibration = new Calibration();
                $calibration->fill(['equipment_id' => $equipment->id,'calibration_frequency'=>$value['calibration_frequency'],'last_calibrated'=>$value['last_calibrated'],'calibration_due_date'=>$value['calibration_due_date'],'calibration_type' =>$value['calibration_type'],'calibration_by' =>$value['calibration_by']]);
                $calibration->save();
            }

            if (isset($data['servicing_frequency'])) {
                $Maintenance = new Maintenance();
                $Maintenance->fill(['equipment_id' => $equipment->id,'servicing_frequency'=>$value['servicing_frequency'],'last_serviced'=>$value['last_serviced'],'servicing_due_date'=>$value['servicing_due_date'],'servicing_type' =>$value['servicing_type'],'serviced_by' =>$value['serviced_by']]);
                $Maintenance->save();
            }
	      
       }




         $csv = array_map('str_getcsv', file('equipments1.csv'));
         

        array_walk($csv, function(&$a) use ($csv) {
           
          $a = array_combine($csv[0], $a);
        });
       
       (array_shift($csv)); # remove column header
      //return var_dump($csv);
       if ($csv == NULL) {
          return "CSV file isn't well Formatted";
       }

       $fillable = new Equipment();
       $fillable = $fillable->getFillable();
       $calib = new Calibration();
       $calib = $calib->getFillable();
       $main  = new Maintenance();
        $main = $main->getFillable();


       foreach ($csv as $value) {
            $equipment = new Equipment();
            if ($value['current_location'] = ' ') {unset($value['current_location']);}
            $equipment->fill(array_intersect_key($value, array_flip($fillable)));
            
            $equipment->save();

            if (isset($data['calibration_frequency'])) {
                $calibration = new Calibration();
                $calibration->fill(['equipment_id' => $equipment->id,'calibration_frequency'=>$value['calibration_frequency'],'last_calibrated'=>$value['last_calibrated'],'calibration_due_date'=>$value['calibration_due_date'],'calibration_type' =>$value['calibration_type'],'calibration_by' =>$value['calibration_by']]);
                $calibration->save();
            }

            if (isset($data['servicing_frequency'])) {
                $Maintenance = new Maintenance();
                $Maintenance->fill(['equipment_id' => $equipment->id,'servicing_frequency'=>$value['servicing_frequency'],'last_serviced'=>$value['last_serviced'],'servicing_due_date'=>$value['servicing_due_date'],'servicing_type' =>$value['servicing_type'],'serviced_by' =>$value['serviced_by']]);
                $Maintenance->save();
            }
        
       }




         $csv = array_map('str_getcsv', file('equipments2.csv'));
         

        array_walk($csv, function(&$a) use ($csv) {
           
          $a = array_combine($csv[0], $a);
        });
       
       (array_shift($csv)); # remove column header
      //return var_dump($csv);
       if ($csv == NULL) {
          return "CSV file isn't well Formatted";
       }

       $fillable = new Equipment();
       $fillable = $fillable->getFillable();
       $calib = new Calibration();
       $calib = $calib->getFillable();
       $main  = new Maintenance();
        $main = $main->getFillable();


       foreach ($csv as $value) {
            $equipment = new Equipment();
            if ($value['current_location'] = ' ') {unset($value['current_location']);}
            $equipment->fill(array_intersect_key($value, array_flip($fillable)));
            
            $equipment->save();

            if (isset($data['calibration_frequency'])) {
                $calibration = new Calibration();
                $calibration->fill(['equipment_id' => $equipment->id,'calibration_frequency'=>$value['calibration_frequency'],'last_calibrated'=>$value['last_calibrated'],'calibration_due_date'=>$value['calibration_due_date'],'calibration_type' =>$value['calibration_type'],'calibration_by' =>$value['calibration_by']]);
                $calibration->save();
            }

            if (isset($data['servicing_frequency'])) {
                $Maintenance = new Maintenance();
                $Maintenance->fill(['equipment_id' => $equipment->id,'servicing_frequency'=>$value['servicing_frequency'],'last_serviced'=>$value['last_serviced'],'servicing_due_date'=>$value['servicing_due_date'],'servicing_type' =>$value['servicing_type'],'serviced_by' =>$value['serviced_by']]);
                $Maintenance->save();
            }
        
       }


       $csv = array_map('str_getcsv', file('equipments3.csv'));
         

        array_walk($csv, function(&$a) use ($csv) {
           
          $a = array_combine($csv[0], $a);
        });
       
       (array_shift($csv)); # remove column header
      //return var_dump($csv);
       if ($csv == NULL) {
          return "CSV file isn't well Formatted";
       }

       $fillable = new Equipment();
       $fillable = $fillable->getFillable();
       $calib = new Calibration();
       $calib = $calib->getFillable();
       $main  = new Maintenance();
        $main = $main->getFillable();


       foreach ($csv as $value) {
            $equipment = new Equipment();
            if ($value['current_location'] = ' ') {unset($value['current_location']);}
            $equipment->fill(array_intersect_key($value, array_flip($fillable)));
            
            $equipment->save();

            if (isset($data['calibration_frequency'])) {
                $calibration = new Calibration();
                $calibration->fill(['equipment_id' => $equipment->id,'calibration_frequency'=>$value['calibration_frequency'],'last_calibrated'=>$value['last_calibrated'],'calibration_due_date'=>$value['calibration_due_date'],'calibration_type' =>$value['calibration_type'],'calibration_by' =>$value['calibration_by']]);
                $calibration->save();
            }

            if (isset($data['servicing_frequency'])) {
                $Maintenance = new Maintenance();
                $Maintenance->fill(['equipment_id' => $equipment->id,'servicing_frequency'=>$value['servicing_frequency'],'last_serviced'=>$value['last_serviced'],'servicing_due_date'=>$value['servicing_due_date'],'servicing_type' =>$value['servicing_type'],'serviced_by' =>$value['serviced_by']]);
                $Maintenance->save();
            }
        
       }



      $csv = array_map('str_getcsv', file('consumables.csv'));
         

      array_walk($csv, function(&$a) use ($csv) {
           
          $a = array_combine($csv[0], $a);
        });
       
      (array_shift($csv)); # remove column header
      //return var_dump($csv);
       if ($csv == NULL) {
          return "CSV file isn't well Formatted";
       }

       $fillable = new Consumable();
       $fillable = $fillable->getFillable();


       foreach ($csv as $value) {
            $Consumable = new Consumable();
            
            $Consumable->fill(array_intersect_key($value, array_flip($fillable)));
            
            $Consumable->save();

            
       }



        $csv = array_map('str_getcsv', file('baskets.csv'));
         

      array_walk($csv, function(&$a) use ($csv) {
           
          $a = array_combine($csv[0], $a);
        });
       
      (array_shift($csv)); # remove column header
      //return var_dump($csv);
       if ($csv == NULL) {
          return "CSV file isn't well Formatted";
       }

       $fillable = new Basket();
       $fillable = $fillable->getFillable();


       foreach ($csv as $value) {
            $basket = new Basket();
            $basket->fill(array_intersect_key($value, array_flip($fillable)));
            
            $basket->save();

            
       }



       
    }
}
