<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    public function insert(Request $rq){
        $this->validate($rq,[
            'fname'=>'required'
        ]);
        $disp = new Sample; 
       // $objID=Helper::IDGenerator(new Sample, 'UHID', 9, '0');
        $disp->UHID;
        $disp->DATE = $rq->date;
        $disp->TIME = $rq->time;
        $disp->NAME = $rq->fname;
        $disp->GAURDAIN_NAME = $rq->gname;
        $disp->DOB = $rq->dob;
        $disp->RELIGION = $rq->religion;
        $disp->AGE = $rq->age;
        $disp->MARTIAL_STATUS = $rq->status;
        $disp->SEX = $rq->Gender;
        $disp->ADDRESS = $rq->address;
        $disp->CITY = $rq->city;
        $disp->STATE = $rq->state;
        $disp->PINCODE = $rq->pincode;
        $disp->LANDMARK = $rq->landmark;
        $disp-> MOBILE= $rq->phonenumber;
        $disp->ANNUAL_INCOME = $rq->annualincome;
        $disp->OCCUPATION = $rq->Occupation;
        $disp->HEIGHT = $rq->height;
        $disp->WEIGHT = $rq->weight;
        $disp->BP = $rq->bp;
        $disp->PULSE = $rq->pulse;
        $disp->TEMP = $rq->Temp;
        $disp->SUGAR = $rq->sugar;
        $disp->CHEIF_COMPLAINTS = $rq->complaints;
        $disp->DEPARTMENT = $rq->Department;
        $disp->HOSPITAL = $rq->Hospital;
        $disp->save();      
        return view('Submit',compact('disp'))->with('alert', 'Your Data has been inserted successfully!!..');     
    }
    public function disp_so(){
       $disp = Sample::paginate(10);
     return view('disp_half',compact('disp'));
 }
 public function search(){
    $disp = Sample::paginate(5);
  return view('disp_half',compact('disp'));
}
     public function noti(){
        return view('welcome');
    }
    public function unique(Request  $request){
        $disp = Sample::find($request->UHID);
        return view('disp_full',compact('disp'));
    }

    public function deletefun($UHID){
        $disp = Sample::find($UHID)->delete();
         return redirect(route('disp_so'))->with('alert','Deleted Successfully');
    }
    public function editfun($UHID){
        $disp = Sample::find($UHID);
        return view('admin_edit',compact('disp'));
       }
    public function edit($UHID){
        $disp = Sample::find($UHID);
        return view('customer_edit',compact('disp'));
       }
       public function update(Request $rq, $UHID){
        $disp = Sample::find($UHID);

        $disp->DATE = $rq->input('date');
        $disp->TIME = $rq->input('time');
        $disp->NAME = $rq->input('fname');
        $disp->GAURDAIN_NAME = $rq->input('gname');
        $disp->DOB = $rq->input('dob');
        $disp->RELIGION = $rq->input('religion');
        $disp->AGE = $rq->input('age');
        $disp->MARTIAL_STATUS = $rq->input('status');
        $disp->SEX = $rq->input('Gender');
        $disp->ADDRESS = $rq->input('address');
        $disp->CITY = $rq->input('city');
        $disp->STATE = $rq->input('state');
        $disp->PINCODE = $rq->input('pincode');
        $disp->LANDMARK = $rq->input('landmark');
        $disp-> MOBILE= $rq->input('phonenumber');
        $disp->ANNUAL_INCOME = $rq->input('annualincome');
        $disp->OCCUPATION = $rq->input('Occupation');
        $disp->HEIGHT = $rq->input('height');
        $disp->WEIGHT = $rq->input('weight');
        $disp->BP = $rq->input('bp');
        $disp->PULSE = $rq->input('pulse');
        $disp->TEMP = $rq->input('Temp');
        $disp->SUGAR = $rq->input('sugar');
        $disp->CHEIF_COMPLAINTS = $rq->input('complaints');
        $disp->DEPARTMENT = $rq->input('Department');
        $disp->HOSPITAL = $rq->input('Hospital');
        $disp->update();
        return redirect(route('disp_so'))->with('alert','Your Data has been Updated Successfully');
    }
    public function updatefun(Request $rq, $UHID){
        $disp = Sample::find($UHID);

        $disp->DATE = $rq->input('date');
        $disp->TIME = $rq->input('time');
        $disp->NAME = $rq->input('fname');
        $disp->GAURDAIN_NAME = $rq->input('gname');
        $disp->DOB = $rq->input('dob');
        $disp->RELIGION = $rq->input('religion');
        $disp->AGE = $rq->input('age');
        $disp->MARTIAL_STATUS = $rq->input('status');
        $disp->SEX = $rq->input('Gender');
        $disp->ADDRESS = $rq->input('address');
        $disp->CITY = $rq->input('city');
        $disp->STATE = $rq->input('state');
        $disp->PINCODE = $rq->input('pincode');
        $disp->LANDMARK = $rq->input('landmark');
        $disp-> MOBILE= $rq->input('phonenumber');
        $disp->ANNUAL_INCOME = $rq->input('annualincome');
        $disp->OCCUPATION = $rq->input('Occupation');
        $disp->HEIGHT = $rq->input('height');
        $disp->WEIGHT = $rq->input('weight');
        $disp->BP = $rq->input('bp');
        $disp->PULSE = $rq->input('pulse');
        $disp->TEMP = $rq->input('Temp');
        $disp->SUGAR = $rq->input('sugar');
        $disp->CHEIF_COMPLAINTS = $rq->input('complaints');
        $disp->DEPARTMENT = $rq->input('Department');
        $disp->HOSPITAL = $rq->input('Hospital');
        $disp->update();
        return redirect(route('noti'))->with('alert','Your Data has been Updated Successfully');
    }
      public function check(Request $request){
           $disp = Sample::find($request->UHID);
           return view('Submit',compact('disp'));
       }
       public function newpage(Request  $request){
        $disp = Sample::find($request->UHID);
        return view('admin_edit',compact('disp'));
       }
      
}