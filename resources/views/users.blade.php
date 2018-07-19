@extends('layout')
@section('styles')
<link rel="stylesheet" href="css/custom/users.css"/>
@endsection
@section('content')
<main class="content-wrapper">
    <div class="container">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card table-responsive">
                <div class="table-heading px-2 px-1 border-bottom">
                <h1 class="mdc-card__title mdc-card__title--large">Authorized Users</h1>
                </div>
                <table class="table">
                <thead>
                    <tr>
                    <th class="text-left">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Date Authorized</th>
                    <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <tr >
                    <td style="vertical-align: middle;" class="text-left">Adetula Tolulope </td>
                    <td>tolulope.adetula@ariosh.com</td>
                    <td>11/12/2007</td>
                    <td style="color:white;"><a class="btn btn-danger btn-sm">Delete</a>
                        <a class="btn btn-primary btn-sm">Edit User</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">Baseball Hat</td>
                    <td>457</td>
                    <td>204</td>
                    <td style="color:white;"><a class="btn btn-danger btn-sm">Delete</a>
                        <a class="btn btn-primary btn-sm">Edit User</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">Tennis Racket</td>
                    <td>250</td>
                    <td>350</td>
                    <td style="color:white;"><a class="btn btn-danger btn-sm">Delete</a>
                        <a class="btn btn-primary btn-sm">Edit User</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">Gloves</td>
                    <td>250</td>
                    <td>300</td>
                    <td style="color:white;"><a class="btn btn-danger btn-sm">Delete</a>
                        <a class="btn btn-primary btn-sm">Edit User</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">Shoes</td>
                    <td>673</td>
                    <td>457</td>
                    <td style="color:white;"><a class="btn btn-danger btn-sm">Delete</a>
                        <a class="btn btn-primary btn-sm">Edit User</a>
                    </td>
                </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button style="position: absolute; bottom: 50px; right: 30px;" data-toggle="modal" data-target="#exampleModalCenter" class=" btn btn-circle btn-primary-color" >+</button>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="userForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
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
    $('userForm').validate();
</script>
@endsection