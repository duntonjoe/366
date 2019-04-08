<?php include("top.html"); ?>

<?php $dataString = $_POST['name'].",".$_POST['gender'].",".$_POST['age'].",".$_POST['ptype'].",".$_POST['os'].",".$_POST['minAge'].",".$_POST['maxAge']; 
		$singles = 'singles.txt';
		file_put_contents($singles, $dataString, FILE_APPEND);
?>

<h1>Thank You!<h1> <br />
<br />
<p>Welcome to NerdLuv, <?= $_POST['name']; ?></p> <br />
<br />
<p>Now <a href="matches.php"></a>log in to see your matches!</p>


<?php include("bottom.html"); ?>