@extends('layout')
@section('pageTitle')
 Equipments| Add Equipments
@endsection
@section('styles')
<link rel="stylesheet"  href="{{url('css/custom/form-tab.css')}}">
@endsection


@section('content')
    <main class="content-wrapper">
        <!-- Tabs -->
        <section id="tabs pl-5" style="padding-left: 20px">
            <h6 class="section-title h1 pb-5">Add New Equipments</h6>
            <div class="container-fluid form-tab">
                
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General</a>
                                <a class="nav-item nav-link" id="nav-depreciation-tab" data-toggle="tab" href="#nav-depreciation" role="tab" aria-controls="nav-depreciation" aria-selected="false">Depreciation</a>
                                <a class="nav-item nav-link" id="nav-picture-tab" data-toggle="tab" href="#nav-picture" role="tab" aria-controls="nav-picture" aria-selected="false">Picture</a>
                                <a class="nav-item nav-link" id="nav-maintenance-tab" data-toggle="tab" href="#nav-maintenance" role="tab" aria-controls="nav-maintenance" aria-selected="false">Maintenance</a>
                                <a class="nav-item nav-link " id="nav-contract-tab" data-toggle="tab" href="#nav-contract" role="tab" aria-controls="nav-contract" aria-selected="true">Contract</a>
                                <a class="nav-item nav-link" id="nav-funding-tab" data-toggle="tab" href="#nav-funding" role="tab" aria-controls="nav-funding" aria-selected="false">Funding</a>
                                <a class="nav-item nav-link" id="nav-transaction-history-tab" data-toggle="tab" href="#nav-transaction-history" role="tab" aria-controls="nav-transaction-history" aria-selected="false">Transaction History</a>
                            </div>
                        </nav>
                        <form action="">
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                
                                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                                        <div class="form-row pt-4">
                                                <div class="col">
                                                    <label for="equipment-tag">Equipment Tag</label>
                                                    <input id="equipment-tag" type="text" class="form-control" placeholder="Equipment Tag">
                                                </div>
                                            <div class="col">
                                                <label for="equipment-desc">Equipment Description</label>
                                                <input id="equipment-desc" type="text" class="form-control" placeholder="Equipment Description">
                                            </div>
                                            
                                            <div class="col">
                                                <label for="equipment-type">Equipment Type</label>
                                                <input id="equipment-type" type="text" class="form-control" placeholder="Equipment Type">
                                            </div>
                                        </div>

                                        <div class="form-row pt-4">
                                                <div class="col">
                                                    <label for="manufacturer">Manufacturer</label>
                                                    <input id="manufacturer" type="text" class="form-control" placeholder="Manufacturer">
                                                </div>
                                            <div class="col">
                                                <label for="model">Model</label>
                                                <input id="model" type="text" class="form-control" placeholder="Model">
                                            </div>
                                            <div class="col">
                                                <label for="vendor-number">Vendor Number</label>
                                                <input id="vendor-number" type="text" class="form-control" placeholder="Vendor Number">
                                            </div>
                                        </div>
                                        <div class="form-row pt-4">
                                                <div class="col">
                                                    <label for="site">Site</label>
                                                    <input id="site" type="text" class="form-control" placeholder="Site">
                                                </div>
                                            <div class="col">
                                                <label for="location">Location</label>
                                                <input id="location" type="text" class="form-control" placeholder="Location">
                                            </div>
                                            <div class="col">
                                                <label for="condition">Condition</label>
                                                <input id="condition" type="text" class="form-control" placeholder="Condition">
                                            </div>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    <div class="tab-pane fade" id="nav-depreciation" role="tabpanel" aria-labelledby="nav-depreciation-tab">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                    </div>
                                    <div class="tab-pane fade" id="nav-picture" role="tabpanel" aria-labelledby="nav-picture-tab">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                    </div>
                                    <div class="tab-pane fade" id="nav-maintenance" role="tabpanel" aria-labelledby="nav-maintenance-tab">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                    </div>
                                    <div class="tab-pane fade " id="nav-contract" role="tabpanel" aria-labelledby="nav-contract-tab">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                    </div>
                                    <div class="tab-pane fade" id="nav-funding" role="tabpanel" aria-labelledby="nav-funding-tab">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                    </div>
                                    <div class="tab-pane fade" id="nav-transaction-history" role="tabpanel" aria-labelledby="nav-transaction-history-tab">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                    </div>
                                
                            </div>
                        </form>

                        
                    
                    </div>
                </div>
            </div>
        </section>
<!-- ./Tabs -->
    </main>
@endsection