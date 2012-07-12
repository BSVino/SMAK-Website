<?
if (strncmp($_SERVER['HTTP_HOST'], 'www.', 4) == 0)
{
	header('Location: http://getsmak.net' . $_SERVER['REQUEST_URI']);
	die;
}

$prefix = "/";

$shouldusecontent = false;
if (!isset($usecontent))
	$shouldusecontent = true;
else
	$shouldusecontent = $usecontent;

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>SMAK<? if (isset($headtitle)) echo " - $headtitle"; ?></title>
	<link rel="stylesheet" href="<? echo $prefix; ?>_style.css" type="text/css">
	<meta name="description" content="SMAK is a 3d modeling utility that performs a wide array of tasks such as ambient occlusion generation and normal map generation.">
	<? echo $headinclude; ?>
</head>
<body>
<div id='body'>
<div id='header'>
<a href='/'><img id='smaklogo' src='<? echo $prefix; ?>smak-header.png' /></a>
<div id='nav'><a href="<? echo $prefix; ?>">Home</a> | <a href="<? echo $prefix; ?>manual/">Manual</a> | <a href="<? echo $prefix; ?>faq.php">FAQ</a> | <a href="<? echo $prefix; ?>download.php">Download</a> | <a href="<? echo $prefix; ?>develop.php">Develop</a></div>
</div>

<? if (strcmp($_SERVER['REQUEST_URI'], "/") == 0) {?><div id='description'><div>SMAK is a simple tool for 3D artists that can preview models and render diffuse, ambient occlusion, normal and cavity maps.</div></div><? }?>

<? if ($shouldusecontent) { ?>
<div id='content'>
<? } ?>
