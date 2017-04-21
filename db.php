<?php 

	$servername = "localhost";
	$username = "id1111790_root";
	$password = "12345678";
	$dbname = "id1111790_longlat";

	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection

	if ($conn->connect_error) {

		die("Connection failed: " . $conn->connect_error);

	} 



	$sql = "SELECT id, location_Latitude, location_Longitude FROM maps";

	$res = $conn->query($sql);



	if( $res ) while( $rs=$res->fetch_object() ) $places[]=array( 'latitude'=>$rs->location_Latitude, 'longitude'=>$rs->location_Longitude);

	

	header( 'Content-Type: application/json' );

        echo json_encode( $places,JSON_FORCE_OBJECT );

        exit();


	$conn->close();
	
	
?>










