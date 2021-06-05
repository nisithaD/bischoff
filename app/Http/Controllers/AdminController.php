<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addNewEmp(Request $request)
    {
        DB::table('emp_details')->insert(
            array(
                'epfNo' => $request->epfNo,
                'department' => $request->department,
                'designation' => $request->designation,
                'dateOfJoined' => $request->dateOfJoined,
                'shiftStTime' => $request->shift,
                'shiftEndTime' => $request->startTime,
                'transportMethods' => $request->transportMethod,
                'routeName' => $request->transportRoot,
                'vehicleNo' => $request->vehicleNumber,
                'NIC' => $request->nicNo,
                'empFName' => $request->fName,
                'empLName' => $request->lName,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'contactNo' => $request->phoneNo,
                'emergencyConPerson' => $request->emergencyName,
                'emergencyConNo' => $request->emergencyPhno,
                'emergencyConNo2' => $request->emergencyPhno2,
                'perAddress' => $request->permanantAddress,
                'perCity' => $request->city,
                'perDistrict' => $request->district,
                'perPHI' => $request->phiArea,
                'perGS' => $request->gsDivision,
                'perPoliceArea' => $request->policeArea,
                'stayPermanent' => $request->stayPermanent,
                'tempAddress' => $request->tempAddress,
                'tempCity' => $request->tempCity,
                'tempDistrict' => $request->tempDistrict,
                'tempPHI' => $request->tempPhiArea,
                'tempGS' => $request->tempGsDivision,
                'tempPoliceArea' => $request->tempPoliceArea,
                'bordOwnerName' => $request->bOwnerName,
                'bordOwnerCon' => $request->bOwnerContact,
                'noOfBordimates' => $request->bordimaitesCount,
            )
        );
        return redirect()->back()->with('message', 'New employee added successfully!');
    }

    public function viewEmployees()
    {
       $data= DB::table('emp_details')->get()->all();
       return view('employees.allEmployees')->with('employeeData',$data);
    }

    public function viewEmpData($id)
    {
        $data=DB::table('emp_details')->where('id',$id)->first();
        return view('employees.viewEmpData')->with('employeeData',$data);
    }
    public function deleteEmp($id)
    {
       DB::table('emp_details')->where('id',$id)->delete();
       return redirect()->back();
    }
}
