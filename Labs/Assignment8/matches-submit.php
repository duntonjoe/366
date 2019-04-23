<?php include("top.html");
	$url = "http://".$_SERVER['HTTP_HOST']."/366/Labs/Assignment8/nerdluv.php?";
	$name = $_GET['name'];
	$matches = http_build_query(array('name' => $name));
	$jsonData = json_decode(file_get_contents($url.$matches));
?>
	<strong>Matches for <?= $name ?></strong>

<?php 
	foreach($jsonData[data] as $line){
?>
			<div class="match">
				<p><img src="user.jpg" alt="user image"> <?= $line['name']; ?></p>
				<ul>
					<li><strong>gender:</strong> <?= $line['gender']; ?> </li>
					<li><strong>age:</strong> <?= $line['age']; ?> </li>
					<li><strong>type:</strong> <?= $line['ptype']; ?> </li>
					<li><strong>OS:</strong> <?= $line['os']; ?> </li>
				</ul>
			</div>
<?php

	}

include("bottom.html"); ?>
