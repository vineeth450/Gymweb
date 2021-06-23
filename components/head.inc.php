<!DOCTYPE html>
<html>
<head>
	<title>Dynamo Fitness & Gym</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
	<script>
		function myFunction() {
		  var dots = document.getElementById("dots");
		  var moreText = document.getElementById("more");
		  var btnText = document.getElementById("myBtn");

		  if (dots.style.display === "none") {
		    dots.style.display = "inline";
		    btnText.innerHTML = "Read more";
		    moreText.style.display = "none";
		  } else {
		    dots.style.display = "none";
		    btnText.innerHTML = "Read less";
		    moreText.style.display = "inline";
		  }
		}
	</script>
	<script>
		$(function() {
   
		    $(".form-control").on('focus', function(){

		        $(this).parents(".form-group").addClass('focused');

		    });

		    $(".form-control").on('blur', function(){

		        $(this).parents(".form-group").removeClass('focused');

		    });

		});
	</script>
</head>
<body>
