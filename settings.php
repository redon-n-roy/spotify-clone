<?php
include("includes/includedFiles.php");
?>

<div class="entityInfo">
	<div class="centerSection">
		<div class="userInfo">
			<h1><?php echo $userLoggedIn->getFirstAndLastName(); ?></h1>
			<h3>Username: <?php echo $userLoggedIn->getUsername(); ?></h3>
		</div>	
	</div>
	<div class="buttonItems">
		<button class="button" onclick="openPage('updateDetails.php')">USER DETAILS</button>
		<button class="button" onclick="logout()">LOGOUT</button>
	</div>
</div>