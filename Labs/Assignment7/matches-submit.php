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
	?>
	<strong>Matches for <?= $targetUser[0] ?></strong>
	<?php

	foreach($single as $user){
		$currentUser =  explode(",", $user);
		$ageCheck = ageCheck($currentUser[5], $currentUser[6], $targetUser[2]) && ageCheck($targetUser[5], $targetUser[6], $currentUser[2]);

		if($currentUser[1] != $targetUser[1] && $currentUser[4] == $targetUser[4] && pcheck($currentUser[3], $targetUser[3]) && $ageCheck){
			?>

			<div class="match">
				<img src="user.jpg" class="match">
				<p class="match"><?= $currentUser[0]; ?></p>
				<ul class="match">
					<li><strong>gender:</strong> <?= $currentUser[1]; ?> </li>
					<li><strong>age:</strong> <?= $currentUser[2]; ?> </li>
					<li><strong>type:</strong> <?= $currentUser[3]; ?> </li>
					<li><strong>os:</strong> <?= $currentUser[4]; ?> </li>
				</ul>
			</div>


			<?php
		}
	}
?>


<?php include("bottom.html"); ?>
