<?php include("top.html"); ?>

<?php 
	$loginName = $_GET['name']; 
	$single = file('singles.txt');
	$targetUser;
	$currentUser
	foreach($single as $user){
		$currentUser =  explode(",", $user);
		if($currentUser[0] == $loginName){
			$targetUser = $currentUser;
		}
	}
?>

<h1><?= print_r($targetUser); ?></h1><br />


<?php include("bottom.html"); ?>
