<?php
include("../../config.php");

if(isset($_POST['playlistId'])) {
	$playlistId = $_POST['playlistId'];
	$deleteQuery = mysqli_query($con, "SELECT playlistArtwork FROM playlists WHERE id = '$playlistId'");
	$row = mysqli_fetch_array($deleteQuery);
	$deletePath = $row['playlistArtwork'];
	unlink('../../../' . $deletePath);
	$playlistQuery = mysqli_query($con, "DELETE FROM playlists WHERE id='$playlistId'");
	$songsQuery = mysqli_query($con, "DELETE FROM playlistSongs WHERE playlistId='$playlistId'");
}
else {
	echo "playlistId was not passed into deletePlaylist.php";
}

?>