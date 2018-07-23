@extends('layout')
@section('styles')
<link rel="stylesheet" href="css/custom/personnel.css"/>

@endsection
@section('content')
<main class="content-wrapper">
    <div class="container">
            <div id="snackbar">Email Sent Successfully</div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card table-responsive">
                <div class="table-heading px-2 px-1 border-bottom">
                <h1 class="mdc-card__title mdc-card__title--large">Personnel</h1>
                </div>
                <table class="table">
                <thead>
                    <tr>
                    <th class="text-left">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Company</th>
                    <th class="text-center">Designation</th>
                    <th class="text-center">Employment Status</th>
                    <th class="text-center">T-BOSIET</th>
                    <th class="text-center">OSP</th>
                    <th class="text-center">General Medicals</th>
                    <th class="text-center">Tuberculosis</th>
                    <th class="text-center">CV</th>
                    <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personnels as $personnel)
                    <tr >
                        <td style="vertical-align: middle;" class="text-left">{{$personnel->name}} </td>
                        <td>{{$personnel->email}} </td>
                        <td>{{$personnel->company}} </td>
                        <td>{{$personnel->designation}} </td>
                        <td>{{$personnel->employment_status}} </td>
                        <td>{{$personnel->t_biosfet}} </td>   
                        <td>{{$personnel->osp}} </td>
                        <td>{{$personnel->general_medicals}} </td> 
                         <td>{{$personnel->tuberculosis}} </td>     
                          <td>{{$personnel->cv}} </td>         
                        <!--  -->
                        <td style="color:white;">
                            <a onclick="myFunction()" class="btn btn-primary btn-sm">Send Mail</a>
                        </td>
                    </tr>
                   @endforeach
        
                </tbody>
                </table>
            </div>

        </div><br> {{ $personnels->links() }}
        <button style="position: absolute; bottom: 50px; right: 30px;" data-toggle="modal" data-target=".bd-example-modal-lg" class=" btn btn-circle btn-primary-color" >+</button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Personnel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <form id="userForm" action="{{url('personnel')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstname" placeholder="First Name" required> 
                            </div>
                            <div class="col">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="col">
                                <label for="lastName">Employment Status</label>
                                <select name="employment_status" id="single" class="form-control form-control-chosen" data-placeholder="Please select..." required> 
                                    <option value=""></option>
                                    <option value="Contract Staff">Contract Staff</option>
                                    <option value="Full Staff">Full Staff</option>
                                      <option value="Expatriate">Expatriate</option>
                                    <option value="Yet to be employed">Yet to be employed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="category">Category</label>
                                <select name="category" id="single" class="form-control form-control-chosen" data-placeholder="Please select..."> 
                                    <option value=""></option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Construction">Construction</option>
                                    <option value="PMT">PMT</option>
                                    <option value="Quality">Quality</option>
                                    <option value="Safety">Safety</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" aria-describedby="emailHelp" placeholder="Designation" required>
                            </div>
                            <div class="col">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company"  name="company" aria-describedby="emailHelp" placeholder="Company" required>
                            </div>
                        </div>
                        
                        <div class="pt-2">
                                <label>Certifications</label>
                        </div>
    
                        <table id="myTable" class=" table order-list1 table2">
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold" >Name of Certification</td>
                                        <td class="font-weight-bold">Upload</td>
                                        <td class="font-weight-bold">Expiry Date</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="col">
                                                <select required="required" name="certificate_name[]" id="single" class="form-control form-control-chosen" data-placeholder="Please select..." required> 
                                                    <option value=""></option>
                                                    <option value="Alcohol and Drug Test">Alcohol and Drug Test</option>
                                                    <option value="Offshore Safety Permit">Offshore Safety Permit</option>
                                                    <option value="Medical Test">Medical Test</option>
                                                    <option value="t_bosiet">T-Bosiet</option>
                                                    <option value="Tuberculosis Test">Tuberculosis Test</option>
                                                    <option value="Curriculum vitae">Curriculum vitae</option>
                                                    <option value="Trade Certificate">Trade Certificate</option>
                                                </select>
                                        </td>
                                        <td scope="col">
                                             <input required="required" class="form-control" type="file" name="certificate[]" id="image" required>                  
                                        </td>
                                        <td scope="col">
                                            <input type="date" name="expiry_date[]"  class="form-control"/>
                                        </td>
                                        <td scope="col"><a class="deleteRow"></a>
                                        </td>
                                    </tr>
                                    
        
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="text-align: center;">
                                            <a type="button" class="btn btn-info " id="addrow1" value="Add Row">Add Row</a>
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                </tfoot>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('page_scripts')
<script src="js/custom/row.js"></script>
<!-- <script src="js/custom/home.js"></script> -->
<script>
    function myFunction() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.className = "shows";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("shows", ""); }, 3000);
}
</script>


@endsection