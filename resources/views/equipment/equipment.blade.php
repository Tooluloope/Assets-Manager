@extends('layout')
@section('pageTitle')
 Equipment| Edit Equipment
@endsection


@section('content')
    <main class="content-wrapper">
        <div class="container">
           <div class="row hideme" > <div class="col-md-6"><h3>Equipment Profile</h3></div><div class="col-md-3"><button  class="pull-right personnels btn btn-success btn-md" onclick="printInfo()">Print</button></div>  <div class="col-md-3"><span class=""> <button data-toggle="modal"   class="personnels btn btn-primary btn-md" >Update Equipment</button> </span></div>  </div> 
            <hr>
            <div class="row" id="printinfo">
                <div class="col-md-12">
                    
                    <div class="card">
                        <div class="card-body row">
                            <div class="col">
                                    <img class="img-thumbnail" width="450" src="{{url('images/2-1.png')}}"  alt="Card image cap">
                            </div>
                            <div class="col">
                                    <h5 class="card-text">{{$equipment->name}}</h5>
                                  <!--  <p class="mb-1">Equipment Description</p>-->
                                   
                            </div>      
                        </div>
                    </div>
                </div>
              

                <div class="col-md-6">
                    <h5 class="text-body">Purchase/Cost Information</h5>
                    <div class="card">
                        <div class="card-body row pt-3">
                            <div class="col">
                                <p class="mb-1 mt-0">Purchase Cost: Naval Dockyard</p>
                                <p class="mb-1 mt-0">Present Salvage Value: </p>
                                <p class="mb-1 mt-0">Present Depreciation Value: </p>
                                <p class="mb-1 mt-0">Depreciation Begin Date: </p>
                                <p class="mb-1 mt-0">Purchase Date: </p>
                            </div>      
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                        <h5 class="text-body">General Information</h5>
                        <div class="card">
                            <div class="card-body row pt-3">
                                <div class="col">
                                    <p class="mb-1 mt-0">Equipment Location: {{$equipment->current_location != 'Fabrication Yard' ? $equipment->project->location : 'Fabrication Yard'}}</p>
                                    <p class="mb-1 mt-0">Equipment Type: </p>
                                    <p class="mb-1 mt-0">Equipment Category: </p>
                                    <p class="mb-1 mt-0">Equipment Manufacturer: </p>
                                    <p class="mb-1 mt-0">Equipment Condition: </p>
                                </div>      
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
                    <h5 class="text-body">Time Usage Information</h5>
                    <div class="card">
                        <div class="card-body row pt-3">
                            <div class="col">
                                <p class="mb-1 mt-0">Total Time Usage(Hrs): 30500 Hrs</p>
                                <p class="mb-1 mt-0">Time Usage Sine last Maintenance(Hrs): 300 Hrs</p>
                              
                                <!-- <form class="form-inline">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <input required="required" id="time-usage" name="time-usage" type="number" class="form-control validate" placeholder="Time Usage">
                                    </div>
                                    <button type="submit" class="btn-sm btn-primary mb-2">Add</button>
                                </form> -->
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class="text-body">Project Information</h5>
                    <div class="card">
                        <div class="card-body row pt-3">
                            <div class="col">
                                <p class="mb-1 mt-0">Current Project: Project 123</p>
                                <p class="mb-1 mt-0">Current Location: {{$equipment->current_location != 'Fabrication Yard' ? $equipment->project->location : 'Fabrication Yard'}}</p>
                                <p class="mb-1 mt-0">Allocated By: Personnel 123</p>
                                <p class="mb-1 mt-0">Date Allocated: Date 123</p>


                              
                                <!-- <form class="form-inline">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <input required="required" id="time-usage" name="time-usage" type="number" class="form-control validate" placeholder="Time Usage">
                                    </div>
                                    <button type="submit" class="btn-sm btn-primary mb-2">Add</button>
                                </form> -->
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <h5 class="text-body"> Maintenance Log</h5>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col">
                                <table class="table  table-hover table-stripped table-bordered dt-responsive nowrap">
                                    <thead class="thead-theme"> 
                                        <tr >
                                            <th class="text-center">Date Last used</th>
                                            <th class="text-center">Date last Maintained</th>
                                            <th class="text-center">Next Maintenance Date</th>
                                            <th class="text-center" class="hideme">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td style="vertical-align:middle;" class="text-center">10th Sept, 2019</td>
                                           
                                            <td style="vertical-align:middle;" class="text-center">30 Oct, 2019</td>
                                            <td style="vertical-align:middle;" class="text-center">30 Oct, 2020</td>

                                            <td class="hideme text-center">  
                                                <a href="" class="btn btn-info btn-sm">Add</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                   
                                    </tbody>
                                </table>
                                
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <h5 class="text-body"> Calibration Log</h5>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col">
                                <table class="table  table-hover table-stripped table-bordered dt-responsive nowrap">
                                    <thead class="thead-theme"> 
                                        <tr >
                                            <th class="text-center">Date Last used</th>
                                            <th class="text-center">Date last Calibrated</th>
                                            <th class="text-center">Next Calibration Date</th>
                                            <th class="text-center" class="hideme">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td style="vertical-align:middle;" class="text-center">10th Sept, 2019</td>
                                            
                                            <td style="vertical-align:middle;" class="text-center">30 Oct, 2019</td>
                                            <td style="vertical-align:middle;" class="text-center">30 Oct, 2020</td>

                                            <td class="hideme text-center">  
                                                <a href="" class="btn btn-info btn-sm">Add</a>
                                                <a href="" class="btn btn-danger btn-sm">delete</a>
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                                
                            </div>      
                        </div>
                    </div>
                </div>
            
            </div>
        </div> 
    </main>

@endsection