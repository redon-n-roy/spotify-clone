<?php
include("../../config.php");

if($_FILES["file"]["name"] != '') {
	$test = explode(".", $_FILES["file"]["name"]);
	$extension = end($test);
	$name = rand(1000000,9999999) . '.' . $extension;
	$location = '../../../assets/images/uploads/' . $name;
	move_uploaded_file($_FILES["file"]["tmp_name"], $location);
	if(isset($_POST['playlistId'])) {
		$playlistId = $_POST['playlistId'];
		$deleteQuery = mysqli_query($con, "SELECT playlistArtwork FROM playlists WHERE id = '$playlistId'");
		$row = mysqli_fetch_array($deleteQuery);
		$deletePath = $row['playlistArtwork'];
		unlink('../../../' . $deletePath);
		$newLocation = 'assets/images/uploads/' . $name;
		$query = mysqli_query($con, "UPDATE playlists SET playlistArtwork = '$newLocation' WHERE id = '$playlistId'");
	}
	else {
		echo "File or playlistId parameters not passed into file";
	}
} 
?>