<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;
class SampleController extends Controller
{
    public function insert(Request $rq){
        $this->validate($rq,[
            'uhid'=>'required'
        ]);
        $obj = new Sample; 
        $obj->UHID = $rq->uhid;
        $obj->NAME = $rq->fname;
        $obj->GAURDAIN_NAME = $rq->gname;
        $obj->DOB = $rq->dob;
        $obj->RELIGION = $rq->religion;
        $obj->AGE = $rq->age;
        $obj->MARTIAL_STATUS = $rq->status;
        $obj->SEX = $rq->Gender;
        $obj->ADDRESS = $rq->address;
        $obj->CITY = $rq->city;
        $obj->STATE = $rq->state;
        $obj->PINCODE = $rq->pincode;
        $obj->LANDMARK = $rq->landmark;
        $obj-> MOBILE= $rq->phonenumber;
        $obj->ANNUAL_INCOME = $rq->annualincome;
        $obj->OCCUPATION = $rq->Occupation;
        $obj->HEIGHT = $rq->height;
        $obj->WEIGHT = $rq->weight;
        $obj->BP = $rq->bp;
        $obj->PULSE = $rq->pulse;
        $obj->TEMP = $rq->Temp;
        $obj->SPO2 = $rq->spo2;
        $obj->CHEIF_COMPLAINTS = $rq->complaints;
        $obj->DEPARTMENT = $rq->Department;
        $obj->HOSPITAL = $rq->Hospital;
        $obj->save();
        return redirect(route('noti'))->with('alert', 'Updated!');
        
    }
    public function noti(){
            return view('welcome');
     }
}