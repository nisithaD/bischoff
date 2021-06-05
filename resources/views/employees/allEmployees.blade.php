@extends('layout.header')

@section('content')

    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All employees</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>EPF No</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($employeeData as $employee)
                        <tr>
                            <td>{{$employee->empFName}} {{$employee->empLName}}</td>
                            <td>{{$employee->epfNo}}</td>
                            <td>{{$employee->department}}</td>
                            <td>{{$employee->designation}}</td>
                            <td>{{$employee->gender}}</td>
                            <td>
                                <a type="button" href="/viewEmp/{{$employee->id}}" class="btn btn-sm btn-primary">View</a>
                                <a type="button" href="/deleteEmp/{{$employee->id}}" class="btn btn-sm btn-danger">Delete</a>
                                <a type="button" href="/editEmp/{{$employee->id}}" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="./js/demo/datatables-demo.js"></script>
