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
                                    <img class="img-thumbnail" width="250" src="https://res.cloudinary.com/dn1b66xo5/image/upload/v1517578587/20180127_140429_uqwdam.jpg" alt="Card image cap">
                            </div>
                            <div class="col">
                                    <h5 class="card-text">Tolulope Adetula</h5>
                                    <p class="mb-1">tolulope.adetula@ariosh.com</p>
                                    <p class="mt-0">08188175286</p>
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class="text-secondary">Company Information</h5>
                    <div class="card">
                        <div class="card-body row pt-5">
                            <div class="col">
                                <p class="mb-1 mt-0">Company: Ariosh</p>
                                <p class="mb-1 mt-0">Designation: Engineer</p>
                                <p class="mb-1 mt-0">Employment Status: Expatriate(Local)</p>
                                <p class="mb-1 mt-0">Company: Ariosh</p>
                                <p class="mb-1 mt-0">Designation: Engineer</p>
                                <p class="mb-1 mt-0">Employment Status: Expatriate(Local)</p>
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
                                        <tr>
                                            <td>T-Bosiet</td>
                                            <td>26/09/2017</td>
                                            <td>26/09/2017</td>
                                        </tr>
                                        <tr>
                                            <td>General Medicals</td>
                                            <td>26/09/2017</td>
                                            <td>26/09/2017</td>
                                        </tr>
                                        <tr>
                                            <td>Tuberculosis</td>
                                            <td>26/09/2017</td>
                                            <td>26/09/2017</td>
                                        </tr>
                                        <tr>
                                            <td>Alcohol &amp; Drug</td>
                                            <td>26/09/2017</td>
                                            <td>26/09/2017</td>
                                        </tr>
                                        <tr>
                                            <td>Malaria Test</td>
                                            <td>26/09/2017</td>
                                            <td>26/09/2017</td>
                                        </tr>
                                        <tr>
                                            <td>Trade Certificate</td>
                                            <td>26/09/2017</td>
                                            <td>26/09/2017</td>
                                        </tr>
                                        <tr>
                                            <td>OSP</td>
                                            <td>26/09/2017</td>
                                            <td>26/09/2017</td>
                                        </tr>
                                        <tr>
                                            <td>Curriculum Vitae</td>
                                            <td>26/09/2017</td>
                                            <td>26/09/2017</td>
                                        </tr>
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