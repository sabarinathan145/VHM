<!DOCTYPE html>
<html>
    <head>
        <title>Velammal Medical College Hospital & Research Institue</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/final.css')}}">
    </head>

<body>
@if(session('alert'))
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
    @endif
    <h1>Velammal Medical College Hospital & Research Institute</h1>
    <h2>Register Here</h2>

    <div class="main">
    <div class="register">
        
        <form id="register" method="POST" action="{{ route('insert') }}">
			{{ csrf_field()}}
            <div id="left">
                <label>UHID    :</label>
                <input type="text" name="uhid" id="uhid" class="uhid" max="10" required>
            </div>
            <div id="right">
             <label>Date: </label>
                <input type="Date" name="dob" id="date" required>
     &nbsp&nbsp&nbsp&nbsp
            <label>Time: </label>
                <input type="time" name="dob" id="time" required>
</div>
            <br><br><br><br><br>
            <div id="left">
            <label>Name  </label>
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="fname" id="name" placeholder="Enter your name" required>
            </div>
            <div id="right">
            <label>Father/ Mother/Husband Name : </label>
                <input type="text" name="gname" id="name" placeholder="Enter your gaurdian name" required>
            </div>
            <br><br><br>
<div id="left">
            <label>Date of birth  </label>
		       &nbsp&nbsp&nbsp: <input type="Date" name="dob" id="dateofbirth" required>
</div>
           
            <div id="right">

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Religion : </label>
                <input type="text" name="religion" id="religion" placeholder="Enter your religion" required>
            
            </div>
             <div id="right">

            &nbsp<label>Age : </label>
                &nbsp<input type="number" name="age" id="age" placeholder="Enter your age" required>
           </div> <br><br><br>
<div id="left">
            <label>Martial Status : </label>
                <input type="radio" name="status" id="single" class="one" value="Single" required><span id="sin"> Single </span>
                <input type="radio" name="status" id="Married" class="one" value="Married"><span id="married">Married</span>
</div>
           <div id="right1">

            <label>Sex    </label>
                :<input type="radio" name="Gender" id="male" class="two" value="Male" required>
                    <span id="male">Male</span>
                <input type="radio" name="Gender" id="female" class="two" value="Female">
                    <span id="female">Female</span>
                    <input type="radio" name="Gender" id="other" class="two" value="Other">
                    <span id="other">Other</span>
            </div><br><br><br>
            <label>Contact Details</label><br><br>

            <label>Address : </label><br><br>
               <textarea name="address" class="three"></textarea>

            <br><br><br>
 <div id="left">
            <label>City  </label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="city" id="city" placeholder="Enter your city">
</div>
            <div id="right">

            <label>State : </label>

                <input type="text" name="state" id="state" placeholder="Enter your state">

            </div><br><br><br>
<div id="left">
            <label>Pincode  </label>
            
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="number" name="pincode" id="pincode" placeholder="Enter your pincode">
            </div>

            <div id="right">

            &nbsp&nbsp&nbsp&nbsp<label>Landmark : </label>
                <input type="text" name="landmark" id="Landmark" placeholder="Enter your landmark">
</div>
<div id="right">
            <label>Mobile</label>
                &nbsp:&nbsp<input type="number" name="phonenumber" id="pnumber" placeholder="Enter your phonenumber">

            </div><br><br><br>
            <label>Annual Income &nbsp: </label>
			    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="annual income" name="annualincome" value=" Below Rs. 1,00,000" class="one">
			    <label for="annual income">Below Rs. 1,00,000</label>
			    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="annual income" name="annualincome" value=" Above Rs. 1,00,000" class="one">
			    <label for="annual income"> Above Rs. 1,00,000</label>
            <br><br><br>
           <div> <label ><center><font size="5em"><u> OCCUPATION</u></font></center></label><br><br>
			    <input type="radio" id="Occupation" name="Occupation" value="Agriculture" class="one"><span>Agriculture</span>&nbsp&nbsp&nbsp
			    <input type="radio" id="Occupation" name="Occupation" value="Govt.employee" class="one"><span>Govt.Employee</span>&nbsp&nbsp&nbsp&nbsp
			    <input type="radio" id="Occupation" name="Occupation" value="Private employee" class="one"><span>Private Employee</span>&nbsp&nbsp&nbsp&nbsp
			    <input type="radio" id="Occupation" name="Occupation" value="self employee" class="one"><span>Self Employed</span>&nbsp&nbsp&nbsp
			    <input type="radio" id="Occupation" name="Occupation" value="profesional" class="one"><span>Profesional</span>&nbsp&nbsp&nbsp&nbsp
            <br><br>
            <input type="radio" id="Occupation" name="Occupation" value="Others if any" class="one"><span>Others if any</span>
            &nbsp&nbsp&nbsp&nbsp<input type="text" id="Occupation" name="Occupation">
</div>
            <br><br><br>
            <label>Height(in cm) : </label>
                <input type="number" name="height" id="height" class="reading"> 
             &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<label>Weight(in kg) : </label>
               <input type="number" name="weight" id="Weight" class="reading">  
            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<label>Blood Pressure : </label>
                <input type="number" name="bp" id="bp" class="reading">  
            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<label>Pulse : </label>
                <input type="number" name="pulse" id="pulse" class="reading"> <br><br>  
            <label>Temp(in cels) : </label>
                <input type="number" name="Temp" id="Temprature" class="reading"> 
            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<label>SpO2 : </label>
                <input type="number" name="spo2" id="spo2" class="reading">  <br><br><br>
                <label>Cheif Complaints : </label><br><br>
               <textarea name="complaints" class="three"></textarea>

            <br><br><br>

            <label>Department : </label>
                <input type="number" name="Department" id="Department">  

    <br><br><br><label>Hospital :</label>
                <input type="radio" id="Speciality Hospital" name="Hospital" value="Speciality Hospital" class="one">
            <label for="Hospital">Specialty Hospital </label>&nbsp&nbsp&nbsp
                <input type="radio" id="Medical College Hospital" name="Hospital" value="Medical College Hospital" class="one">
            <label for="Hospital">Medical College Hospital </label><br><br><br>
            <center>
            <button id="button"><font color="white">Submit</font></button>@method('GET')
</center>

</form>
</div>
</div>
</body>
</html>