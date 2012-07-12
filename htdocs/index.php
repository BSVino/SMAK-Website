<?
$headtitle = "Super Model Army Knife";
$headinclude = '
<script type="text/javascript" src="/lightbox/js/prototype.js"></script>
<script type="text/javascript" src="/lightbox/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="/lightbox/js/lightbox.js"></script>
<link rel="stylesheet" href="/lightbox/css/lightbox.css" type="text/css" media="screen" />
';

$usecontent = false;

require_once '_header.php';
?>

<!--<div id='frontpromotion'><div>SMAK is leaving beta within a week. When it does the price will go up.<br />Get the beta 50% off, <em>while supplies last*</em>!</div><div style="font-size:xx-small; text-align: right; margin-right: 20px;">* Supplies are infinite</div></div>-->

<div id='frontfeatures'>

	<div class="feature">
		<img class="featureicon" src='icon-accelerated.png' />
		<img class="featureheader" src="header-accelerated.png" alt="Accelerated Multi-Baking!" /><br />
		<div>Bake your hi-res million-quad models down to a game-resolution model with diffuse, normal, and ambient occlusion maps in minutes!</div>
	</div>

	<div class="feature">
		<img class="featureicon" src='icon-realtime.png' />
		<img class="featureheader" src="header-realtime.png" alt="Real-Time Model Preview!" /><br />
		See what your maps and models look like in real time with the 3D/UV render preview modes and integrated scene tree.
	</div>

	<div class="feature">
		<img class="featureicon" src='icon-speed.jpg' />
		<img class="featureheader" src="header-superfast.png" alt="Super Fast Parallelized Optimized Speed!" /><br />
		We trained a team of multi-dimensional monkey programmers to randomly "smak" the code until it ran excessively fast, and it only took 1,265 years!
	</div>

	<div class="feature">
		<img class="featureicon" src='icon-easy.png' />
		<img class="featureheader" src="header-simple.png" alt="Simple, Fast, and East!" /><br />
		Your model can have diffuse normal and AO maps with only two drags and a click. No more boring five part tutorial videos half an hour long!
	</div>

	<div id='fronttwitterfeed'>
		<img src="header-twitter.png" alt="Follow the Developer on Twitter!" />
		<ul id="twitter_update_list"></ul>
		<a href="http://twitter.com/VinoBS" id="twitter-link" style="display:block;text-align:right;">Follow on Twitter</a>
	</div>

</div>

<img id='frontbuypanel' usemap='#buypanelmap' src="smak-dlpanel.png" />
<map name='buypanelmap'>
	<area shape='rect' coords='100,232,210,267' href='http://getsmak.net/files/smak-install-2.0.0.exe' />
</map>

<br clear="right" />

<div id='frontvideoembed'>
<iframe title="YouTube video player" class="youtube-player" type="text/html" width="312" height="264" src="http://www.youtube.com/embed/yw5Mt6mOmM4?rel=0" frameborder="0"></iframe>
</div>

<br clear="all" />

<?
require_once '_footer.php';

// Put this javascript shit at the end because IE balks at it ("Operation aborted") and we don't want to turn our IE users away.
?>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/VinoBS.json?callback=twitterCallback2&amp;count=3"></script>
