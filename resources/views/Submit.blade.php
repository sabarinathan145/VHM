<html>
<head>
	<title>entered info</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/submit.css')}}">
	<meta charset="utf-8">
	<script src="{{ asset('js/JsBarcode.all.min.js') }}"></script>
</head>

<body>
<!--@if(session('alert'))
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
    @endif-->
	<center>
        <img style="vertical-align: middle;" src="{{ asset('img/log.jpg')}}" width="100px" height="100px">
        <span style="vertical-align: middle;"><font size="10" color="darkviolet">  &nbspVelammal Medical College Hospital & Research Institute</font></span>
        </center>
<h2><center>Entered info</h2>

<div class="main">
	<div class="container">

		<form class="form">
{{ csrf_field()}}

			<div class="form-control">
			<label>Name</label> &nbsp&nbsp&nbsp&nbsp&nbsp: {{ $disp->NAME }}
			
			</div>

		<div class="form-control">
		<label>Age</label>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: {{ $disp->AGE }}
				  
		</div>

			<div class="form-control">
			<label>Gender</label>	&nbsp&nbsp: {{ $disp->SEX }}
		</div>

		<div class="form-control">
		<label>DOB</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: {{ $disp->DOB }}
	</br></br>	
	
		</div>
		
		<svg id="barcode"></svg>
		
		</form>


		</div>

</div>

<button class="over" onclick="window.location = '{{ route('edit',$disp->UHID) }}'">Back</button>

</body>
<script>
	JsBarcode("#barcode", "{{ $disp->UHID }}");
	</script>
</html>