@extends('layout')
@section('styles')
<link rel="stylesheet" href="css/custom/projects.css"/>
@endsection

@section('content')

    <main class="content-wrapper">
        <div class="container">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card table-responsive">
                    <div class="table-heading px-2 px-1 border-bottom">
                    <h1 class="mdc-card__title mdc-card__title--large">Projects</h1>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                        <th class="text-left">Name</th>
                        <th class="text-center">Start Date</th>
                        <th class="text-center">End Date</th>
                        <th class="text-center">Location</th>
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
                        <td>{{$project->project_manager}}</td>
                        <td style="color:white;">
                             <a class="btn btn-success btn-sm" href="{{ url('projects/'.$project->name.'/add-personnel') }}?id={{$project->id}}">Add Personnel</a>
                            <a class="btn btn-primary btn-sm" href="{{ url('/projects/'.$project->name.'/personnel') }}?id={{$project->id}}">View Personnel</a>
                        </td>
                    </tr>
               @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <button style="position: absolute; bottom: 50px; right: 30px;" data-toggle="modal" data-target="#exampleModalCenter" class=" btn btn-circle btn-primary-color" >+</button>

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
                                    <input type="date" id="startDate" name="start_date" class="form-control" placeholder="start date" required>
                                </div>
                                <div class="col">
                                    <label for="endDate">End Date</label>
                                    <input type="date" id="endDate" name="end_date" class="form-control" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <label for="location">Location</label>
                                    <input type="text" id="location" name="location" class="form-control" placeholder="Location" required>
                                </div>
                                <div class="col">
                                    <label for="projectManager">Project Manager</label>
                                    <input type="text" id="projectManager"  name="project_manager" class="form-control" placeholder="Project Manager" required>
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
                <script>
                    $('projectForm').validate();
                </script>
                @endsection