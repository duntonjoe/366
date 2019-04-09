<?php include("top.html"); ?>

<?php $dataString = $_POST['name'].",".$_POST['gender'].",".$_POST['age'].",".$_POST['ptype'].",".$_POST['os'].",".$_POST['minAge'].",".$_POST['maxAge']; 
		$singles = 'singles.txt';
		print_r($dataString);
		file_put_contents($singles, $dataString, FILE_APPEND);
?>

<h1>Thank You!</h1> <br />
<p>Welcome to NerdLuv, <?= $_POST['name']; ?>!</p> <br />
<p>Now <a href="matches.php">log in to see your matches!</a></p>


<?php include("bottom.html"); ?>