<?php include("header.php"); ?>

	<p class="hook">Tackling the toughest problems facing the world today is a big job. What if we could <em>highlight the people that are making a big difference</em> and call out the people that aren’t? We think that it would be <em>inspiring</em>—Umair Haque thinks it could <em class="extra">change the world</em>. <a class="arrow" href="about.php">Read our manifesto</a></p>

<?php
function randomImage ( $array ) {
  $total = count($array);
  $call = rand(0,$total-1);
  return $array[$call];
}

$my_images = array (
  "images/badasses/marcus.jpg",
  "images/badasses/obama.jpg",
  "images/badasses/ghandi.jpg",
);

$img = randomImage($my_images);

?>

	<div id="mdg-container" style="background-image: url(<?php echo($img) ?>)">
		<h1>Find out who's acting to&mdash;</h1>
		<ul>
			<li><a class="arrow" href="hunger.php">end poverty and hunger</a></li>
			<li><a class="arrow" href="hiv.php">eradicate HIV/AIDs</a></li>
			<li><a class="arrow" href="education.php">provide universal education</a></li>
			<li><a class="arrow" href="women.php">champion gender equality</a></li>
			<li><a class="arrow" href="children.php">secure child health</a></li>
			<li><a class="arrow" href="maternal.php">better maternal health</a></li>
			<li><a class="arrow" href="climate.php">combat global warming</a></li>
			<li><a class="arrow" href="partnership.php">promote global partnership</a></li>
		</ul>
	</div>
	<p class="quiet right">Confused? Click on one of the Millennium Development Goals in the box above to continue</p>


<?php include("footer.html"); ?>