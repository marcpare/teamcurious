<?php $addCSS = array('twitter'); include("header.php"); ?>

<h1>How does <img id="twitter-logo" src="images/twitter_logo.jpg" /> feel about

<form action="twitter.php" method="get">
	<fieldset>
	<input class="input" type="text" title="Who or what" maxlength="255" size="11" name="what" id="txtWhat" value="<?php echo $_GET['what'] ?>" />
	<input type="submit" value="?" />
	</fieldset>
</form>	
	
</h1>

<?php

if($_GET['what']){?>
	<div>
		<!--
		<iframe style='width:100%; height:500px;' src='http://www.popfly.com/users/mpare/HowDoesTwitterFeel.content?q=<?php echo $_GET['what'] ?>>' frameborder='no' allowtransparency='true'></iframe>
		-->
	</div>
<?php
}else{?>
	<p>Enter a search term to find out.</p>
<?php
}

?>

<h2>Legend</h2>

<ul id="legend">
	<li>
		<p><div class="sentiment verygood"></div>Very good</p>
		<p><div class="sentiment good"></div>Alright</p>
		<p><div class="sentiment ok"></div>Neutral</p>
		<p><div class="sentiment bad"></div>Not so great</p>
		<p><div class="sentiment verybad"></div>Pretty terrible</p>
	</li>
</ul>


<h2>About the idea</h2>
<p>
Before it was acquired by Twitter, a company called Summize has a really cool visualization for the sentiment of tweets about a topic. That visualization has since disappeared, so we built our own using our sentiment analysis Popfly block.
</p>

<?php include("footer.html"); ?>