<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/final.css')}}">
        <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
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
<center>
        <img style="vertical-align: middle;" src="{{ asset('img/log.jpg')}}" width="100px" height="100px">
        <span style="vertical-align: middle;"><font size="10" color="darkviolet">  &nbspVelammal Medical College Hospital & Research Institute</font></span>
        </center>
       
    
    <h2>Register Here</h2>

    <div class="main">
    <div class="register">
        
        <form id="register" method="POST" action="{{ route('insert') }}">
            {{ csrf_field()}}
            
            <div id="left">
             <label>Date: </label>
                <input type="Date" name="date" id="date" style="border-radius: 10px;" required>
</div>
<div id="right">
            <label>Time: </label>
                <input type="time" name="time" id="time" style="border-radius: 10px;" required>
</div>
            <br><br><br><br><br>
            <div id="left">
            <label>Name  </label>
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="fname" id="name" placeholder="Enter your name" style="border-radius: 10px;"  maxlength="15" required >
            </div>
            <div id="right">
            <label>Father/ Mother/Husband Name : </label>
                <input type="text" name="gname" id="name" placeholder="Enter your gaurdian name" style="border-radius: 10px;" maxlength="15" required>
            </div>
            <br><br><br>
<div id="left">
            <label>Date of birth  </label>
		       &nbsp&nbsp&nbsp: <input type="Date" name="dob" id="dateofbirth" style="border-radius: 10px;" required>
</div>
           
            <div id="right">

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Religion : </label>
                <input type="text" name="religion" id="religion" placeholder="Enter your religion" style="border-radius: 10px;" maxlength="15" required>
            
            </div>
             <div id="right">

            <label>Age : </label>
                &nbsp<input type="number" name="age" id="age" placeholder="Enter your age" style="border-radius: 10px;" maxlength="2" required>
           </div> <br><br><br>
<div id="left">
            <label>Marital Status : </label>
                <input type="radio" name="status" id="single" class="one" style="vertical-align: middle;" value="Single" required><span id="sin" style="vertical-align: middle;" > Single </span>
                <input type="radio" name="status" id="Married" class="one" style="vertical-align: middle;" value="Married"><span id="married" style="vertical-align: middle;">Married</span>
</div>
           <div id="right1">

            <label>Sex    </label>
                :<input type="radio" name="Gender" id="male" class="two" style="vertical-align: middle;" value="Male" required>
                    <span id="male">Male</span>
                <input type="radio" name="Gender" id="female" class="two" style="vertical-align: middle;" value="Female">
                    <span id="female">Female</span>

            </div><br><br><br>
            <label>Contact Details</label><br><br>

            <label>Address : </label><br><br>
               <textarea name="address" class="three" style="border-radius: 10px;" maxlength="100" required></textarea>

            <br><br><br>
 <div id="left">
            <label>City  </label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="city" id="city" placeholder="Enter your city" style="border-radius: 10px;" maxlength="15" required>
</div>
            <div id="right">

            

                <label>State : </label>
                    <input list="state" name="state" placeholder="select your state" style="border-radius: 10px;" />
                    <datalist id="state">
                        <option>Andhra Pradesh</option>
                        <option>Assam</option>
                        <option>Arunachal Pradesh</option>
                        <option>Bihar</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Jammu and Kashmir</option>
                        <option>Jharkhand</option>
                        <option>West Bengal</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Orissa</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Tripura</option>
                        <option>Uttaranchal</option>
                        <option>Uttar Pradesh</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Chhattisgarh</option>
                        <option>Delhi</option>
                    </datalist>


            </div><br><br><br>
<div id="left">
            <label>Pincode  </label>
            
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="number" name="pincode" id="pincode" placeholder="Enter your pincode" style="border-radius: 10px;" maxlength="6" required>
            </div>

            <div id="right">

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Landmark : </label>
                <input type="text" name="landmark" id="Landmark" placeholder="Enter your landmark" style="border-radius: 10px;" maxlength="15" required>
</div>
<div id="right">
            <label>Mobile</label>
                &nbsp:&nbsp<input type="number" name="phonenumber" id="pnumber" placeholder="Enter your phonenumber" style="border-radius: 10px;" maxlength="10" required>

            </div><br><br><br>
            <label>Annual Income &nbsp: </label>
			    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="annual income" name="annualincome" value=" Below Rs. 1,00,000" class="one" style="vertical-align: middle;" required>
			    <label for="annual income" style="vertical-align: middle;">Below Rs. 1,00,000</label>
			    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="annual income" name="annualincome" value=" Above Rs. 1,00,000" class="one" style="vertical-align: middle;">
			    <label for="annual income" style="vertical-align: middle;"> Above Rs. 1,00,000</label>
            <br><br><br>
            <div>
            <label><center><font size="5em"><u> OCCUPATION</u></font></center></label><br><br>
			    <input type="radio" id="Occupation" name="Occupation" value="Agriculture" class="one" style="vertical-align: middle;" required><span style="vertical-align: middle;">Agriculture </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			    <input type="radio" id="Occupation" name="Occupation" value="Govt.employee" class="one" style="vertical-align: middle;"><span style="vertical-align: middle;">Govt.Employee </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			    <input type="radio" id="Occupation" name="Occupation" value="Private employee" class="one" style="vertical-align: middle;"><span style="vertical-align: middle;">Private Employee</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			    <input type="radio" id="Occupation" name="Occupation" value="self employee" class="one" style="vertical-align: middle;"><span style="vertical-align: middle;">Self Employed </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			    <input type="radio" id="Occupation" name="Occupation" value="profesional" class="one" style="vertical-align: middle;"><span style="vertical-align: middle;">Profesional </span>
            </div>
            <br><br><br>
            <label>Height(in cm) : </label>
                <input type="number" name="height" id="height" class="reading" style="border-radius: 10px;" maxlength="4" required> 
             &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<label>Weight(in kg) : </label>
               <input type="number" name="weight" id="Weight" class="reading" style="border-radius: 10px;" maxlength="4" required>  
            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<label>Blood Pressure : </label>
                <input type="number" name="bp" id="bp" class="reading" style="border-radius: 10px;" maxlength="4" required>  
            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<label>Pulse : </label>
                <input type="number" name="pulse" id="pulse" class="reading" style="border-radius: 10px;" maxlength="4" required> <br><br>  
            <label>Temp(in F) : </label>
                <input type="number" name="Temp" id="Temprature" class="reading" style="border-radius: 10px;" maxlength="4" required>  
            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<label>Sugar : </label>
                <input type="number" name="sugar" id="sugar" class="reading" style="border-radius: 10px;" maxlength="4" required>  <br><br><br>
                <label>Cheif Complaints : </label><br><br>
               <textarea name="complaints" class="three" style="border-radius: 10px;" maxlength="100" required></textarea>

            <br><br><br>

            <label>Department : </label>
                <input type="number" name="Department" id="Department" style="border-radius: 10px;" maxlength="3" required>  

    <br><br><br><label>Hospital :</label>
                <input type="radio" id="Speciality Hospital" name="Hospital" value="Speciality Hospital" class="one" style="vertical-align: middle;" required>
            <label for="Hospital" style="vertical-align: middle;">Specialty Hospital </label>&nbsp&nbsp&nbsp
                <input type="radio" id="Medical College Hospital" name="Hospital" value="Medical College Hospital" class="one" style="vertical-align: middle;">
            <label for="Hospital" style="vertical-align: middle;">Medical College Hospital </label><br><br><br>
            <center>
            <button id="button"><font color="white" >Submit</font></button>@method('GET')
</center>
</form>
</div>
</div>
<script> 
        $(window).ready(function() {
        $("#register").on("keypress", function (event) {
            console.log("aaya");
            var keyPressed = event.keyCode || event.which;
            if (keyPressed === 13) {
                
                event.preventDefault();
                return false;
            }
        });
        });
  
    </script> 
</body>
</html>