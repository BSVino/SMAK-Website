<?
$headtitle = "Release Notes";

require_once '_header.php';
?>

<h1>Release Notes</h1>

<h2>2.0.0</h2>

<p>July 11, 2012</p>

Improvements:
<ul>
<li>Significant speed improvements for rendering</li>
<li>SMAK can now load models in about 30 different formats using <a href="http://assimp.sourceforge.net">AssImp</a>, for a full list see their <a href="http://assimp.sourceforge.net/main_features_formats.html">import formats page</a></li>
<li>SMAK can now generate cavity maps from a model's normal map</li>
<li>The material screen now has proper color pickers for the material properties</li>
</ul>

Fixes:
<ul>
<li>Lots of bugs, I lost track of how many</li>
</ul>

<h2>1.0.1</h2>

<p>January 10, 2010</p>

Fixes:

<ul>
<li>Fixed an incorrect dependency problem on MSVCR100D.dll</li>
</ul>

<h2>1.0</h2>

<p>January 09, 2010</p>

Improvements:
<ul>
<li>Added a new "Generate all maps" tool that can bake Diffuse, AO, and Normal maps all in one pass</li>
<li>The texture to normal map converter has its own window now, generates faster, and has two new option sliders</li>
<li>A slew of minor fixes and improvements</li>
</ul>

<h2>Beta 1.7</h2>

<p>November 26, 2010</p>

Improvements:
<ul>
<li>Significant speed improvements for loading large models, 10-100MB with up to 2 million polys</li>
<li>Significant speed improvements for generating AO and normal maps on large models</li>
<li>Speed improvements in font and scene rendering</li>
<li>SMAK can now save models in the .obj .sia and .dae formats</li>
</ul>

Fixes:
<ul>
<li>Fixed a crash in Collada loading if the file had no materials</li>
</ul>

<h2>Beta 1.6</h2>

<p>May 09, 2010</p>

Improvements:
<ul>
<li>Added parallelized normal map generation up to 4096x4096 using a hi-res model and/or diffuse texture</li>
<li>Added a material properties window that can modify material properties and textures</li>
<li>Support for rendering normal maps on models</li>
<li>Improved shaders for model rendering</li>
<li>Added minimize buttons to help keep window panes out of the way</li>
<li>Mousewheel zooming</li>
<li>"Open Into..." allows new model files to be loaded into the current scene</li>
<li>Better material loading from .obj files</li>
<li>Some usability improvements</li>
<li>Parallelizer speed improvements</li>
</ul>

<h2>Beta 1.5</h2>

<p>February 24, 2010</p>

Fixes:
<ul>
<li>A fix to the saving feature which would sometimes save pure white texels as pure black.</li>
</ul>

<h2>Beta 1.4</h2>

<p>February 20, 2010</p>

Improvements:
<ul>
<li>Support for loading Collada files</li>
<li>Raytracing is parallelized to take advantage of multiple processor cores</li>
<li>Scene tree allows for control over materials while generating AO's</li>
<li>"SMAK a Batch" processing allows AO generation from the command line</li>
<li>New AO generation options:</li>
<ul>
	<li>Ray falloff</li>
	<li>Randomize ray direction</li>
	<li>Lower ray counts available</li>
	<li>Ground occlusion</li>
	<li>Crease edges</li>
</ul>
</ul>

Fixes:
<ul>
<li>Proper handling of concave polygons</li>
<li>An assortment of crashes fixed</li>
<li>Usability improvements</li>
</ul>

<h2>Beta 1.3</h2>

<p>February 6, 2010</p>

Fixes:
<ul>
<li>Fixed loading of .obj files without UV's</li>
<li>Fixed problems with AO generation with some video cards on Windows XP</li>
</ul>

<h2>Beta 1.2</h2>

<p>February 2, 2010</p>

Improvements:
<ul>
<li>A progress bar shows activity during model load and map generation</li>
<li>AO maps can now be rendered at 2048x2048</li>
<li>UV mode now has its own button for whether or not to show the UV wireframe</li>
<li>Switching to 3D mode while generating now shows the user the AO applied to the model as it generates</li>
<li>Loading models is now faster, large models take less time to load</li>
<li>Saving AO maps to PNG is now supported</li>
</ul>

Fixes:
<ul>
<li>Fixed a crash if the user turns off AO maps while generating one</li>
<li>Fixed a problem where changing the viewport size or going to 3D view during AO map generation would make the AO map completely white</li>
<li>Fixed the odd camera angle if the user switched to 3d mode while generating an AO map</li>
</ul>


<h2>Beta 1.1</h2>

<p>January 30, 2010</p>

Fixes:
<ul>
<li>Fixed loading some .obj files with negative vertex indices</li>
<li>Improved smoothing group support for .obj files in some cases</li>
</ul>


<h2>Beta 1</h2>

<p>January 29, 2010</p>

Features:
<ul>
<li>Load and preview .obj and .sia models with textures</li>
<li>Generate ambient occlusion maps up to 1024x1024 with hardware accelerated shadow mapping</li>
</ul>

<?
require_once '_footer.php';
?>
