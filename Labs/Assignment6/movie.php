<!DOCTYPE html>
<html>
	<?php
		$movie = $_GET["film"];
	?>
	<head>
		<title>Rancid Tomatoes</title>

		<meta charset="utf-8" />
		<link rel="icon" href="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" type="image/gif">
		<link href="movie.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div class="banner">
			<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/banner.png" alt="Rancid Tomatoes"/>
		</div>

		<?php
			$movie = $_GET["film"];
			$info = file($movie . "/info.txt");
		?>
		<h1> <?= $info[0] . " (" . $info[1] . ")" ?>  </h1>

		<div class="content">
		
			<div class="right">
				<img src= <?= $movie . "/overview.png"?> alt="general overview" />

			<dl>
				<?php 
					$movie = $_GET["film"];
					$overview = file($movie . "/overview.txt");
					foreach($overview as $section){
					$section = explode(":", $section);
					print "<dt>".$section[0]."</dt><dd>".$section[1]."</dd>";
					} 
				?>
				<dd>
					<ul>
						<li><a href="http://www.ninjaturtles.com/">The Official TMNT Site</a></li>
						<li><a href="http://www.rottentomatoes.com/m/teenage_mutant_ninja_turtles/">RT Review</a></li>
						<li><a href="http://www.rottentomatoes.com/">RT Home</a></li>
					</ul>
				</dd>
			</dl>

			</div>
			<div class="left">
				<div id="left-top">
					<?php if($info[2] >= 60){
							$reviewPic = "fresh";
					}
					else{
						$reviewPic = "rotten";
					}
					?>
					<img src= <?="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/".$reviewPic."big.png"?> alt="Rotten" />
					<?= $info[2] . "%" ?>
				</div>
				
				<div class="column_left">
					
					<?php 
							$movie = $_GET["film"];
							$reviewFile = glob($movie."/review*.txt");
							$count = count($reviewFile);
							$half = floor($count / 2);
							for($i = 0; $i < $half; $i++){
								$review = file($reviewFile[$i]);
					?>
						<div class="review">
							<div class="quote">
								<p>
									<?php 
										if($review[1] == "ROTTEN"){
											?>
											<img src= "http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
										<?php }
										else{
											?>
											<img src= "http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
										<?php } ?>
									<q> <?= trim($review[0]) ?> </q>
								</p>
						 	</div>	
						 	<div class="reviewer">
								<p>
									<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
									<?= $review[2]."<br />".$review[3] ?>
								</p>
							</div>
						</div>
						<?php } ?>
					</div>
				<div class="column_right">
					<?php 
							$movie = $_GET["film"];
							$reviewFile = glob($movie."/review*.txt");
							$count = count($reviewFile);
							$half = floor($count / 2);
							for($i = $half + 1; $i < $count; $i++){
								$review = file($reviewFile[$i]);
					?>
						<div class="review">
							<div class="quote">
								<p>
									<?php 
										if($review[1] == "ROTTEN"){
											?>
											<img src= "http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
										<?php }
										else{
											?>
											<img src= "http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
										<?php } ?>
									<q> <?= trim($review[0]) ?> </q>
								</p>
						 	</div>	
						 	<div class="reviewer">
								<p>
									<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
									<?= $review[2]."<br />".$review[3] ?>
								</p>
							</div>
						</div>
						<?php } ?>
				</div>
			</div>
			<p id="bottom">(1-10) of 88</p>
		</div>
		<div id="valid">
			<a href="http://validator.w3.org/check/referer"><img src="http://cs.millersville.edu/~sschwartz/366/Images/w3c-html.png" alt="Valid HTML5" class="validator"/></a> <br />
			<a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="http://cs.millersville.edu/~sschwartz/366/Images/w3c-css.png" alt="Valid CSS" class="validator" /></a>
		</div>
	</body>
</html>
