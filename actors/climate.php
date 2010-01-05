<?php

$TITLE_TEXT = "combat global warming";

$HOOK = '
<p class="hook">The climate is changing, and we&#8217;re holding the bag. Simply put, nearly every action we take on the average day, from cooking eggs for breakfast, to watching &#8220;Project Runway&#8221; after dinner, relies on electricity created by burning carbon-rich coal or oil. Burning these fossil fuels releases heat-trapping greenhouse gases into the atmosphere, particularly carbon dioxide. Because of all this frenetic burning of fuel that&#8217;s taken place since the dawn of the Industrial Revolution, the amount of carbon dioxide in the atmosphere has increased to the point that the planet&#8217;s overall surface temperature is rising. <em>Needless to say, this is disrupting the delicate conditions that support reasonably predictable conditions for life on Earth.</em></p>

<p class="quiet right">Source: <a href="http://globalwarming.change.org/about/primer">http://globalwarming.change.org/about/primer</a></p>

';

$WHAT = 'the change.org climate change feed';

$FEED_URL = 'http://globalwarming.change.org/blog/rss';

$SOCIAL_ACTION_QUERY = "global warming or climate change";

$MDG_ID = 7;

include("generic_mashup.php");
?>