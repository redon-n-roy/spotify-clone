<?php
include("../../config.php");

if(isset($_POST['name']) && isset($_POST['username'])) {
	$name = $_POST['name'];
	$username = $_POST['username'];
	$date = date("Y-m-d");
	$fileName = $name . rand(1000000,9999999) .'.png';
	$fileLocation = '../../../assets/images/uploads/playlist_'. $fileName;
	copy('../../../assets/images/icons/playlist.png', $fileLocation);
	$qFileLocation = 'assets/images/uploads/playlist_'. $fileName;
	$query = mysqli_query($con, "INSERT INTO playlists VALUES('','$name', '$username', '$date', '$qFileLocation')");
}
else {
	echo "Name or username parameters not passed into file";
}

?>