<?php

$TITLE_TEXT = "end poverty and hunger";

$HOOK = '
<p class="hook">The <span class="caps">MDG</span> target of cutting in half the proportion of people in the developing world living on less than $1 a day by 2015 <strong>remains within reach for the world as a whole</strong>. However, this achievement will be largely the result of extraordinary success in Asia, mostly East Asia. In contrast, <strong>little progress has been made in reducing extreme poverty in sub-Saharan Africa.</strong></p>

<p class="hook">Even though the proportion of people worldwide suffering from malnutrition and hunger has fallen since the early 1990s, the number of people lacking access to food has <strong>risen</strong>.</p>

<p class="quiet right">Source: <a href="http://www.un.org/millenniumgoals/poverty.shtml">http://www.un.org/millenniumgoals/poverty.shtml</a></p>
';

$WHAT = 'the change.org sustainable food RSS feed';


$FEED_URL = 'http://food.change.org/blog/rss';

$SOCIAL_ACTION_QUERY = "poverty or hunger";

$MDG_ID = 1;

include("generic_mashup.php");
?>