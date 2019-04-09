<?php include("top.html"); ?>

<?php 
	$loginName = $_GET['name']; 
	$single = file('singles.txt');
	$targetUser = 0;
	$currentUser = array();
	foreach($single as $user){
		$currentUser[] = explode(",", $user);
		if($currentUser[0] == $loginName){
			$targetUser[] = $currentUser;
		}
	}
?>

<h1><?= print_r($single); ?></h1>


<?php include("bottom.html"); ?>
