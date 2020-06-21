<?php
	include 'db.inc.php';

	$country = $_POST["countryCode"];
	$state = $_POST["state"];
	$city = $_POST["city"];
	$place = $_POST["place"];
	$street = $_POST["street"];
	$pincode = $_POST["pincode"];

	$sql = "INSERT into address_details(country,state,city,place,street,pincode) VALUES('$country','$state','$city','$place','$street','$pincode')";

	$result = $conn -> query($sql);
	echo "success";
?>