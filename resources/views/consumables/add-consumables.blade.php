@extends('layout')
@section('pageTitle')
 Equipment| Add Consumables
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
                    
                                <h2 class="text-center font-weight-bold pt-4 pb-5"><strong>Add New Consumables</strong></h2>


                                <form role="form" action=" " id="formStepper" method="post" enctype="multipart/form-data">
                                    @csrf

                                        
                                    <div class="form-row pb-3">
                                        <div class="col form-group">
                                            <label for="consumable-name" data-error="wrong" data-success="right">Consumable name</label>
                                            <input required="required" id="consumable-name" name="consumable-name" type="text" class="form-control validate" placeholder="Consumable name">
                                        </div>
                                        <div class="col form-group">
                                            <label for="consumable-size">Consumable Size</label>
                                            <input required="required" id="consumable-size" type="text" class="form-control validate" placeholder="Consumable Size">
                                        </div>
                                    </div>
                                    <div class="form-row pb-3">    
                                        <div class="col-2 form-group">
                                            <label for="consumable-quantity" data-error="wrong" data-success="right">Consumable Quantity</label>
                                            <input required="required" id="consumable-quantity" name="consumable-quantity" type="number" class="form-control validate" placeholder="Consumable Quantity">
                                        </div>
                                        <div class="col-1 form-group">

                                        <label data-error="wrong" data-success="right" for="measurement">Measurement</label>
                                            <select required="required" id="measurement" name="measurement" class="form-control validate">
                                                <option value="123" selected>---Select---</option>
                                                <option value="Fabrication Yard">Dozen</option>
                                                <option value="Fabrication Yard">Pieces</option>

                                            </select> </div>
                                        
                                        <div class="col form-group">
                                            <label data-error="wrong" data-success="right" for="location">Location</label>
                                            <select required="required" id="location" name="location" class="form-control validate">
                                                <option value="123" selected>---Select---</option>
                                                <option value="Fabrication Yard">Fabrication Yard</option>
                                            </select> </div>
                                            <div class="col form-group">
                                                <label data-error="wrong" data-success="right" for="category">category</label>
                                                <select required="required" id="category" name="category" class="form-control validate">
                                                    <option value="123" selected>---Select---</option>
                                                    <option value="Fabrication Yard">Welding</option>
                                                </select> </div>
                                    </div>
                                   


                                   
                                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Submit</button>

                    
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
@endsection