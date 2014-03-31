@extends('layouts.master')
<style>
       #map_canvas {
        width: 450px;
        height: 430px;
        margin-left: 40px;
        float: left;
      }

      address{
      	margin-left: 40px;
      	margin-top: 10px;
      }

      #cont-form{
        float: right;
        margin-right: 40px;
        width: 600px;
        height: 430px;
      }

      #address{
        margin-right: 40px;
        width: 1200px;
        height: 180px;

      }
 </style>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script type="text/javascript">
 function initialize() {
     var latLng = new google.maps.LatLng(29.428476, -98.492415);

     var map = new google.maps.Map(document.getElementById('map_canvas'), {
       zoom: 18,
       center: latLng,
       mapTypeId: google.maps.MapTypeId.HYBRID
     });
    
     map.setTilt(45);

     var marker = new google.maps.Marker({
       position: latLng,
       draggable: true,
       map: map
     });

     var label = new Label({
       map: map
     });
     label.bindTo('position', marker, 'position');
     label.bindTo('text', marker, 'position');
   };
 </script>
@section('content')	
<body onload="initialize()">
<div id="map_canvas"></div>
   <div id ="cont-form">
   	    <p><h2 class="text-center"> Say Hello!</h2></p>
		<form class="form-horizontal" role="form">
			  <div class="form-group">
				    <label for="name" class="col-sm-3 control-label">Name</label>
				    <div class="col-lg-8">
				      	<input type="text" class="form-control" id="name" placeholder="Name">
				    </div>
			   </div>
			   <div class="form-group">
				    <label for="subject" class="col-sm-3 control-label">Subject</label>
				    <div class="col-lg-8">
				      	<input type="text" class="form-control" id="subject" placeholder="Subject">
				    </div>
			   </div>
			     <div class="form-group">
				    <label for="email" class="col-sm-3 control-label">Email</label>
				    <div class="col-lg-8">
				      	<input type="text" class="form-control" id="email" placeholder="Email">
				    </div>
			   </div>
			   <div class="form-group">
			   	    <label for="message" class="col-sm-3 control-label">Message</label>
			   	    <div class="col-lg-8">
			          	<textarea class="form-control" rows="5"></textarea>
			       </div>
			   </div>
			  <div class="form-group">
			    	<div class="col-sm-offset-3 col-sm-8">
			      		<button type="submit" class="btn btn-primary">Send</button>
			    	</div>
			  </div>
		</form>
    </div>
    <div id = "address" class="col-lg-12 col-sm-offset-0 blog-sidebar">
				<address>
				  <strong>Codeup.</strong><br>
				  112 E. Pecan St.<br>
				  San Antonio, TX 78205<br>
				  <abbr title="Phone">P:</abbr> (123) 456-7890
				</address>

				<address>
				  <strong>Karina Montes</strong><br>
				  <a href="mailto:#">karina_montes-trevino@hotmail.com</a>
				</address>
    </div>

</body>
@stop
