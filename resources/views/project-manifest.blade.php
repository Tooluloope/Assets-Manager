@extends('layout')
@section('styles')
<style type="text/css"> input[type="date"]:before {
    content: attr(placeholder) !important;
    color: #aaa;
    margin-right: 0.5em;
  }
  input[type="date"]:focus:before,
  input[type="date"]:valid:before {
    content: "";
  }
table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child:before {
    top: 22px !important;}
table.dataTable>tbody>tr.child{
    left: 0px !important;
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
            
     
                <h2 class="text-center" >ON-SIGNERS TO {{$project->name}}</h2>
           <div class="row hideme" ><div class="col-md-12"><button  class=" pull-right personnels btn btn-success btn-md" onclick="printInfo()">Print </button> </div> <br> <br> </div> 
                <table id="personnels" class="table table-striped table-bordered  dt-responsive nowrap" style="width:100%">
                <thead class="thead-theme">
                    <tr>
                      <th class="text-center">S/N</th>
                    <th class="text-center">Personnel Name</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Company</th>
                    <th class="text-center hideme" >Action</th>

                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($project_manifest as $key =>$personnel)
                    <tr >
                       <td style="vertical-align: middle;" class="text-left">{{$key+1}} </td>
                        <td style="vertical-align: middle;" class="text-left"> <a href="{{ url('/personnel/'.$personnel->personnel->name) }}?id={{$personnel->personnel->id}}">{{$personnel->personnel->name}}</a></td>
                         
                       <td style="vertical-align: middle;" class="text-left">{{$personnel->personnel->designation}} </td>
                  
                              <td style="vertical-align: middle;" class="text-left">{{$personnel->personnel->company}} </td>
                            
                             
                        <!--  -->
                        <td style="color:white;" class="hideme">
                             
                               <a href="{{ url('projects/'.$personnel->project->name.'/manifest/remove') }}?project_id={{$project->id}}&personnel_id={{$personnel->personnel->id}}" class="btn btn-danger btn-sm">Remove</a>
                        </td>
                         
                    </tr>
                   @endforeach
        
                </tbody>
                </table>
        
    </div>
</main>
@endsection
@section('page_scripts')
<!-- <script src="js/custom/home.js"></script> -->
<script>

  function printInfo() {
    var content = $('#printinfo');

    $('aside').hide();
    $('.menu-toggler').click();
    $('header').hide();
    $('footer').hide();
    $('.hideme').hide();
    $('.dataTables_length').hide();
    $('.dataTables_filter').hide();
    $('.dataTables_info').hide();
    $('.dataTables_paginate').hide();
    print();
    $('aside').show();
    $('.menu-toggler').click();
    $('header').show();
    $('footer').show();
    $('.hideme').show();
    $('.dataTables_length').show();
    $('.dataTables_filter').show();
    $('.dataTables_info').show();
    $('.dataTables_paginate').show();

} 
    $(document).ready(function() {
    $('#personnels').DataTable(  {
       "fixedHeader": true ,
    columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ]
} );
} );


</script>
@if(session('message') != NULL)
<script type="text/javascript">
    
toastr.info('{{session('message')}}')
</script>

@endif

@endsection