<?php $addCSS = array('mashup', 'spin'); include("header.php"); ?>

<h1>Show me some <em>spin</em> about

<form action="spin.php" method="get">
	<fieldset>
	<input class="input" type="text" title="Who or what" maxlength="255" size="14" name="what" id="txtWhat" value="<?php echo $_GET['what'] ?>" />
	<input type="submit" value="!" />
	</fieldset>
</form>	
	
</h1>

<p class="hook">
	What are the pundits saying about a person or a topic? This mashup pulls recent quotes using Daylife, and then displays those that have strong negative or positive sentiment. 
</p>

<a href="http://www.daylife.com"><img class="right" src="images/daylife_logo.png" /></a>
<br />

<?php
if($_GET['what']){?>
<div class="clear">
<!--
<iframe style='width:100%; height:2500px;' src='http://www.popfly.com/users/mpare/ShowMeSpinAbout.content?q=<?php echo $_GET['what'] ?>' frameborder='no' allowtransparency='true'></iframe>
-->
</div>
<?php
}else{?>
	<p>Enter a search term to find out.</p>
<?php
}

?>

<?php include("footer.html"); ?>