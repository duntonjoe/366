<?php include("top.html"); ?>

<div>
	name: <?= echo ($_POST['name'] . "<br />"); ?>
	gender: <?= echo ($_POST['gender'] . "<br />"); ?>
	minAge: <?= echo ($_POST['minAge'] . "<br />"); ?>
	maxAge: <?= echo ($_POST['maxAge'] . "<br />"); ?>
	os: <?= echo ($_POST['os'] . "<br />"); ?>
	ptype: <?= (echo $_POST['ptype'] . "<br />"); ?>
</div>

<?php include("bottom.html"); ?>