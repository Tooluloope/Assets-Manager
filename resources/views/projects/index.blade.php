@extends('layout')
@section('pageTitle')
 Projects 
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
                        <th class="text-center">Location</th>
                       
                        <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($projects as $project)
                    <tr >
                        <td style="vertical-align: middle;" class="text-left">{{$project->name}}</td>
                        <td>{{$project->location}}</td>
                        
                        <td style="color:white;">
                             <button data-toggle="modal" data-p_id="{{$project->id}}" data-name="{{$project->name}}"  data-location="{{$project->location}}" class="update btn btn-primary btn-sm" >Update</button>
                             <a class="btn btn-success btn-sm" href="{{ url('projects/'.$project->name.'/allocate-equipment') }}?id={{$project->id}}">Allocate Equipment</a>
                            <a class="btn btn-primary btn-sm" href="{{ url('/projects/'.$project->name.'/equipment') }}?id={{$project->id}}">View Equipment</a>

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
                           
                            <div class="form-row mt-3">
                               
                             <div class="form-row mt-3">
                                <div class="col">
                                    <label for="location">Location</label>
                                    <input type="text" id="" name="location" class="form-control" placeholder="Location" required>
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
                
                $('#location_update').val($(this).data('location'));
               
                $('#update').modal('show');
            });


        });

                </script>
                @endsection