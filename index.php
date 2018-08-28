<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="0SoevPn6Bqds33ZJ-73pEUz41L4gmTiSPz58JQfG5LE"/>
<title>krowner.com | Coming Soon</title>


<!--CSS-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap-light.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<!-- <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'> -->
<!--/CSS-->


<link rel="shortcut icon" type="image/png" href="images/NewKrownerLogo.png"/>

<!--JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/jquery.countdown.js"></script>

<script>


function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

$(document).ready(function() {
	
	$(function () {
		$('#defaultCountdown').countdown({until: new Date(2018, 4-1, 14)}); 
		//Replace above date with your own, to find out more visit http://keith-wood.name/countdown.html
	});
	
	
	/* on subscribing */
	  $('form').on('submit', function (e) {
		//console.log("click submit");
		e.preventDefault();
		
		//console.log($("input#email").val());
		if(isEmail($("input#email").val())){
			$.ajax({
			        url: 'subscribe.php',
			        type: 'post',
			        data: $('form').serialize(),
			        success: function(data) {
			        	$('.modal-body').text(data);
			        	$('#myModal').modal('toggle');
			        	console.log(data);
			        			
	                 	}
	    		});
	    	}
	    	else
	    		console.log("Not Valid Email");
	});
});
</script>
<!--/JS-->

</head>

<body>

<!--DARK OVERLAY-->
<!--<div class="overlay"></div>-->
<!--/DARK OVERLAY-->

<!--WRAP-->
<div id="wrap">
	<!--CONTAINER-->
	<div class="container">
		<br /><br><br>
		<img src="images/krowner-logo.png" alt="Paper Plane" class="image-align" />
		<br /><br><br>


		<div class="nexa_bold" style="text-align: center;">We are</div>
		<div style="font-size: 56px; text-align: center;">
			<span class="yellow">CHANGING</span>
		</div>
                <br>
		<div style="text-align: center; font-size: 18px;"><strong>You've spoken. We've listened</strong><br><br>
Our website is in the midst of improving .<br>Watch for changes coming.</div><br><br>
		<div style="font-size: 56px; text-align: center;">
			<span class="yellow">Cross Your</span> Future
		</div>
		<!-- Modal -->
                  <!--
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog modal-sm">
		      <div class="modal-content">
		        <div class="modal-header" style=" background-color:#ff9c00">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Subscription Status</h4>
		        </div>
		        <div class="modal-body" style="color: black;">
		          <p>Thanks for your time for subscribng us. We will get back to you soon.</p>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		    </div>
		  </div>
                  -->
		<!-- Modal -->
		
		<br />
		
		<!-- <div id="defaultCountdown"></div>
		<form type="post" action="#">
			<input type="email" name="email" id="email" style="margin-right: 15px;    width: 280px;" placeholder="Subscribe to find out when we are done" required="required">
			<input type="submit" id="submit" value="GO!" style="font-family: Oswald Light 300;margin-right: 15px;">
		</form>
                -->
	</div>
	<!--/CONTAINER-->
</div>
<!--/WRAP-->

</body>
</html>