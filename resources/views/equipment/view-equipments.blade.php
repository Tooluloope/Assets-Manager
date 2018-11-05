@extends('layout')
@section('pageTitle')
 View Equipments 
@endsection
@section('styles')
<link rel="stylesheet" href="{{url('css/custom/personnel.css')}}"/>
<link href="{{url('css/custom/datatable-jquery.css')}}">
<link href="{{url('css/custom/custom.css')}}">

<style type="text/css"> 
table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child:before {
    top: 22px !important;}
table.dataTable>tbody>tr.child{
    left: 0px !important;
}
</style>
@endsection
@section('content')
<main class="content-wrapper">
    <div class="container-fluid">

                <h2 class="text-center">Equipment</h2>
           
                <table id="personnels" class="table table-striped table-bordered  ">
                    <thead>
                        <tr>

                            <th class="text-center">Tag No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Category</th>
                            <th class="text-center"> Quantity</th>
                            <th class="text-center">SWL</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Location</th>
                            <th class="text-center" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($equipments as $equipment)
                         <tr>
                            <td>{{$equipment->tag_no == '' ? 'A***' : $equipment->tag_no}}</td>
                            <td><a style='color:#428bca;' href="{{ url('/equipment-name') }}">{{$equipment->name}}</a></td>
                            <td>{{$equipment->category}}</td>
                            <td>{{$equipment->quantity}}</td>
                            <td>{{$equipment->swl}}</td>
                            <td>{{$equipment->size}}</td>
                            <td>{{$equipment->current_locaton}}</td>
                            <td></td>


                         </tr>

                         @endforeach
            
                    </tbody>
                </table>

        <button style="position: fixed; bottom: 50px; right: 30px;" data-toggle="modal" data-target=".bd-example-modal-lg" class=" btn btn-circle btn-primary-color" >+</button>

        
         
                </div>
        

    
</main>
@endsection
@section('page_scripts')

<script type="text/javascript">
    
       $(document).ready(function() {
    $('#personnels').DataTable(  {
       "fixedHeader": true ,
   });

} );

</script>
<script src="{{url('js/custom/row.js')}}"></script>
<!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->

<script src="{{url('js/custom/fixedHeader.js')}}"></script>

@endsection