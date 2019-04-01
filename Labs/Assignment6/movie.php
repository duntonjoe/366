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
			$info = file($movie . "/info.txt");
		?>
		<h1> <?= $info[0] . " (" . $info[1] . ")" ?>  </h1>

		<div class="content">
		
			<div class="right">
				<img src= <?= $movie . "/overview.png"?> alt="general overview" />

			<dl>
				<?php $overview = file($movie . "/overview.txt");
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
					<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rottenbig.png" alt="Rotten" />
					<?= $info[2] . "%" ?>
				</div>
				
				<div class="column_left">
					<div class="review">
						<div class="quote">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
								<q>Ditching the cheeky, self-aware wink that helped to excuse the concept's inherent corniness, the movie attempts to look polished and 'cool,' but the been-there animation can't compete with the then-cutting-edge puppetry of the 1990 live-action movie.</q>
							</p>
						</div>
						<div class="reviewer">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Peter Debruge <br />
								Variety
							</p>
						</div>
					</div>
					<div class="review">
						<div class="quote">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/fresh.gif" alt="Fresh" class="reviewer_image"/>
								<q>TMNT is a fun, action-filled adventure that will satisfy longtime fans and generate a legion of new ones.</q>
							</p>
						</div>
						<div class="reviewer">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Todd Gilchrist <br />
								IGN Movies
							</p>
						</div>
					</div>
					<div class="review">
						<div class="quote">
							<p class="itStinks">
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
								<q>It stinks!</q>
							</p>
						</div>
						<div class="reviewer">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Jay Sherman (unemployed)
							</p>
						</div>
					</div>
					<div class="review">
						<div class="quote">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
								<q>The rubber suits are gone and they've been redone with fancy computer technology, but that hasn't stopped them from becoming dull.</q>
							</p>
						</div>
						<div class="reviewer">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Joshua Tyler <br />
								CinemaBlend.com
							</p>
						</div>
					</div>
					<div class="review">
						<div class="quote">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
								<q>I bet these turtles are super nice, but there's no way they smell good.</q>
							</p>
						</div>
						<div class="reviewer">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Joe Dunton <br />
								Movie Scents Quarterly
							</p>
						</div>
					</div>
				 </div>
				<div class="column_right">
					<div class="review">
						<div class="quote">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
								<q>The turtles themselves may look prettier, but are no smarter; torn irreparably from their countercultural roots, our superheroes on the half shell have been firmly co-opted by the industry their creators once sought to spoof.</q>
							</p>
						</div>
						<div class="reviewer">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Jeannette Catsoulis <br />
								New York Times
							</p>
						</div>
					</div>
					<div class="review">
						<div class="quote">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
								<q>Impersonally animated and arbitrarily plotted, the story appears to have been made up as the filmmakers went along.</q>
							</p>
						</div>
						<div class="reviewer">	
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Ed Gonzalez <br />
								Slant Magazine
							</p>
						</div>
					</div>
					<div class="review">
						<div class="quote">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/fresh.gif" alt="Fresh" class="reviewer_image"/>
								<q>The striking use of image and motion allows each sequence to leave an impression. It's an accomplished restart to this franchise.</q>
							</p>
						</div>
						<div class="reviewer">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Mark Palermo <br />
								Coast (Halifax, Nova Scotia)
							</p>
						</div>
					</div>
					<div class="review">
						<div class="quote">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
								<q>The script feels like it was computer generated. This mechanical presentation lacks the cheesy charm of the three live action films.</q>
							</p>
						</div>
						<div class="reviewer">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Steve Rhodes <br />
								Internet Reviews
							</p>
						</div>
					</div>
					<div class="review">
						<div class="quote">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/rotten.gif" alt="Rotten" class="reviewer_image"/>
								<q>I accidently watched Die Hard instead of TMNT, so i can't give feedback</q>
							</p>
						</div>
						<div class="reviewer">
							<p>
								<img src="http://cs.millersville.edu/~sschwartz/366/HTML_CSS_Lab/Images/critic.gif" alt="Critic" class="reviewer_image"/>
								Joe Dunton <br />
								Confusion Magazine
							</p>
						</div>
					</div>
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
