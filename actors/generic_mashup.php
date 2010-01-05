<?php
include("../api/curl.php");

$MASHUP_URL = 'http://www.popfly.com/users/mpare/Async%20Actors%20May%2016.content?mdgid=' . $MDG_ID . '&tcsessionid=' . $SESSION_ID;


//$MASHUP_URL = 'http://www.popfly.com/users/mpare/Async%20Actors.content?url=' . urlencode($FEED_URL);

//$c = new cURL();
//$sa_url = sprintf("http://search.socialactions.com/actions.json?q=%s&limit=10", //urlencode($SOCIAL_ACTION_QUERY));

//$resp = $c->get($sa_url);
//$resp = $resp['cr'];

//$actions = json_decode($resp);

?>
<?php include("header.php"); ?>


<h1>Who's acting to <em><?php echo($TITLE_TEXT) ?>?</em></h1>

<h2>The Background</h2>
<?php echo($HOOK) ?>

<h2>The Mashup 
	<a class="help tt">(what's a mashup?) 
		<span class="tooltip">
			<div class="callout">
				<p class="arrowtop" ><img src="images/callout/toparrow.gif" /></p>

				<div class="boxhead">
					<h2></h2>
				</div>
				<div class="boxbody">
					<p>In web development, a mashup is a Web application that combines data or functionality from two or more sources into a single integrated application. In this mashup, news data from RSS feeds is combined with language processing algorithms to present an interesting visualization of the news.</p>
				</div>
			</div>
		</span>

		</a>
</h2>

<div id="mashup-container">
	<div id="mashup-top"></div>
	
	<div id="mashup-intro">
	<p id="intro1" class="intro"><span class="intro">Say Hello to Code That Can Read&#8212;and Feel.</span> The mashup below is the result of applying language processing algorithms to news articles about MDGs. The AI tries to divine the names of people mentioned in the article as well as the sentiment (positive or negative) of the speaker in relation to that person.</p>

	<p id="intro2" class="intro"><span class="intro">Explore.</span> The robots behind this website check to see if there is more information on the web about each person they find. If you&#8217;re curious about someone, take advantage of this by waving your mouse over their name and following any one of the links that show up.</p>

	<p id="intro3" class="intro"><span class="intro">Empathize.</span> If an author voices particularly strong sentiment in a sentence, an icon is added next to the sentence to indicate that feeling. Phrases with hearts are usually about people doing good, and phrases with condescending frowns usually signal more controversial topics.</p>

	<p id="intro4" class="intro"><span class="intro">Get Inspired.</span> Everyone mentioned in the articles below is in some way related to the MDGs. However, the algorithms powering this mashup are still not perfect, so we hope you&#8217;ll laugh along at the occasional mishap as you explore. While it&#8217;s not perfect, we hope you can draw inspiration from the mashup by meeting new people from across the world.</p>
	<p id="collapseIntro" class="right"><a>Thanks for the explanation (Minimize this box)</a></p>
	<p id="expandIntro" class="right"><a>Read the introduction</a></p>
	</div>
		<!-- old social action code
		<div>
			<h3><em>You</em> can act, too</h3>
			<p>Social Actions is an organization that catalogues small actions related to doing good that you can take right now from your computer. Here are 10 listings related to this Millennium Development Goal.</p>
			
<?php if($actions){ ?>
			<ul class="blocky">
				<?php foreach($actions as $a){ ?>
				<li><a href="<?php echo('http://www.teamcurious.com/sa.php?go=' . urlencode($a->url)) ?>"><?php echo(htmlspecialchars($a->title)) ?></a></li>
				<?php } ?>
			</ul>
<?php }?>
		</div>
	-->
	
	<div id="mashup-frame">
<!--
	<iframe style='width:100%; height:700px; background: #f1f1f1;' src='<?php echo($MASHUP_URL) ?>' frameborder='no' allowtransparency='true'></iframe>
-->
<!--
<iframe style='width:720px; height:1000px; ' src='<?php echo($MASHUP_URL) ?>' frameborder='no' allowtransparency='true' scrolling="no"></iframe>
-->
	</div>
	
	<div id="mashup-bottom"></div>
</div>


<?php include("footer.html"); ?>
