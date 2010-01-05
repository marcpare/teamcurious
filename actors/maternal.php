<?php

$TITLE_TEXT = "better maternal health";

$HOOK = '
<p class="hook">Estimates for 2005 show that, every minute, a woman dies of complications related to pregnancy and childbirth. This adds up to more than 500,000 women annually and 10 million over a generation. <em>Almost all of these women&#8212;99 per cent&#8212;live and die in developing countries.</em> </p>

<p class="hook">Maternal mortality shows the greatest disparity among countries: in sub-Saharan Africa, a woman&#8217;s risk of dying from treatable or preventable complications of pregnancy and childbirth over the course of her lifetime is  1 in 22, compared to 1 in 7,300 in developed regions. </p>

<p class="hook">Every year, more than 1 million children are left motherless and vulnerable because of maternal death.  </p>

<p class="quiet right">Source: <a href="http://www.un.org/millenniumgoals/maternal.shtml">http://www.un.org/millenniumgoals/maternal.shtml</a></p>

';

$WHAT = 'Google news related to maternal health and the Millennium Development Goals';

$FEED_URL = 'http://news.google.com/nwshp?output=rss&num=25&q=maternal%20or%20health%20or%20mothers+%22millennium+development+goals%22';

$SOCIAL_ACTION_QUERY = "maternal health";

$MDG_ID = 5;

include("generic_mashup.php");
?>