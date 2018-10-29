@extends('layout')
@section('pageTitle')
 Equipment| Add Equipment
@endsection
@section('styles')
<link rel="stylesheet"  href="{{url('css/custom/home2.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

@endsection


@section('content')
    <main class="content-wrapper">
        <!-- Tabs -->
        <section id="tabs pl-5" style="padding-left: 20px">
            <div class="container-fluid">
                    <section id="tabs pl-5" style="padding-left: 20px">
                        <div class="container-fluid form-tab">
                            
                                <div class="card width mb-4">
                                        <div class="card-body mb-4">
                                
                                            <h2 class="text-center font-weight-bold pt-4 pb-5"><strong>Add New Equipment</strong></h2>
                                
                                            <!-- Stepper -->
                                            <div class="steps-form pb-5">
                                                <div class="steps-row setup-panel">
                                                    <div class="steps-step">
                                                        <a href="#step-9" type="button" class="btn btn-indigo">General</a>
                                                    </div>
                                                    <div class="steps-step">
                                                        <a href="#step-10" type="button" class="btn btn-default" disabled="disabled">Depreciation</i></a>
                                                    </div>
                                                    <div class="steps-step">
                                                        <a href="#step-11" type="button" class="btn btn-default" disabled="disabled" >Picture</a>
                                                    </div>
                                                    <!-- <div class="steps-step">
                                                        <a href="#step-12" type="button" class="btn btn-default" disabled="disabled">Attachment</a>
                                                    </div> -->
                                                    <div class="steps-step">
                                                        <a href="#step-13" type="button" class="btn btn-default" disabled="disabled">Maintenance</i></a>
                                                    </div>
                                                    <!-- <div class="steps-step">
                                                        <a href="#step-14" type="button" class="btn btn-default" disabled="disabled" >Contracts</a>
                                                    </div> -->
                                                    <!-- <div class="steps-step">
                                                        <a href="#step-15" type="button" class="btn btn-default" disabled="disabled">Funding</i></a>
                                                    </div> -->
                                                    <!-- <div class="steps-step">
                                                        <a href="#step-16" type="button" class="btn btn-default" disabled="disabled" >Transaction History</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                
                                            <form role="form" action=" " id="formStepper" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <!-- General -->
                                                <div class=" setup-content"  id="step-9">
                                                    
                                                    <div class="form-row pb-3">
                                                        <div class="col form-group">
                                                            <label for="equipment-tag" data-error="wrong" data-success="right">Equipment Tag</label>
                                                            <input required="required" id="equipment-desc" name="equipment-desc" type="text" class="form-control validate" placeholder="Equipment Tag">
                                                        </div>
                                                        <div class="col form-group">
                                                            <label for="equipment-desc">Equipment Description</label>
                                                            <input required="required" id="equipment-desc" type="text" class="form-control validate" placeholder="Equipment Description">
                                                        </div>
                                                    </div>
                                                    <div class="form-row pb-3">    
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="equipment-type">Equipment Type</label>
                                                            <input required="required" id="equipment-type" name="equipment-type" type="text" class="form-control validate" placeholder="Equipment Type">
                                                        </div>
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="manufacturer">Manufacturer</label>
                                                            <input required="required" id="manufacturer" name="manufacturer" type="text" class="form-control validate" placeholder="Manufacturer">
                                                        </div>
                                                    </div>
                                                    <div class="form-row pb-3">    
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="location">Location</label>
                                                            <input required="required" id="location" name="location" type="text" class="form-control validate" placeholder="Location">
                                                        </div>
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="condition">Condition</label>
                                                            <input required="required" id="condition" name="condition" type="text" class="form-control validate" placeholder="Condition">
                                                        </div>
                                                        <div class="col form-group">
                                                            <label for="category" data-error="wrong" data-success="right">Category</label>
                                                            <select required="required" class="form-control validate" name="category" id="category">
                                                                <option value="123" selected>---Select---</option>
                                                                <option value="Excellent">Excellent</option>
                                                                <option value="Bad">Bad</option>
                                                                <option value="Needs Maintenance">Needs Maintenance</option>                            
                                                            </select>                            
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                                                </div>
                                            
                                                
                                                <!-- Depreciation -->
                                                <div class=" setup-content"  id="step-10">
                                                    <div class="form-row pb-3">    
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="purchase-order">Purchase Order</label>
                                                            <input required="required" id="purchase-order" name="purchase-order" type="file" class="form-control validate" placeholder="">
                                                        </div>
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="depreciation-begin-date">Depreciation Begin Date</label>
                                                            <input required="required" id="depreciation-begin-date" name="depreciation-begin-date" type="date" class="form-control validate" placeholder="d">
                                                        </div>
                                                     
                                                    </div>
                                                    
                                                    <div class="form-row pb-3">    
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="purchase-date">Purchase Date</label>
                                                            <input required="required" id="purchase-date" name="purchase-date" type="date" class="form-control validate" placeholder="">
                                                        </div>
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="last-depreciation-date">Last Depreciation Date</label>
                                                            <input required="required" id="last-depreciation-date" name="last-depreciation-date" type="date" class="form-control validate" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row pb-3">    
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="purchase-cost">Purchase Cost</label>
                                                            <input required="required" id="purchase-cost" name="purchase-cost" type="number" class="form-control validate" placeholder="">
                                                        </div>
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="total-depreciation">Total Depreciation</label>
                                                            <input required="required" id="total-depreciation" name="total-depreciation" type="number" class="form-control validate" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row pb-3">    
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="salvage-value">Salvage Value</label>
                                                            <input required="required" id="salvage-value" name="salvage-value" type="number" class="form-control valicost" placeholder="">
                                                        </div>
                                                        <div class="col form-group">
                                                            <label data-error="wrong" data-success="right" for="current-depreciation">Current Depreciation</label>
                                                            <input required="required" id="current-depreciation" name="current-depreciation" type="number" class="form-control validate" placeholder="">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                                                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                                                </div>

                                                <!-- Picture -->
                                                <div class=" setup-content"  id="step-11">
                                                    <div class="col form-group">
                                                        <label data-error="wrong" data-success="right" for="equipment-picture">Equipment Picture</label>
                                                        <input required="required" id="equipment-picture" name="equipment-picture" type="file" class="form-control validate" placeholder="">
                                                    </div>
                                                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                                                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                                                </div>
                                
                                                <!-- Attachment -->
                                                <!-- <div class="setup-content"  id="step-12">
                                                    <h3 class="font-weight-bold pl-0 my-4"><strong>Step 3</strong></h3>
                                                    <div class="form-group">
                                                        <label class="col-sm-2" for="resume">Upload Display Picture</label>
                                                        <div class="col-sm-10">
                                                            <input required="required" class="form-control" type="file" name="image" id="image" required>                  
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                                                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                                                
                                                </div> -->

                                                <!-- Maintenance -->
                                                <div class="setup-content"  id="step-13">

                                                    <h3> Choose Maintenance Type</h3>
                                                    <fieldset>
                                                        <!-- Hourly -->
                                                        <div class="checkbox  pb-3">
                                                            <input name="maintenance_type" type="checkbox" value="hourly_maintenance" id= 'hourly_check' onclick="return checkbox();"/>
                                                            <label>Hourly Maintenance</label>
                                                        </div>
                                                        <div class="form-row pb-3" id="hourly_maintenance">    
                                                            <div class="col-sm-5 form-group">
                                                                <label data-error="wrong" data-success="right" for="hours">Number of Hours</label>
                                                                <input required="required" id="hours" name="hours" type="number" class="form-control validate" placeholder="Hours">
                                                            </div>
                                                        </div>

                                                        <!-- daily -->
                                                        <div class="checkbox  pb-3">
                                                            <input name="maintenance_type" type="checkbox" value="daily_maintenance" id= 'daily_check' onclick="return checkbox();"/>
                                                            <label>Daily Maintenance</label>
                                                        </div>
                                                        <div class="form-row pb-3" id="daily_maintenance">    
                                                            <div class="col-sm-5 form-group">
                                                                <label data-error="wrong" data-success="right" for="days">Number of Days</label>
                                                                <input required="required" id="days" name="days" type="number" class="form-control validate" placeholder="Days">

                                                                <input type="text" name="day_date" class="form-control"/>
                                                            </div>
                                                        </div>

                                                        <!-- weekly -->
                                                        <div class="checkbox  pb-3">
                                                            <input name="maintenance_type" type="checkbox" value="weekly_maintenance" id= 'weekly_check' onclick="return checkbox();"/>
                                                            <label>Weekly Maintenance</label>
                                                        </div>
                                                        <div class="form-row pb-3" id="weekly_maintenance">    
                                                            <div class="col-sm-5 form-group">
                                                                    <label data-error="wrong" data-success="right" for="weeks">Number of Weeks</label>
                                                                    <input required="required" id="weeks" name="weeks" type="number" class="form-control validate" placeholder="Weeks">
                                                                    <input type="text" name="week_date" class="form-control"/>
                                                            </div>
                                                        </div>

                                                        <!-- monthly -->
                                                        <div class="checkbox  pb-3">
                                                                <input name="maintenance_type" type="checkbox" value="monthly_maintenance" id= 'monthly_check' onclick="return checkbox();"/>
                                                                <label>Monthly Maintenance</label>
                                                            </div>
                                                            <div class="form-row pb-3" id="monthly_maintenance">    
                                                                <div class="col-sm-5 form-group">
                                                                    <label data-error="wrong" data-success="right" for="months">Number of Months</label>
                                                                    <input required="required" id="months" name="months" type="number" class="form-control validate" placeholder="Months">
                                                                    <input type="text" name="month_date" class="form-control"/>
                                                                </div>     
                                                            </div>
                                                        
                                                        <!-- yearly -->
                                                        <div class="checkbox  pb-3">
                                                                <input name="maintenance_type" type="checkbox" value="yearly_maintenance" id= 'yearly_check' onclick="return checkbox();"/>
                                                                <label>Yearly Maintenance</label>
                                                            </div>
                                                            <div class="form-row pb-3" id="yearly_maintenance">    
                                                                <div class="col-sm-5 form-group">
                                                                    <label data-error="wrong" data-success="right" for="years">Number of Years</label>
                                                                    <input required="required" id="years" name="years" type="number" class="form-control validate" placeholder="Years">
                                                                    <input type="text" name="year_date" class="form-control"/>
                                                                </div>
                                                            </div>
                                                     
                                                    </fieldset>
                                                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                                                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                                                
                                                </div>

                                                <!-- Contract -->
                                                <div class="setup-content"  id="step-14">
                                                    <h3 class="font-weight-bold pl-0 my-4"><strong>Step 3</strong></h3>
                                
                                
                                                    <div class="form-group">
                                                        <label class="col-sm-2" for="resume">Upload Display Picture</label>
                                                        <div class="col-sm-10">
                                                            <input required="required" class="form-control" type="file" name="image" id="image" required>                  
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                                                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                                                
                                                </div>

                                                <!-- Funding -->
                                                <div class="setup-content"  id="step-15">                                
                                                    <div class="form-group">
                                                        <label class="col-sm-2" for="resume">Upload Display Picture</label>
                                                        <div class="col-sm-10">
                                                            <input required="required" class="form-control" type="file" name="image" id="image" required>                  
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                                                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                                                
                                                </div>
                                    
                                                <!-- Transaction History -->
                                                
                                                <div class="setup-content"  id="step-16">
                                                        <h3 class="font-weight-bold pl-0 my-4"><strong>Step 3</strong></h3>
                                    
                                    
                                                        <div class="form-group">
                                                            <label class="col-sm-2" for="resume">Upload Display Picture</label>
                                                            <div class="col-sm-10">
                                                                <input required="required" class="form-control" type="file" name="image" id="image" required>                  
                                                            </div>
                                                        </div>
                                    
                                
                                                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                                                    <button class="btn btn-default btn-rounded float-right" type="submit">Submit</button>
                                                </div>
                                
                                            </form>
                                    </div>
                        </div>
                    </section>
            </div>
        </section>
<!-- ./Tabs -->
    </main>
@endsection
@section('page_scripts')

<script type="text/javascript" src="{{url('js/custom/form.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


<script type="text/javascript">
function checkbox() {
    var check = document.getElementsByName("maintenance_type");
    var numCheck = 0;
    for (var i =0; i<check.length; i++) {
        if (check[i].checked) {
            numCheck++
        };
    }
    if (numCheck > 1) {
        alert('You can only select one maintenance type')
        return false;
    }
    // if($('#hourly_check').val == 'hourly_maintenance') {
    //     $('#hourly_maintenance').toggle();
    // }
  

}
$(document).ready(function(){
    $("#hourly_check").click(function(){
        $("#hourly_maintenance").toggle();
    });
    $("#daily_check").click(function(){
        $("#daily_maintenance").toggle();
    });
    $("#weekly_check").click(function(){
        $("#weekly_maintenance").toggle();
    });
    $("#monthly_check").click(function(){
        $("#monthly_maintenance").toggle();
    });
    $("#yearly_check").click(function(){
        $("#yearly_maintenance").toggle();
    });
});


//   if ($('#hourly_check').is(":checked"))
//     {
//         $('#hourly_maintenance').toggle();
//     }
    // if ($('#daily_check').is(":checked"))
    // {
    //     $('#daily_maintenance').toggle();
    // }
    // if ($('#monthly_check').is(":checked"))
    // {
    //     $('#monthly_maintenance').toggle();
    // }
    // if ($('#yearly_check').is(":checked"))
    // {
    //     $('#yearly_maintenance').toggle();
    // }
    // if ($('#weekly_check').is(":checked"))
    // {
    //     $('#weekly_maintenance').toggle();
    // }

</script>
<script>
    $(function() {
        $('input[name="datetimes"]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
            format: 'M/DD hh:mm A'
        }
        });

        $('input[name="day_date"]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
            format: 'M/DD hh:mm A'
        }
        });

        $('input[name="week_date"]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
            format: 'M/DD hh:mm A'
        }
        });

        $('input[name="month_date"]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
            format: 'M/DD hh:mm A'
        }
        });

        $('input[name="year_date"]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
            format: 'M/DD hh:mm A'
        }
        });
    });
</script>
@endsection