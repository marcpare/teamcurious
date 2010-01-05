<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>MDG Actors :: Find out who's making a difference : by Team Curious</title>
	<link rel="icon" href="images/icon.gif" type="image/gif"> 
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?2.7.0/build/reset-fonts/reset-fonts.css&amp;2.7.0/build/base/base-min.css" /> 
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" title="main stylesheet" charset="utf-8" />
	<link rel="stylesheet" href="css/dialog_box.css" type="text/css" media="screen" title="main stylesheet" charset="utf-8" />

<?php
	if(isset($addCSS)){
		foreach($addCSS as $css){?>
<link rel="stylesheet" href="css/<?php echo($css) ?>.css" type="text/css" media="screen" title="main stylesheet" charset="utf-8" />
		<?php	
		}
	}
?>
	<!--
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-6719476-3");
	pageTracker._trackPageview();
	} catch(err) {}</script>
	-->
	
	<script type="text/javascript" language="javascript" src="scripts/dialog_box.js"></script>
	<script type="text/javascript" language="javascript" src="scripts/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="scripts/jquery.cookie.js"></script>
	
	<script type="text/javascript" language="javascript">
	
	// check for Firefox
	b = function(){
		var userAgent = navigator.userAgent.toLowerCase();

		browser = {
			version: (userAgent.match( /.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/ ) || [0,'0'])[1],
			safari: /webkit/.test( userAgent ),
		    opera: /opera/.test( userAgent ),
		    msie: /msie/.test( userAgent ) && !/opera/.test( userAgent ),
		    mozilla: /mozilla/.test( userAgent ) && !/(compatible|webkit)/.test( userAgent )
		    };
		return browser;
	};

	// collapsing help box
	$(document).ready(function() {
		
		var warned = $.cookie('warning');
		
		if( !(warned == 'shown') && !b().mozilla ){
			showDialog('Warning','Oh no! We really appreciate you spending the time to check out our site. Unfortunately, it does fully support your browser. You will need to use <a href="http://www.getfirefox.com">Firefox</a> to experience all of this website.','warning');
			$.cookie('warning', 'shown');
		}
		
		// curious box (share buttons and meh buton)
		$('#loveit').click(function() {
			$('#share1').css("display", "block");
			$('#share2').css("display", "block");
			$('#opinion').css('display', 'none');
		});
		
		$('#mehit').click(function() {
			$('#share1').css("display", "none");
			$('#share2').css("display", "none");
			$('#opinion').css('display', 'block');
		});
		
		// When the collapse button is clicked:
	    $('#collapseIntro').click(function() {
			
			$("#mashup-intro").animate({ 
			        height: "20px"
			      	}, 1000, "linear",  function(){
						$("p.intro").css("display", "none");
						});
			
			$('#collapseIntro').css("display", "none");
			$('#expandIntro').css("display","block");
	        $.cookie('intro', 'collapsed');
	    });
	    // When the expand button is clicked:
	    $('#expandIntro').click(function() {
			$("p.intro").css("display", "block"); 
			$("#mashup-intro").css("height", "auto");							
			$('#collapseIntro').css("display", "block");
	        $('#expandIntro').css("display","none");
	        $.cookie('intro', 'expanded');
	    });
			
		var intro = $.cookie('intro');
	    if (intro == 'collapsed') {
	        $('p.intro').css("display","none");
			$('#expandIntro').css("display","block");
			$('#collapseIntro').css("display","none");
	    };


	});
	
	</script>
</head>
<body>


<div id="curious-box">
		<p>Check out what we've been up to the last 30 days <a href="http://blog.teamcurious.com">on our blog</a>. Hint: it involves lots of really cool people and a video camera.</a></p>
</div>
<!--
<div id="curious-box"><p>This is a <a href="http://www.teamcurious.com">curious</a> mashup.</p> <p><img class="tiny" src="images/icons/smallheart.png" alt="<3"/><a id="loveit">I love it!</a> / <img class="tiny" src="images/icons/smallmeh.png" alt=":-/"/><a id="mehit">meh.</a></p>

<p id="share1">Would you mind sharing it?</p>
<p id="share2">
<a href="http://digg.com/submit?phase=2&amp;url=http%3A%2F%2Fteamcurious.com%2Factors%2F&amp;title=Save%20the%20World%20-%20Cool%20News%20Visualization&amp;bodytext=RSS%20feeds%20get%20mashed%20up%20with%20advanced%20language%20processing%20APIs%20to%20highlight%20the%20heroes%2Fvillains%20in%20the%20news.%20Enjoy.&amp;topic=design" class="quiet"><img class="tiny" src="images/icons/digg_32.png" alt="digg"/></a>
<a href="http://www.facebook.com/pages/Atlanta-GA/Team-Curious/94167761881?v=wall&amp;viewas=12820453" class="quiet"><img class="tiny" src="images/icons/facebook_32.png" alt="facebook"/></a>
<a href="http://twitter.com/home?status=Killer%20News%20Visualization%20%20http%3A%2F%2Fbit.ly%2F14JgEG" class="quiet"><img class="tiny" src="images/icons/twitter_32.png" alt="twitter"/></a>
<a href="http://del.icio.us/post?v=4&amp;noui&amp;jump=close&amp;url=http%3A%2F%2Fteamcurious.com%2Factors%2Findex.php" class="quiet"><img class="tiny" src="images/icons/delicious_32.png" alt="delicious"/></a>	
</p>

<p id="opinion">We&#8217;d love to <a href="mailto:mpare@gatech.edu">hear your opinion.</a></p>

</div>
-->
<div id="header">
	<h1><a class="quiet" href="index.php">MDG <span>Actors</span></a></h1>
	<p>get inspired by who&#8217;s acting to help reach the Millennium Development Goals</p>
</div>
<!--
<div id="breadcrumb">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php">Home</a></li>
	</ul>
</div>
-->

<div id="content">