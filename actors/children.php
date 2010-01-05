<?php

$TITLE_TEXT = "secure child health";

$HOOK = '
<p class="hook">A child born in a developing country is over <em>13 times more likely to die within the first five years of life than a child born in an industrialized country</em>. Sub-Saharan Africa accounts for about half the deaths of children under five in the developing world. </p>

<p class="hook">Between 1990 and 2006, about 27 countries&#8212;the large majority in sub-Saharan Africa&#8212;made no progress in reducing childhood deaths.</p>

<p class="hook">Millions of these deaths are from <em>preventable causes</em> such as pneumonia, diarrhea, malaria and measles. </p>

<p class="quiet right">Source: <a href="http://www.un.org/millenniumgoals/childhealth.shtml">http://www.un.org/millenniumgoals/childhealth.shtml</a></p>


';

$WHAT = 'Google news related to child health and the Millennium Development Goals';

$FEED_URL = 'http://news.google.com/nwshp?output=rss&num=25&q=child%20or%20children%20or%20mortality+%22millennium+development+goals%22';

$SOCIAL_ACTION_QUERY = "child health";

$MDG_ID = 4;

include("generic_mashup.php");
?>