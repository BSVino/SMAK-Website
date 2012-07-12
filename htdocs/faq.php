<?
$headtitle = "Frequently Asked Questions";
require_once '_header.php';

$questions = array(
	array( 'nouv', "All I get is a big jumble or a blank result, it doesn't look anything like an ambient occlusion map!", "Before you can generate an ambient occlusion map, you need to generate a UV unwrapped map for your model." ),
	array( 'overlapconvex', "Some of the portions of my generated map are distorted, or the wrong color.", "Check and make sure that your UV unwrap has no overlapping polygons. Concave polygons were handled poorly by SMAK prior to version 1.4. If your model uses multiple texture maps, disabling all but one in the scene tree and generating the maps one at a time can solve this." ),
	array( 'bright', "My model is very bright. What gives?", "Some hardware and some early versions of SMAK may produce bright-looking washed out shading. This can sometimes be resolved by updating SMAK, by providing material data for your meshes, or by updating hardware drivers." ),
	array( 'smooth', "Where are my smoothing groups?", "Smoothing groups were not loaded from .obj files until beta 1.1." ),
	array( '4096', "Can I generate 4096x4096 ambient occlusion textures?", "This is not yet supported in SMAK, we are considering including it in a future version. If you want to see it sooner, <a href='mailto:support@getsmak.net'>tell us</a>!" ),
	array( 'twotex', "My model has multiple uv maps and the AO generation looks like a messed up combination of the maps.", "You can disable materials for generation in the scene tree and generate each material independently." ),
	array( 'winxp', "I get strange fuzzies and interference while using the Shadow Mapping method.", "Some Windows XP installations experience this problem. We're looking for a solution. In the meantime, the raytracing AO generation still works fine, and nobody has reported the problem on Windows Vista or 7." ),
	array( 'multobj', "Can I bake multiple objects independently in the same scene?", "Yes you can. Just disable the objects you don't want to generate for in the scene tree. These objects will still affect the occlusion of visible objects, but no maps will be generated for them." ),
	array( 'registered', "I bought this software proper and now it's open source! What gives?", "If this bothers you I can only apologize. I want people to enjoy my software and I'm no longer as concerned about making money from it. You'll still get the same great support that you did before." ),
	array( 'donate', "I freaking love SMAK! Shut up and take my money!", "Awesome! It's enough for me if you <a href='mailto:jorge@lunarworkshop.com'>send me a note</a> about how much you love SMAK. It makes me feel all warm and fuzzy inside. But if you really want to send me money, the buy page is still up: <a href='https://secure.bmtmicro.com/servlets/Orders.ShoppingCart?CID=6322/1&CLR=0&PRODUCTID=63220001'>you can buy a copy here</a>. You won't get anything but my gratitude for doing so, but you'll help put food in my dog's bowl." ),
	array( 'other', "I have a question that's not answered here. Where can I find a friendly person who I can talk to directly and who will answer my question honestly without giving me any BS?", "<a href='mailto:support@getsmak.net'>The author answers support inquiries directly, usually within a couple hours.</a>" ),
);

?>

<h1>Frequently Asked Questions</h1>

<ol>
<?
foreach ($questions as $i)
	echo "<li><a href='#" . $i[0] . "'>" . $i[1] . "</a></li>";
?>
</ol>

<hr />

<?
foreach ($questions as $i)
	echo "<a name='" . $i[0] . "'></a><p><font style='font-size:large'><strong>" . $i[1] . "</strong></font></p><p>" . $i[2] . "</p>";
?>

<?
require_once '_footer.php';
?>
