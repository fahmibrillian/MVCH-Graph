<?php

namespace App\Http\Controllers;

use Faker\Factory;

use App\Person;
use App\Employee;
use App\Nurse;
use App\Technician;
use App\Staff;
use App\WorkUnit;
use App\CareCenter;

use Illuminate\Http\Request;

class CreateDummy extends Controller
{
    public function generate(){
        $faker = Factory::create();
        foreach(range(1,20) as $index){
            $workunit = new WorkUnit;
            $workunit->WorkUnitName = $faker->randomElement($array = array ('ICU','ER','OR','Medicine','Surgery','Pediatrics','OB/GYN'));
            $workunit->LocationFacility = $faker->randomElement($array = array ('Hospital','Clinic','Nursing Home','Assisted Living','Home Health','School','Other'));
            $workunit->LocationFloor = $faker->randomElement($array = array ('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20'));
            $workunit->save();
        }

        foreach(range(1,50) as $index){
            $carecenter = new CareCenter;
            $carecenter->CareCenterID = $faker->randomNumber($nbDigits = 5);
            $carecenter->CareCenterName = $faker->randomElement($array = array ('ICU','ER','OR','Medicine','Surgery','Pediatrics','OB/GYN'));
            $carecenter->save();

            $workunits = WorkUnit::all()->random(1)->first();
            $carecenter->workUnit()->save($workunits);
        }

        for ($i=0; $i < 200; $i++) {
            $person = new Person;
            $person->country = $faker->country;
            $person->SSN = $faker->ssn;
            $person->Name = $faker->name;
            $person->AddressCity = $faker->city;
            $person->AddressState = $faker->stateAbbr;
            $person->AddressZIP = $faker->postcode;
            $person->BirthDate = $faker->date($format = 'Y-m-d', $max = 'now');
            $person->Phone = $faker->phoneNumber;
            $person->Email = $faker->email;
            $person->save();
        }

        $person = Person::take(200)->get();
        foreach ($person as $key => $value) {
            $employee = new Employee;
            $employee->EmployeeNumber = $faker->randomNumber($nbDigits = 6, $strict = false);
            $employee->HireDate = $faker->date($format = 'Y-m-d', $max = 'now');
            $employee->save();
            $employee->person()->save($value);
        }

        $employee = Employee::take(50)->get();

        foreach ($employee as $key => $value) {
            $nurse = new Nurse;
            $nurse->CertificateDegree = $faker->randomElement($array = array ('RN','LPN','CNA'));
            $nurse->NursingLicense = $faker->randomElement($array = array ('CA','TX','FL','NY','PA','IL','OH','GA','NC','MI','NJ','VA','WA','AZ','MA','TN','IN','MO','MD','WI','CO','MN','SC','AL','LA','KY','OR','OK','CT','UT','IA','NV','AR','MS','KS','NM','NE','ID','HI','ME','NH','RI','MT','DE','SD','ND','WV','AK','WY','DC'));
            $nurse->Speciality = $faker->randomElement($array = array ('ICU','ER','OR','Medicine','Surgery','Pediatrics','OB/GYN'));
            $nurse->save();
            $nurse->employee()->save($value);

            $randomcarecenter = CareCenter::all()->random(1)->first();
            $nurse->carecenter()->save($randomcarecenter);
        }

        $employee = Employee::skip(50)->take(50)->get();

        foreach($employee as $key => $value){
            $technician = new Technician;
            $technician->CompetencySkill = $faker->randomElement($array = array ('IV','Catheter','Wound Care','Oxygen','Suction','Vital Signs','Medication Administration','Blood Draw','EKG','ECG','Phlebotomy','Pharmacy','Lab','Radiology','Dietary','Transport','Discharge','Admission','Patient Education','Patient Assessment','Patient Care','Patient Safety','Patient Rights','Patient Confidentiality','Patient Privacy','Patient Dignity','Patient Advocacy','Patient Communication','Patient Family Communication','Patient Family Education','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy'));
            $technician->save();
            $technician->employee()->save($value);

            $randomworkunit = WorkUnit::all()->random(1)->first();

            $technician->workunit()->save($randomworkunit);
        }

        $employee = Employee::skip(150)->take(50)->get();
        foreach($employee as $key => $value){
            $staff = new Staff;
            $staff->Jobclass = $faker->randomElement($array = array ('Housekeeping','Food Service','Transportation','Security','Maintenance','Receptionist','Billing','Admissions','Discharge','Pharmacy','Lab','Radiology','Dietary','Transport','Discharge','Admission','Patient Education','Patient Assessment','Patient Care','Patient Safety','Patient Rights','Patient Confidentiality','Patient Privacy','Patient Dignity','Patient Advocacy','Patient Communication','Patient Family Communication','Patient Family Education','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidential'));
            $staff->save();
            $staff->employee()->save($value);

            $randomworkunit = WorkUnit::all()->random(1)->first();

            $staff->workunit()->save($randomworkunit);
        }

    }

    public function get(){
        $users = User::all();
        return $users;
    }
}
