<?php

namespace App\Http\Controllers;
use App\Models\Personnel;
use Illuminate\Http\Request;

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
    	$personnels = Personnel::paginate(10);
    	return view('personnels',compact('personnels'));
    }
}
