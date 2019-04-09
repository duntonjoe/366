<?php include("top.html"); ?>

<?php 
	$loginName = $_GET['name']; 
	$single = file('singles.txt');
	$targetUser = 0;
	$currentUser = array();
	foreach($single as $user){
		$currentUser[] = explode(",", $user);
		?>
		<h1><?= print_r($currenUser); ?></h1><br />
		<?php
		if($currentUser[0] == $loginName){
			$targetUser = $currentUser;
		}
	}
?>




<?php include("bottom.html"); ?>
