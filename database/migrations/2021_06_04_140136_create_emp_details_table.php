<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_details', function (Blueprint $table) {
            $table->id();
            $table->integer('epfNo');
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->date('dateOfJoined')->nullable();
            $table->string('shiftStTime')->nullable();
            $table->string('shiftEndTime')->nullable();
            $table->string('empVehicleNo')->nullable();
            $table->string('transportMethods')->nullable();
            $table->string('routeName')->nullable();
            $table->string('vehicleNo')->nullable();
            $table->string('vehicleType')->nullable();
            $table->string('NIC')->nullable();
            $table->string('empFName')->nullable();
            $table->string('empLName')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('contactNo')->nullable();
            $table->string('emergencyConPerson')->nullable();
            $table->string('emergencyConNo')->nullable();
            $table->string('emergencyConNo2')->nullable();
            $table->string('perAddress')->nullable();
            $table->string('perCity')->nullable();
            $table->string('perDistrict')->nullable();
            $table->string('perPHI')->nullable();
            $table->string('perGS')->nullable();
            $table->string('perPoliceArea')->nullable();
            $table->boolean('stayPermanent')->nullable();
            $table->string('tempAddress')->nullable();
            $table->string('tempCity')->nullable();
            $table->string('tempDistrict')->nullable();
            $table->string('tempPHI')->nullable();
            $table->string('tempGS')->nullable();
            $table->string('tempPoliceArea')->nullable();
            $table->string('bordOwnerName')->nullable();
            $table->string('bordOwnerCon')->nullable();
            $table->string('noOfBordimates')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_details');
    }
}
