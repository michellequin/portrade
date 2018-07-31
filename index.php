<!DOCTYPE html>
<html>
	<head>
		<title>Portrade</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="themes/style.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css"/>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/dark-hive/jquery-ui.css" id="theme">
		<!-- Generic page styles -->
		<!-- Demo styles -->
		<link rel="stylesheet" href="css/jquery-ui-demo.css">
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<!-- blueimp Gallery styles -->
		<link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
		<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
		<link rel="stylesheet" href="css/jquery.fileupload.css">
		<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
		<link rel="apple-touch-icon" href="logo/Icon-114.png"/>
		<link rel = "apple-touch-icon" href = "logo/Icon.png"/>
		<meta name ="apple-mobile-web-app-capable" content = "yes">
		<meta name = "apple-mobile-webapp-status-bar-style" content = "black">
		<link rel = "apple-touch-startup-image" href ="logo/Icon.png"/>

				<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">

function showPreview(objFileInput) {
	console.log("here");
    if (objFileInput.files[0]) {
        	var fileReader = new FileReader();
        	fileReader.onload = function (e) {
            	$(".icon-choose-image0").attr("src", e.target.result);
            	$(".icon-choose-image0").css('width', "100%");
            	$(".icon-choose-image0").css('height','100%');
            	$(".icon-choose-image0").css('padding-bottom','5%');
            	$(".icon-choose-image0").attr('class', "upload-preview");
				$("#targetLayer").css('opacity','0.7');
				$(".icon-choose-image").css('opacity','0.5');
        	}
		fileReader.readAsDataURL(objFileInput.files[0]);
	}
	if (objFileInput.files[1]) {
        	var fileReader = new FileReader();
        	fileReader.onload = function (e) {
            	$(".icon-choose-image1").attr("src", e.target.result);
            	$(".icon-choose-image1").css('width', "100%");
            	$(".icon-choose-image1").css('height','100%');
            	$(".icon-choose-image1").css('padding-bottom','5%');
            	$(".icon-choose-image1").attr('class', "upload-preview");
				$("#targetLayer").css('opacity','0.7');
				$(".icon-choose-image").css('opacity','0.5');
        	}
		fileReader.readAsDataURL(objFileInput.files[1]);
	}
	if (objFileInput.files[2]) {
        	var fileReader = new FileReader();
        	fileReader.onload = function (e) {
            	$(".icon-choose-image2").attr("src", e.target.result);
            	$(".icon-choose-image2").css('width', "100%");
            	$(".icon-choose-image2").css('height','100%');
            	$(".icon-choose-image2").attr('class', "upload-preview");
				$("#targetLayer").css('opacity','0.7');
				$(".icon-choose-image").css('opacity','0.5');
        	}
		fileReader.readAsDataURL(objFileInput.files[2]);
	}
}

$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			beforeSend: function(){$("#body-overlay").show();},
			contentType: false,
    	    processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
			$("#targetLayer").css('opacity','1');
			$("#s1").attr("src", $("#upload-preview1").attr("src"));
			$("#s2").attr("src", $("#upload-preview2").attr("src"));
			$("#s3").attr("src", $("#upload-preview3").attr("src"));
			setInterval(function() {$("#body-overlay").hide(); },500);
			},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
	</head>

	<body>
		
		<!-- Welcome page, loaded automatically, accessible via log out button -->
		<div data-role="page" id="welcome" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1>Portrade</h1>
				</div><!-- /header -->
				<div data-role="content" class="ui-content" role="main">
					<h1 style="text-align:center; padding:20px">Welcome to Portrade</h1>
					<div>
						<figure style="display:block;text-align:center;margin:auto;padding:auto">
							<img src="logo/Icon-114.png" style="width:20%;display:inline;margin:auto">
							<figcaption style="padding:8%"> Connect with strangers through photo sharing </figcaption>
						</figure>
					</div>
					<a class="ui-btn" href=#signup> Sign Up </a>
					<a class="ui-btn" href=#login> Log In </a>
					<a class="ui-btn" href=#faq data-rel="popup"> FAQ </a>
				</div>
				<!-- list items -->
				<div data-role="popup" id="faq" data-overlay-theme="b" data-theme="d" data-corners="false">
					<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
					<div style = "background-color:white; width:70%; position: fixed;top:50%;left:50%; transform: translate(-50%, -50%); padding-left:30px; padding-right:30px;">
						<h2>What is Portrade?</h2>
						<p>Portrade aims to connect strangers in a way that fosters empathy and exposure to new perspectives. Simply take three photos throughout your day of absolutely anything, and when you're ready, trade them with a stranger's to get a snapshot into their life!</p>
						<!--<input type="submit" value="Submit">-->
					</div>
				</div>
			</div>

			<!-- sign up page -->
			<div data-role="page" id="signup" data-theme="a">
				<div data-role="header" data-position="inline">
					<h1>Portrade</h1>
					<a class=backbutton data-icon="back" data-rel="back" back-btn="true">Back</a>
				</div><!--
				/header -->
				<div data-role="content" class="ui-content" role="main" data-theme="a">
					<h1 style="text-align:center; padding:20px">Make an Account</h1>
					<ul class=accountlist data-role="listview" style="padding-bottom: 5%;" data-inset="true">
						<li><a class=accountlist style="background-color:#545454">Email Address: <input id="email" class="emailaddress" placeholder="name@email.com"></a></li>
						<li><a class=accountlist style="background-color:#545454">Username: <input id="username" placeholder="yourname"></a></li>
						<li><a class=accountlist style="background-color:#545454">Password: <input type="password" id="password" placeholder="abcdef"></a></li>
					</ul>
					<a class="create" data-icon="check" data-iconpos="Save" data-role="button" data-rel="popup">Create Account</a>
				</div>
				<!-- list items -->
			</div>

			<!-- log in page -->
			<div data-role="page" id="login" data-theme="a">
				<div data-role="header" data-position="inline">
					<h1>Portrade</h1>
					<a class=backbutton data-icon="back" data-rel="back" back-btn="true">Back</a>
				</div> <!-- /header -->
				<div data-role="content" class="ui-content" role="main">
					<h1 style="text-align:center; padding:20px">Log In</h1>
					<ul class=accountlist data-role="listview" style="padding-bottom: 5%;" data-inset="true" data-theme="a">
						<li><a class=accountlist style="background-color:#545454">Username:<input id="username" placeholder="yourname"></input></a></li>
							<li><a class=accountlist style="background-color:#545454">Password: <input type="password" id="password" placeholder="abcdefg"></input></a></li>
						</ul>
						<a class="ui-btn" href=#home> Log In </a>
				</div>
			</div>

			<!-- Account page, accessible via navbar -->
			<div data-role="page" id="account" data-theme="a">
				<div data-role="header" data-position="inline">
					<h1>Portrade</h1>
					<a href="#welcome" data-rel="Log Out" data-role="button" data-icon="action" class="ui-btn-right">Log Out</a>
					</div><!-- /header -->
					<div data-role="popup" id="popupBasic1" data-overlay-theme="a" data-theme="d" data-corners="false">
						<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
					</div>
					<div data-role="content" class="ui-content" data-theme="a">
						<h2>Account</h2>
						<img class=avatar src="avatar.png" style="width:30%; display: flex; margin:auto;">
						<ul class=accountlist data-role="listview" style="padding-bottom: 25px;" data-inset="true">
							<li><a class=accountlist style="background-color:#545454">Email: <input class="email" value="stranger@email.com"></input></a></li>
							<li><a class=accountlist style="background-color:#545454">Username: <input class="username" value="stranger"></input></a></li>
							<li><a class=accountlist style="background-color:#545454">Password: <input class="password" value="IloveCS"></a></li>
							<a class="save" data-icon="check" data-iconpos="Save" data-role="button" data-rel="popup">Update</a>
						</ul>
					</div>
					<div data-role="footer" data-id="foo1" data-position="fixed" data-theme="b">
						<div id="navigation">
							<div data-role="navbar">
								<ul>
									<li> <a href="#account" data-icon="user">Account</a> </li>
									<li> <a href="#home" data-icon="home">Home</a> </li>
									<li> <a href="#archive" data-icon="grid">Archive</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Archive page, accessible via navbar -->
			<div data-role="page" id="archive" data-theme="a">
				<div data-role="header" data-position="inline">
					<h1>Portrade</h1>
					<a href="#welcome" data-rel="Log Out" data-role="button" data-icon="action" class="ui-btn-right">Log Out</a>
					</div><!-- /header -->
					<div data-role="popup" id="popupBasic1" data-overlay-theme="a" data-theme="d" data-corners="false">
						<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
					</div>
					<div data-role="content" class="ui-content" data-theme="a">
						<h2>Archive</h2>
								<div class="row">
								<div class="column">
								<h3> My Photos: </h3>
								<img class="icon-choose-image0">
								<img class="icon-choose-image1">
								<img class="icon-choose-image2">
								</div>
								<div class="column">
								<h3> Stranger's Photos: </h3>
								<img id="s1" style="width:100%;height:100%;padding-bottom:5%">
								<img id="s2" style="width:100%;height:100%;padding-bottom:5%">
								<img id="s3" style="width:100%;height:100%">
								</div>
								</div>
								</div>
					<div data-role="footer" data-id="foo1" data-position="fixed" data-theme="b">
						<div id="navigation">
							<div data-role="navbar">
								<ul>
									<li> <a href="#account" data-icon="user">Account</a> </li>
									<li> <a href="#home" data-icon="home">Home</a> </li>
									<li> <a href="#archive" data-icon="grid">Archive</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Home page, accessible via navbar -->
			<div data-role="page" id="home" data-theme="a">
				<div data-role="header" data-position="inline">
					<h1>Portrade</h1>
					<a href="#welcome" data-rel="Log Out" data-role="button" data-icon="action" class="ui-btn-right">Log Out</a>
					</div><!-- /header -->
					<div data-role="popup" id="popupBasic1" data-overlay-theme="a" data-theme="d" data-corners="false">
						<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
					</div>
					<div data-role="content" class="ui-content" data-theme="a">
						<h2>Upload 3 Photos...</h2>
						<div class="bgColor">
							<form id="uploadForm" action="upload.php" method="post">
							<div id="targetOuter">
								<div id="targetLayer">
									<img src="photo.png"  class="icon-choose-image0"/>
									<img src="photo.png"  class="icon-choose-image1"/>
									<img src="photo.png"  class="icon-choose-image2"/>
								</div>
								<div class="icon-choose-image" >
								<input name="userImage" id="userImage" type="file" class="inputFile" multiple="multiple" onChange="showPreview(this);" />
								</div>
								
							</div>
							<div>
							<input type="submit" value="Upload Photos" class="btnSubmit" />
							</form>

							</div>
					</div>
					<div data-role="footer" data-id="foo1" data-position="fixed" data-theme="b">
						<div id="navigation">
							<div data-role="navbar">
								<ul>
									<li> <a href="#account" data-icon="user">Account</a> </li>
									<li> <a href="#home" data-icon="home">Home</a> </li>
									<li> <a href="#archive" data-icon="grid">Archive</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
<script>

$('.create').click(function(e) {

                  e.preventDefault();


                  alert('You have successfully created an account!');


                  location.href = "#home";

                  $(".email").val($("#email").val());


                  $(".username").val($("#username").val());



                  $(".password").val($("#password").val());


                });

$('.save').click(function(e) {

                  e.preventDefault();


                  alert('You have successfully updated your information');


                  location.href = "#account";


                  $("#email").val($(".email").val());


                  $("#username").val($(".username").val());



                  $("#password").val($(".password").val());


                });
</script>

   </body>

</html>


