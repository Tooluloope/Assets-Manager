@extends('layout')
@section('pageTitle')
 Equipment
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection


@section('content')
    <main class="content-wrapper">
        <div class="container">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Equipment</th>
                        <th>Purchase Date</th>
                        <th>Equipment Type</th>
                        <th>Location</th>
                        <th>Category</th>
                        <th>Condition</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </main>
@endsection

@section('page_scripts')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            fixedHeader: true

        });
    });
</script>
@endsection