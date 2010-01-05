<?php

$TITLE_TEXT = "eradicate HIV/AIDs";

$HOOK = '
<p class="hook">Most countries are struggling to meet the targets of achieving universal access to treatment for <span class="caps">HIV</span>/AIDS by 2010 and of halting and reversing the spread of <span class="caps">HIV</span>/AIDS by 2015.</p>


	<p class="hook"><strong>Prevention is 28 times more cost-effective than treatment</strong>. A comprehensive <span class="caps">HIV</span> prevention package could avert 29 million (or 63 per cent) of the 45 million new infections expected to occur between 2002 and 2010, at an initial total cost of some $4.2 billion annually. <span class="caps">HIV</span> prevention is critical to controlling the epidemic. In countries for which information is available, no more than 40 per cent of men and 36 percent of women aged 15 to 24 understand how <span class="caps">HIV</span> is transmitted and how to prevent infection, well below the 95 percent <span class="caps">MDG</span> target.</p>


	<p class="quiet right">Source: <a href="http://www.un.org/millenniumgoals/aids.shtml">http://www.un.org/millenniumgoals/aids.shtml</a></p>

';

$WHAT = 'Google news related to HIV/AIDs and the Millennium Development Goals';


$FEED_URL = 'http://news.google.com/nwshp?output=rss&num=25&q=HIV or AIDS or malaria  "millennium+development+goals"';

$SOCIAL_ACTION_QUERY = "hiv or aids";

$MDG_ID = 6;

include("generic_mashup.php");
?>