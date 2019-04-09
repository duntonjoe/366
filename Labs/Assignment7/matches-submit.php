<?php include("top.html"); ?>

<?php 
		function pcheck($a , $b){
			for($i = 0; $i < 3; $i++){
				if($a[$i] == $b[$i]){
					return true;
				}
			}
			return false;
		}

		function ageCheck ($lower, $upper, $age){
			if($age >= $lower && $age <= $upper){
				return true;
			}
			else{
				return false;
			}
		}
?>

<?php 
	$loginName = $_GET['name']; 
	$single = file('singles.txt');
	$targetUser;
	$currentUser;
	foreach($single as $user){
		$currentUser =  explode(",", $user);
		if($currentUser[0] == $loginName){
			$targetUser = $currentUser;
			break;
		}
	}

	foreach($single as $user){
		$currentUser =  explode(",", $user);
		$ageCheck = ageCheck($currentUser[5], $currentUser[6], $targetUser[1]) && ageCheck($targetUser[5], $targerUser[6], $currentUser[1]);

		if(($currentUser[1] != $targetUser[1]) && ($currentUser[4] == $targetUser[4]) && (pcheck($currentUser[3], $targetUser[3])) && ($ageCheck != false)){
			?>
			<h1><?= print_r($currentUser); ?></h1>
			<?php
		}
	}
?>


<?php include("bottom.html"); ?>
