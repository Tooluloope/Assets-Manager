<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Personnel;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnel = Personnel::get();
        $personnel = count($personnel);

        $projects = Project::get();
        $projects = count($projects);

        $users = \App\User::get();
        $users = count($users);
        return view('home',compact('personnel','projects','users'));
    }

    public function walk(Request $request)
    {

      //  return 1;
         $csv = array_map('str_getcsv', file($request->csv));
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
