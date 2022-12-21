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
use App\Physician;
use App\Patient;
use App\Visit;
use App\ObtainRecord;
use App\Diagnose;
use App\Diagnosis;

use Illuminate\Http\Request;

class CreateDummy extends Controller
{
public function generate(){
    ini_set('max_execution_time', 1000);
    $faker = Factory::create();
        foreach(range(1,5) as $index){
            $workunit = new WorkUnit;
            $workunit->WorkUnitName = $faker->randomElement($array = array ('Maternity Work Unit','Pediatric Work Unit','Surgical Work Unit','Medical Work Unit','Emergency Work Unit','Intensive Care Work Unit','Outpatient Work Unit','Other Work Unit'));
            $workunit->LocationFacility = $faker->randomElement($array = array ('Hospital','Clinic','Nursing Home','Assisted Living','Home Health','School','Other'));
            $workunit->LocationFloor = $faker->randomElement($array = array ('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20'));
            $workunit->save();
        }

        foreach(range(1,20) as $index){
            $carecenter = new CareCenter;
            $carecenter->CareCenterID = $faker->randomNumber($nbDigits = 5);
            $carecenter->CareCenterName = $faker->randomElement($array = array ('ICU','ER','OR','Medicine','Surgery','Pediatrics','OB/GYN'));
            $carecenter->save();

            $workunits = WorkUnit::all()->random(1)->first();
            $carecenter->workUnit()->save($workunits);
        }

        for ($i=0; $i < 1000; $i++) {
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
            $value->employee()->save($employee);
        }

        $employee = Employee::take(50)->get();
        foreach ($employee as $key => $value) {
            $nurse = new Nurse;
            $nurse->CertificateDegree = $faker->randomElement($array = array ('RN','LPN','CNA'));
            $nurse->NursingLicense = $faker->randomElement($array = array ('CA','TX','FL','NY','PA','IL','OH','GA','NC','MI','NJ','VA','WA','AZ','MA','TN','IN','MO','MD','WI','CO','MN','SC','AL','LA','KY','OR','OK','CT','UT','IA','NV','AR','MS','KS','NM','NE','ID','HI','ME','NH','RI','MT','DE','SD','ND','WV','AK','WY','DC'));
            $nurse->Speciality = $faker->randomElement($array = array ('ICU','ER','OR','Medicine','Surgery','Pediatrics','OB/GYN'));
            $nurse->save();
            $value->nurse()->save($nurse);

            $randomcarecenter = CareCenter::all()->random(1)->first();
            $nurse->carecenter()->save($randomcarecenter);
        }

        $employee = Employee::skip(50)->take(50)->get();
        foreach($employee as $key => $value){
            $technician = new Technician;
            $technician->CompetencySkill = $faker->randomElement($array = array ('IV','Catheter','Wound Care','Oxygen','Suction','Vital Signs','Medication Administration','Blood Draw','EKG','ECG','Phlebotomy','Pharmacy','Lab','Radiology','Dietary','Transport','Discharge','Admission','Patient Education','Patient Assessment','Patient Care','Patient Safety','Patient Rights','Patient Confidentiality','Patient Privacy','Patient Dignity','Patient Advocacy','Patient Communication','Patient Family Communication','Patient Family Education','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy'));
            $technician->save();
            $value->technician()->save($technician);

            $randomworkunit = WorkUnit::all()->random(1)->first();

            $technician->workunit()->save($randomworkunit);
        }

        $employee = Employee::skip(150)->take(50)->get();
        foreach($employee as $key => $value){
            $staff = new Staff;
            $staff->Jobclass = $faker->randomElement($array = array ('Housekeeping','Food Service','Transportation','Security','Maintenance','Receptionist','Billing','Admissions','Discharge','Pharmacy','Lab','Radiology','Dietary','Transport','Discharge','Admission','Patient Education','Patient Assessment','Patient Care','Patient Safety','Patient Rights','Patient Confidentiality','Patient Privacy','Patient Dignity','Patient Advocacy','Patient Communication','Patient Family Communication','Patient Family Education','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidentiality','Patient Family Privacy','Patient Family Dignity','Patient Family Advocacy','Patient Family Communication','Patient Family Support','Patient Family Rights','Patient Family Confidential'));
            $staff->save();
            $value->staff()->save($staff);

            $randomworkunit = WorkUnit::all()->random(1)->first();

            $staff->workunit()->save($randomworkunit);
        }

        $person = Person::with('employee')->skip(250)->take(50)->get();
        foreach($person as $key => $value){
            $physician = new Physician;
            $physician->PagerNumber = $faker->unique()->randomNumber($nbDigits = 8, $strict = false);
            $physician->DEANumber = $faker->unique()->randomNumber($nbDigits = 8, $strict = false);
            $physician->Speciality = $faker->randomElement($array = array ('Cardiology','Dermatology','Endocrinology','Gastroenterology','Hematology','Infectious Disease','Nephrology','Neurology','Oncology','Ophthalmology','Orthopedics','Pulmonology','Rheumatology','Surgery','Urology','Allergy and Immunology','Anesthesiology','Emergency Medicine','Family Medicine','Internal Medicine','Obstetrics and Gynecology','Pediatrics','Psychiatry','Radiology','Sports Medicine','General Practice','Geriatrics','Nuclear Medicine','Pathology','Physical Medicine and Rehabilitation','Preventive Medicine','Psychology','Public Health and General Preventive Medicine','Anatomic Pathology','Clinical Pathology','Cytopathology','Dermatopathology','Forensic Pathology','Hematopathology','Neuropathology','Pathology Informatics','Pediatric Pathology','Pharmacology','Physician Assistant','Physician Assistant - Anesthesiology','Physician Assistant - Cardiology','Physician Assistant - Dermatology','Physician Assistant - Emergency Medicine','Physician Assistant - Family Medicine','Physician Assistant - Internal Medicine','Physician Assistant - Neurology','Physician Assistant - Obstetrics and Gynecology','Physician Assistant - Oncology','Physician Assistant - Orthopedics','Physician Assistant - Pediatrics','Physician Assistant - Psychiatry','Physician Assistant - Surgery','Physician Assistant - Urology','Physician Assistant - Allergy and Immunology','Physician Assistant - Anesthesiology','Physician Assistant - Emergency Medicine','Physician Assistant - Family Medicine','Physician Assistant - Internal Medicine','Physician Assistant - Neurology','Physician Assistant - Obstetrics and Gynecology','Physician Assistant - Oncology','Physician Assistant - Orthopedics','Physician Assistant - Pediatrics','Physician Assistant - Psychiatry','Physician Assistant - Surgery','Physician Assistant - Urology','Physician Assistant - Allergy and Immunology','Physician Assistant - Anesthesiology','Physician Assistant - Emergency Medicine','Physician Assistant - Family Medicine','Physician Assistant - Internal Medicine','Physician Assistant - Neurology','Physician Assistant - Obstetrics and Gynecology','Physician Assistant - Oncology','Physician Assistant - Orthopedics','Physician Assistant - Pediatrics','Physician Assistant - Psychiatry','Physician Assistant - Surgery','Physician Assistant - Urology'));
            $physician->save();
            $value->physician()->save($physician);
        }

        //get random person
        $person = Person::with('employee')->get();

        foreach($person as $key => $value){
            $isPatient = $faker->boolean($chanceOfGettingTrue = 60);
            if($isPatient){
                $patient = new Patient;
                // MRN = Medical Record Number Unique
                $patient->MRN = $faker->unique()->randomNumber($nbDigits = 8, $strict = false);
                $patient->save();
                $value->patient()->save($patient);
            }
        }

        $diagnosis = [
            'A00' => 'Cholera due to Vibrio cholerae 01, biovar cholerae',
            'B00' => 'Herpesviral infection, unspecified',
            'C00' => 'Malignant neoplasm of lip, oral cavity and pharynx',
            'D00' => 'Benign neoplasm of lip, oral cavity and pharynx',
            'E00' => 'Deficiency of vitamin A',
            'F00' => 'Alzheimer disease',
            'G00' => 'Infectious and parasitic diseases of central nervous system',
            'H00' => 'Inflammatory diseases of eye',
            'I00' => 'Acute rheumatic fever without mention of heart involvement',
            'J00' => 'Influenza with other respiratory manifestations, other influenza virus codeentified',
            'K00' => 'Diseases of mouth and other parts of upper respiratory tract',
            'L00' => 'Cellulitis and abscess of face',
            'M00' => 'Arthritis due to specific bacterial agents',
            'N00' => 'Chronic kidney disease, stage 1',
            'O00' => 'Pregnancy with abortive outcome',
            'P00' => 'Newborn affected by maternal complications of pregnancy, childbirth and the puerperium',
            'Q00' => 'Congenital malformations, deformations and chromosomal abnormalities',
            'R00' => 'Symptoms, signs and abnormal clinical and laboratory findings, not elsewhere classified',
            'S00' => 'Injury, poisoning and certain other consequences of external causes',
            'T00' => 'Factors influencing health status and contact with health services',
            'U00' => 'Certain conditions originating in the perinatal period',
            'V00' => 'Pedal cycle rider injured in collision with car, pick-up truck or van',
            'W00' => 'Fall from building',
            'X00' => 'Intentional self-harm by hanging, strangulation and suffocation',
            'Y00' => 'Assault by cutting, piercing and stabbing wound',
        ];

        foreach($diagnosis as $key => $value){
            $diagnosis = new Diagnosis;
            $diagnosis->DiagnosisCode = $key;
            $diagnosis->DiagnosisName = $value;
            $diagnosis->save();
        }

        //random patient visit
        $patient = Patient::all();

        foreach($patient as $key => $value){
            #random boolean
            $isVisit = $faker->boolean($chanceOfGettingTrue = 20);

            if($isVisit == false)
                continue;

            $visit = new Visit;
            $visit->VisitDate = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get());
            $visit->VisitID = $faker->unique()->randomNumber($nbDigits = 8, $strict = false);
            $visit->VisitTime = $faker->time($format = 'H:i:s', $max = 'now');
            $visit->save();
            $value->visit()->save($visit);

            $randomcarecenter = CareCenter::all()->random(1)->first();
            $randomPhysician = Physician::all()->random(1)->first();

            $visit->carecenter()->save($randomcarecenter);
            $randomPhysician->visit()->save($visit);

            #protected $fillable = ['Date','Time','Weight','Height','BloodPressure','Pulse','Temperature','VisitReason','Symptoms'];
            $obtainRec = new ObtainRecord;
            $obtainRec->Date = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get());
            $obtainRec->Time = $faker->time($format = 'H:i:s', $max = 'now');
            $obtainRec->Weight = $faker->numberBetween(50,200);
            $obtainRec->height = $faker->numberBetween(100,300);
            $obtainRec->Bloopresure = $faker->numberBetween(70,150);
            $obtainRec->Pulse = $faker->numberBetween(70,150);
            $obtainRec->Temperature = $faker->numberBetween(30,45);
            $obtainRec->VisitReason = $faker->text();
            $obtainRec->Symptoms = $faker->text();
            $obtainRec->save();

            $randomNurse = Nurse::all()->random(1)->first();

            $randomNurse->obtainrecord()->save($obtainRec);
            $visit->obtainrecord()->save($obtainRec);

            $randomDigit = $faker->numberBetween(1,4);

            for($i = 0; $i < $randomDigit; $i++){
                $diagnose = new Diagnose;
                $diagnose->Time = $faker->time($format = 'H:i:s', $max = 'now');
                $diagnose->Description = $faker->text();
                $diagnose->save();

                $randomDiagnosis = Diagnosis::all()->random(1)->first();

                $diagnose->diagnosis()->save($randomDiagnosis);
                $visit->diagnose()->save($diagnose);
            }
        }
    }

    public function get(){
        $users = User::all();
        return $users;
    }
}
