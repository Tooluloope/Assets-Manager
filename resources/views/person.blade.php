@extends('layout')
@section('styles')
    <style>
        th {
            text-align: center !important;
        }
        td {
            text-align: center !important;
        }
        .table .thead-theme th {
            color: #fff;
            background-color: #002545 !important;
            border-color: #002545;
        }
    </style>
@endsection
@section('content')
    <main class="content-wrapper">
        <div class="container">
            <h3>Personnel Profile</h3>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h5 class="text-secondary">Personal Information</h5>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col">
                                    <img class="img-thumbnail" width="250" src="{{url('images/engineer.png')}}" alt="Card image cap">
                            </div>
                            <div class="col">
                                    <h5 class="card-text">{{$personnel->name}} <small>{{$personnel->nationality}}</small> </h5>
                                    <p class="mb-1">{{$personnel->email}}</p>
                                    <p class="mt-0">{{$personnel->phone_number}}</p>
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class="text-secondary">Company Information</h5>
                    <div class="card">
                        <div class="card-body row pt-5">
                            <div class="col">
                                <p class="mb-1 mt-0">Company: {{$personnel->company}}</p>
                                <p class="mb-1 mt-0">Designation: {{$personnel->designation}}</p>
                                <p class="mb-1 mt-0">Employment Status: {{$personnel->employment_status}}</p>
                                <p class="mb-1 mt-0">Category: {{$personnel->category}}</p>
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <h5 class="text-secondary">Documents</h5>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col">
                                <table class="table  table-hover table-stripped table-bordered dt-responsive nowrap">
                                    <thead class="thead-theme"> 
                                        <tr>
                                            <th>Name</th>
                                            <th>Date Issued</th>
                                            <th>Date Expired</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  @if(isset($personnel->t_bosiet))      <tr>
                                            <td><a href="{{url('storage/app')}}/{{$personnel->t_bosiet}}" target="_blank">T-Bosiet</a></td>
                                            <td>{{$personnel->t_bosiet_issue_date}}</td>
                                            <td>{{$personnel->t_bosiet_validity_date}}</td>
                                        </tr>@endif
                                   @if(isset($personnel->general_medicals))     <tr>
                                            <td><a href="{{url('storage/app')}}/{{$personnel->general_medicals}}" target="_blank">General Medicals</a></td>
                                             <td>{{$personnel->general_medicals_issue_date}}</td>
                                            <td>{{$personnel->general_medicals_validity_date}}</td>
                                        </tr>@endif
                                  @if(isset($personnel->tuberculosis))      <tr>
                                            <td><a href="{{url('storage/app')}}/{{$personnel->tuberculosis}}" target="_blank">Tuberculosis</a></td>
                                            <td>{{$personnel->tuberculosis_issue_date}}</td>
                                            <td>{{$personnel->tuberculosis_validity_date}}</td>
                                        </tr>@endif
                                  @if(isset($personnel->alcohol_and_drug))      <tr>
                                            <td><a href="{{url('storage/app')}}/{{$personnel->alcohol_and_drug}}" target="_blank">Alcohol &amp; Drug</a></td>
                                             <td>{{$personnel->alcohol_and_drug_issue_date}}</td>
                                            <td>{{$personnel->alcohol_and_drug_validity_date}}</td>
                                        </tr>@endif
                                   @if(isset($personnel->malaria))     <tr>
                                            <td><a href="{{url('storage/app')}}/{{$personnel->malaria}}" target="_blank">Malaria Test</a></td>
                                             <td>{{$personnel->malaria_issue_date}}</td>
                                            <td>{{$personnel->malaria_validity_date}}</td>
                                        </tr>@endif
                                        @if(isset($personnel->certificate))
                                        <tr>
                                  @if($personnel->certificate->trade() !='')             <td><a href="{{url('storage/app')}}/{{$personnel->certificate->trade()->certificate}}" target="_blank"> Trade Certificate</a></td>
                                             <td>{{$personnel->certificate->trade()->issue_date}}</td>
                                            <td>{{$personnel->certificate->trade()->validity_date}}</td>
                                        </tr> @endif
                              @if($personnel->certificate->osp() !='')          <tr>
                                            <td><a href="{{url('storage/app')}}/{{$personnel->certificate->osp()->certificate}}" target="_blank"> OSP</a></td>
                                            <td>{{$personnel->certificate->osp()->issue_date}}</td>
                                            <td>{{$personnel->certificate->osp()->validity_date}}</td>
                                        </tr> 
                            @endif
                             @if($personnel->certificate->cv() !='')           <tr>
                                            <td><a href="{{url('storage/app')}}/{{$personnel->certificate->cv()->certificate}}" target="_blank">Curriculum Vitae</a></td>
                                            <td>{{$personnel->certificate->cv()->issue_date}}</td>
                                            <td>{{$personnel->certificate->cv()->validity_date}}</td>
                                        </tr>
                             @endif
                             @endif
                                    </tbody>
                                </table>
                                <!-- <p class="mb-1 mt-0">T-Bosiet: Ariosh</p>
                                <p class="mb-1 mt-0">General Medicals: Engineer</p>
                                <p class="mb-1 mt-0">Tuberculosis: Expatriate(Local)</p>
                                <p class="mb-1 mt-0">Alcohol &amp; Drug: Ariosh</p>
                                <p class="mb-1 mt-0">Malaria Test: Engineer</p>
                                <p class="mb-1 mt-0">Trade Certificate: Expatriate(Local)</p>
                                <p class="mb-1 mt-0">OSP: Expatriate(Local)</p>
                                <p class="mb-1 mt-0">Curriculum Vitae: Expatriate(Local)</p> -->

                            </div>      
                        </div>
                    </div>
                </div>
            
            </div>
            
        </div>
    </main>

@endsection