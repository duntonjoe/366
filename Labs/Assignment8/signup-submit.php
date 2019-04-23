<?php include("top.html"); ?>


<?php
	$url = "http://".$_SERVER['HTTP_HOST']."/Lab8/nerdluv.php";
	$postParameters = http_build_query(
		array(
			'name' => $_POST['name'],
			'gender' => $_POST['gender'],
			'age' => $_POST['age'],
			'ptype' => $_POST['ptype'],
			'os' => $_POST['os'],
			'minAge' => $_POST['minAge'],
			'maxAge' => $_POST['maxAge']
		)
	);
	$opts = array('http' =>
	    array(
	        'method'  => 'POST',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => $postParameters
	    )
	);
	$context = stream_context_create($opts);
	$result = file_get_contents($url, false, $context);
?>

<h1>Thank You!</h1> <br />
<p>Welcome to NerdLuv, <?= $_POST['name']; ?>!</p> <br />
<p>Now <a href="matches.php">log in to see your matches!</a></p>


<?php include("bottom.html"); ?>