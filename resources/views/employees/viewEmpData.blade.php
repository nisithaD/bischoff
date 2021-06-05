@extends('layout.header')
@section('content')

    <style>
        #detail_row{
            margin-bottom: 20px;
        }
    </style>
    <div class="container-fluid">
        <div class="container right-container col-md-8" id="printableArea" style="display:block;">
    <span id="link7">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 id="school_title" style="text-align: center">Employee Details</h3>
                <p style="text-align: center">Bischoff Gamma Lanka<p>
                <p style="font-size: 1.1em;" id="exam_title"><p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="header-time-date-marks">
                            <span id="date">Date: {{ \Carbon\Carbon::now()->toDateString() }} </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr id="line" style="margin-top: 13px;">
          <div class="row" id="detail_row">
                <div class="col">
                  First name : {{$employeeData->empFName}}
                </div>
                <div class="col">
                  Last name : {{$employeeData->empLName}}
                </div>
          </div>
        <div class="row" id="detail_row">
                <div class="col">
                  EPF No : {{$employeeData->epfNo}}
                </div>
                <div class="col">
                  Department : {{$employeeData->department}}
                </div>
          </div>
         <div class="row" id="detail_row">
                <div class="col">
                  Designation : {{$employeeData->designation}}
                </div>
                <div class="col">
                  Date of joined : {{$employeeData->dateOfJoined}}
                </div>
          </div>
        <div class="row" id="detail_row">
                <div class="col">
                  Shift start time : {{$employeeData->shiftStTime}}
                </div>
                <div class="col">
                  Shift end time: {{$employeeData->shiftEndTime}}
                </div>
          </div>
        <div class="row" id="detail_row">
                <div class="col">
                  NIC : {{$employeeData->NIC}}
                </div>
                <div class="col">
                  Gender : {{$employeeData->gender}}
                </div>
          </div>
          <div class="row" id="detail_row">
                <div class="col">
                  Date of birth : {{$employeeData->dob}}
                </div>
          </div>
          <div class="row" id="detail_row">
                <div class="col">
                  Contact no : {{$employeeData->contactNo}}
                </div>
                <div class="col">
                  Permanent address : {{$employeeData->perAddress}}
                </div>
          </div>

        <button class="btn btn-primary float-right" onclick="printDiv('printableArea')"><i class="fa fa-print"></i> Print</button>
    </span>
        </div>
    </div>
@endsection
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
