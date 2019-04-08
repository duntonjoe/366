<?php include("top.html"); ?>

<?php $dataString = $_POST['name'].",".$_POST['gender'].",".$_POST['age'].",".$_POST['ptype'].",".$_POST['os'].",".$_POST['minAge'].",".$_POST['maxAge']; ?>

<h1><?= $dataString ?></h1>

<?php include("bottom.html"); ?>