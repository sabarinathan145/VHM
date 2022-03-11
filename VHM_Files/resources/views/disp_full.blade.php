<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/disp_full.css') }}">
    </head>
<body>
     <center>
     <img style="vertical-align: middle;" src="{{ asset('img/log.jpg')}}" width="100" height="100">
        <span style="vertical-align: middle;"><font size="10" color="darkviolet">  &nbspVelammal Medical College Hospital & Research Institute</font></span></center>
<br><h4>
  
    <h2 style ="text-align:center;font-family:verdana;color:black;font-size:30px">Patient Information</h2>
        <div class='main'>
        <div class='register'>
        <form method="POST" id="register">
        {{ csrf_field()}}

           
        <table >

                <tr>
                    <th>UHID </th>
                    <td>{{ $disp->UHID }}</td>
                </tr>
                <tr>
                    <th>Date </th>
                    <td>{{ $disp->DATE }}</td>
                </tr>
                <tr>
                    <th>Time </th>
                    <td>{{ $disp->TIME }}</td>
                </tr>
                <tr>
                    <th> Name </th>
                    <td>{{ $disp->NAME }}</td>
                </tr>
                <tr>
                    <th>Father/Mother/Husband Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    <td>{{ $disp->GAURDAIN_NAME }}</td>
</tr>
                <tr>
                    <th>Date of Birth </th>
                    <td>{{ $disp->DOB }}</td>
                </tr>
                <tr>
                    <th>Religion </th>
                    <td>{{ $disp->RELIGION }}</td>
                </tr>
                <tr>
                    <th>Age </th>
                    <td>{{ $disp->AGE }}</td>
                </tr>
                <tr>
                    <th>Marital Status </th>
                    <td>{{ $disp->MARTIAL_STATUS }}</td>
                </tr>
                <tr>
                    <th>Sex</th>
                    <td>{{ $disp->SEX }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $disp->ADDRESS }}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{ $disp->CITY }}</td>
                </tr>
                <tr>
                    <th>State</th>
                    <td>{{ $disp->STATE }}</td>
                </tr>
                <tr>
                    <th>Pincode</th>
                    <td>{{ $disp->PINCODE }}</td>
                </tr>
                <tr>
                    <th>Landmark</th>
                    <td>{{ $disp->LANDMARK }}</td>
                </tr>
                <tr>
                    <th>Mobile No</th>
                    <td>{{ $disp->MOBILE }}</td>
                </tr>
                <tr>
                    <th>Annual Income</th>
                    <td>{{ $disp->ANNUAL_INCOME }}</td>
                </tr>
                <tr>
                    <th>Occupation</th>
                    <td>{{ $disp->OCCUPATION }}</td>
                </tr>
                <tr>
                    <th>Height </th>
                    <td>{{ $disp->HEIGHT }}</td>
                </tr>
                <tr>
                    <th>Weight </th>
                    <td>{{ $disp->WEIGHT }}</td>
                </tr>
                <tr>
                    <th>BP </th>
                    <td>{{ $disp->BP }}</td>
                </tr>
                <tr>
                    <th>Pulse </th>
                    <td>{{ $disp->PULSE }}</td>
                </tr>
                <tr>
                    <th>Temp </th>
                    <td>{{ $disp->TEMP }}</td>
                </tr>
                <tr>
                    <th>Sugar </th>
                    <td>{{ $disp->SUGAR }}</td>
                </tr>
                <tr>
                    <th>Cheif Complaints </th>
                    <td>{{ $disp->CHEIF_COMPLAINTS }}</td>
                </tr>
                <tr>
                    <th>Department </th>
                    <td>{{ $disp->DEPARTMENT }}</td>
                </tr>
                <tr>
                    <th>Hospital </th>
                    <td>{{ $disp->HOSPITAL }}</td>
                </tr>
                      
            </form>

        </table>
    </div>
    </div>
</h4>
</body>
</html>
