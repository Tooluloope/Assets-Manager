@extends('layout')
@section('pageTitle')
 Projects | Ariosh-Offshore
@endsection
@section('styles')
<link rel="stylesheet" href="css/custom/projects.css"/>
@endsection

@section('content')

    <main class="content-wrapper">
        <div class="container">
            <div class="">
                <div class="">
                    <div class="">
                   <h2 class="text-center">Projects</h2>
                    </div>
                    <table class="table table-striped table-bordered  nowrap" id="projects">
                    <thead>
                        <tr>
                        <th class="text-left">Name</th>
                        <th class="text-center">Start Date</th>
                        <th class="text-center">End Date</th>
                        <th class="text-center">Location</th>
                         <th class="text-center">Type</th>
                        <th class="text-center">Project Manager</th>
                        <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($projects as $project)
                    <tr >
                        <td style="vertical-align: middle;" class="text-left">{{$project->name}}</td>
                        <td>{{$project->start_date}}</td>
                        <td>{{$project->end_date}}</td>
                        <td>{{$project->location}}</td>
                        <td>{{$project->type}}</td>
                        <td>{{$project->project_manager}}</td>
                        <td style="color:white;">
                             <button data-toggle="modal" data-p_id="{{$project->id}}" data-name="{{$project->name}}" data-start="{{$project->start_date}}" data-end="{{$project->end_date}}" data-location="{{$project->location}}" data-manager="{{$project->project_manager}}" class="update btn btn-primary btn-sm" >Update</button>
                             <a class="btn btn-success btn-sm" href="{{ url('projects/'.$project->name.'/add-personnel') }}?id={{$project->id}}">Add Personnel</a>
                            <a class="btn btn-primary btn-sm" href="{{ url('/projects/'.$project->name.'/personnel') }}?id={{$project->id}}">View Personnel</a>
                            <a class="btn btn-primary btn-sm" href="{{ url('/projects/'.$project->name.'/manifest') }}?id={{$project->id}}">Manifest</a>

                        </td>
                    </tr>
               @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <button style="position: fixed; bottom: 50px; right: 30px;" data-toggle="modal" data-target="#exampleModalCenter" class=" btn btn-circle btn-primary-color" >+</button>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="projectForm" action="{{url('project')}}" method="post">
                        @csrf
                      
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="projectName">Project Name</label>
                                <input type="text" class="form-control" name="name" id="projectName" placeholder="Project Name" required>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="startDate">Start Date</label>
                                    <input placeholder="dd/mm/yyyy"  id="startDate" name="start_date" class="date form-control" placeholder="start date" required>
                                </div>
                                <div class="col">
                                    <label for="endDate">End Date</label>
                                    <input placeholder="dd/mm/yyyy"  id="endDate" name="end_date" class="date form-control" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                               
                                 <div class="col">
                                    <label for="type">Type</label>
                                    <select name="type" id="type" class="form-control form-control-chosen" data-placeholder="Please select..." required> 
                                    <option value="">Please select...</option>
                                    <option value="Offshore">Offshore</option>
                                    <option value="Onshore">Onshore</option>>
                                </select>
                                </div>
                                <div class="col">
                                    <label for="projectManager">Project Manager</label>
                                    <input type="text" id="projectManager"  name="project_manager" class="form-control" placeholder="Project Manager" required>
                                </div>
                            </div>
                             <div class="form-row mt-3">
                                <div class="col">
                                    <label for="location">Location</label>
                                    <input type="text" id="location_update" name="location" class="form-control" placeholder="Location" required>
                                </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>




              <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Update Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="projectForm" action="{{url('project/update')}}" method="post">
                        @csrf
                          <input type="hidden" id="project_id" name="project_id" value=""/>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="projectName">Project Name</label>
                                <input type="text" class="form-control" name="name" id="name_update" placeholder="Project Name" required>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="startDate">Start Date</label>
                                    <input placeholder="dd/mm/yyyy"  id="sdate_update" name="start_date" class="date form-control" placeholder="start date" required>
                                </div>
                                <div class="col">
                                    <label for="endDate">End Date</label>
                                    <input placeholder="dd/mm/yyyy"  id="edate_update" name="end_date" class="date form-control" placeholder="Last name" required>
                                </div>
                            </div>

                                <div class="form-row mt-3">
                                <div class="col">
                                    <label for="type">Type</label>
                                    <select name="type" id="type_update" class="form-control form-control-chosen" data-placeholder="Please select..." required> 
                                    <option value="">Please select...</option>
                                    <option value="Offshore">Offshore</option>
                                    <option value="Onshore">Onshore</option>>
                                </select>
                                </div>
                                <div class="col">
                                    <label for="projectManager">Project Manager</label>
                                    <input type="text" id="manager_update"  name="project_manager" class="form-control" placeholder="Project Manager" required>
                                </div>
                            </div>

                            <div class="form-row mt-3">
                                <div class="col">
                                    <label for="location">Location</label>
                                    <input type="text" id="location_update" name="location" class="form-control" placeholder="Location" required>
                                </div>

                                </div>
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

                @if(session('message') != NULL)
<script type="text/javascript">
    
toastr.info('{{session('message')}}')

</script>


@endif
                <script>
                    $('projectForm').validate();
                    $('.date').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
});
                </script>
                <script type="text/javascript">
        $(document).ready(function () {

               $('#projects').DataTable(  {
         "fixedHeader": true 
         ,
    columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ]
       
    } );

            $(".update").click(function () {
                $('#project_id').val($(this).data('p_id'));
                $('#name_update').val($(this).data('name'));
                $('#sdate_update').val($(this).data('start'));
                $('#edate_update').val($(this).data('end'));
                $('#location_update').val($(this).data('location'));
                 $('#type_update').val($(this).data('type'));
                $('#manager_update').val($(this).data('manager'));
                $('#update').modal('show');
            });
        });

                </script>
                @endsection