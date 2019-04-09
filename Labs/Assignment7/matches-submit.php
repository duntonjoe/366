<?php include("top.html"); ?>

<?php 
	$loginName = $_GET['name']; 
	$single = fopen('singles.txt');
	$targetUser = 0;
	$currentUser = array();
	for each($single as $user){
		$currentUser[] = explode(",", $user);
		if($currentUser[0] == $loginName){
			$targetUser[] = $currentUser;
		}
	}
?>

<h1><?= $targetUser[0];?></h1>


<?php include("bottom.html"); ?>
