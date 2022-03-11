<!DOCTYPE html>
<html>
<head>
    <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/disp_half.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
<body>
@if(session('alert'))
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
    @endif    <center>
    <img style="vertical-align: middle;" src="{{ asset('img/log.jpg')}}" width="100px" height="100px">
        <span style="vertical-align: middle;"><font size="10" color="darkviolet">  &nbspVelammal Medical College Hospital & Research Institute</font></span>
        <br><br>
      <div class="center">
        <form class="" action="" method="post">
          <div id="topnav">

          <input type="text" placeholder="Search..." size="30" id="search"  onkeyup="myFunction()"></div>
        </form><span id="page">{{ $disp->links('pagination::bootstrap-4') }}</span></div><br><br>
     <div id="size">
      <table id="tablesize" class="table" align="center">
        <tr>
        <th id="one">UHID</th>
        <th id="one">NAME</th>
        <th id="one">DOB</th>
        <th id="one">AGE</th>  
        <th id="one">ACTIONS</th> 
</tr>
@foreach($disp as $dis)

    
    <tr>
            <td onclick="window.location = '{{ route('unique',$dis->UHID) }}'">{{ $dis->UHID }}</td>
            <td onclick="window.location = '{{ route('unique',$dis->UHID) }}'">{{ $dis->NAME }}</td>
            <td onclick="window.location = '{{ route('unique',$dis->UHID) }}'">{{ $dis->DOB }}</td>
            <td onclick="window.location = '{{ route('unique',$dis->UHID) }}'">{{ $dis->AGE }}</td>
           <td> <a href="{{ route('editfun',$dis->UHID) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>&nbsp&nbsp&nbsp&nbsp
            <a href="{{ route('deletefun',$dis->UHID) }}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
        </tr>
        @endforeach
      
  </table>
</div>
  
</center>
</body>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("tablesize");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) 
  {
    td = tr[i].getElementsByTagName("td")[0];
    td2 = tr[i].getElementsByTagName("td")[1];
    td3 = tr[i].getElementsByTagName("td")[2];
    td4 = tr[i].getElementsByTagName("td")[3];

    if (td && td2 && td3 && td4) 
    {
              txtValue = td.textContent || td.innerText;
              txtValue2 = td2.textContent || td2.innerText;
              txtValue3 = td3.textContent || td3.innerText;
              txtValue4 = td4.textContent || td4.innerText;

              if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1 || txtValue4.toUpperCase().indexOf(filter) > -1 ) 
                {
                  tr[i].style.display = "";
                } 
              else {
                  tr[i].style.display = "none";
                   }
    }       
  }
  
}
</script>
</html>