@extends('layouts.master')
<style>
       #map_canvas {
        width: 500px;
        height: 430px;
        margin-left: 40px;
        float: left;
      }

      address{
      	margin-left: 40px;
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
	<div style="margin-top:0px">
 <div id="map_canvas"></div>
			<div class="container">
				<div class="panel panel-default" style="margin-left:580px; width:500px">
					<div class="panel-heading">
						<h2 class="panel-title">Contact Form</h2>
					</div>
					<div class="panel-body">
						<form name="contactform" method="post" action= class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSubject" class="col-lg-2 control-label">Subject</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-default">
										Send Message
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
</body>

<address>
  <strong>Codeup.</strong><br>
  112 E. Pecan St.<br>
  San Antonio, TX 78205<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<address>
  <strong>Karina Montes</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>
@stop
