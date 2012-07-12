<?
$headtitle = "User's Manual";
require_once '../_header.php';
?>

<h1>SMAK User Manual</h1>

<em>Version 1.0</em>

<h2>Getting Started</h2>

<p>SMAK is designed as a small, light tool that does an array of utility functions to assist 3D artists.</p>

<h3>Loading a model</h3>

<p class="manualfloatright"><img src="manual-filemenuopen.png" /></p>

<p>To load a model, choose Open from the File menu. SMAK currently supports .obj, Silo .sia, and Collada .dae files. If you associate a file type with SMAK, then it can be opened by double-clicking the file. Files can also be opened by dragging them onto the SMAK icon on your desktop. If changes have been made in an external application, you can use the "Reload" feature at any time to load the model again from the hard drive. As of 1.6, the "Open Into..." feature can open a model into the current scene without closing the current model. SMAK is optimized to load very large models, with 1 million + polygons. Any model with over 10,000 polygons will be automatically made not visible while loading. These models can be made visible again by clicking on the visibility button in the scene tree, but beware as they may cause your rendering performance to decrease drastically.</p>

<h3> Saving a model</h3>

<p><em>Since beta 1.7</em></p>

<p>To save a model, choose "Save..." from the File menu, enter a file name and select a save format. SMAK supports saving files in the .obj, Silo .sia, and Collada .dae formats.</p>

<h3>3D Preview Screen</h3>

<p>After loading a model it should be visible in the 3D preview screen. You can always switch to the 3D screen by pressing the <strong>"3D" button</strong> at the top of the viewing window. This screen allows you to preview your model in a variety of different ways. The camera can be rotated with the <strong>left mouse button</strong>, and can move in and away from the model with the <strong>right mouse button</strong>. If the hardware light is enabled, it can be moved around by holding down the <strong>ctrl</strong> key and dragging the <strong>left mouse button</strong>.</p>

<p class="manualfloatleft"><img src="manual-polygonbuttons.png" /></p>

<p>The <strong>wireframe</strong> button controls the way polygons are rendered. Pressing it will enable wireframe rendering, useful for seeing individual geometry pieces.</p>

<p class="manualfloatright"><img src="manual-renderbuttons.png" /></p>

<p>The rendering buttons control the shading and textures of your meshes. The <strong>lighting toggle button</strong> turns on and off the hardware light. Without the light, everything is rendered fully bright, and with the light, polygons facing away from the light are shaded darker. The <strong>texture toggle button</strong> turns on and off rendering of your model's texture, should it have one. As of beta 1.6 there is a <strong>normal map button</strong> which controls whether or not the normal map is used, if present. The next buttons are the <strong>AO map toggle button</strong> and the <strong>color AO map toggle button</strong>, which enable generating of ambient occlusion maps, these are explained in their own section.</p>

<h3>UV Preview Screen</h3>

<p>Pressing the <strong>"UV" button</strong> at the top of the viewing window will switch to the UV space viewing mode. This allows you to see how each polygon is laid out onto its texture. The UV can be moved around with the <strong>left mouse button</strong> and zoomed in and out with the <strong>right mouse button</strong>. Selecting the <strong>wireframe</strong> button in this mode will toggle an overlay of the triangles in your model on top of the UV.</p>

<h3>Scene Tree</h3>

<p><em>Since beta 1.4</em></p>

<p class="manualfloatleft"><img src="manual-scenetree.png"></p>

<p>Any time a model is loaded, its components can be seen in the Scene Tree. The Scene Tree can be moved anywhere or collapsed by pressing its red collapse button. Each node in the scene can also be collapsed or expanded to view or hide its children. The scene is arranged into categories: Materials, Meshes, and Scenes. All materials from the source file's material library are shown under the "Materials" node, and clicking the <strong>visibility button</strong> can toggle the display of any object using that material on and off. The "Meshes" node holds a library of what meshes are available to be rendered. This mesh library is not what is rendered, but is rather a library of meshes that can be used for rendering by the scene. The "Scenes" node contains a list of child nodes which are what is actually rendered. Each node may contain a mesh instance, which is a reference to an object in the mesh library, complete with a list of materials that the mesh instance uses. The <strong>visibility button</strong> for the mesh instance materials allow each material to be toggled on and off independently for each mesh. As of 1.6, materials also have a <strong>Material Editor button</strong> which brings up the material editor.</p>

<p>Not all file formats come with complete support for the scene tree. While full-featured formats like Collada support the scene tree, most file formats simply store materials and meshes and omit the scene tree. In the case of file formats which do not contain a scene tree, each mesh is assigned its own child node in the scene and a mesh instance is automatically created for it. At the same time, SMAK does not support all of the features that some of the more sophisticated file formats have, so it may load a number of empty scene nodes intended for things like cameras and lights that SMAK handles separately.</p>

<h2>Using The Combo Map Generator</h2>

<p class="manualfloatright"><img src="manual-combopanel.png" /></p>

<em>Since beta 1.6</em>

<p>The "Combo Map Generator" is a special panel that bakes the details from high-resolution meshes onto lower-resolution meshes, suitable for deployment in a realtime 3d rendering engine. The Combo map generator can produce normal maps, ambient occlusion maps, and diffuse maps all in one pass. The high resolution mesh is not required to have UV coordinates or normal data to be used to generate ambient occlusion or normal maps, but must have UV data to bake diffuse maps.</p>

<p><em>Note: During the SMAK beta (up until SMAK beta 1.8) the normal map generation window handled both hi->lo res baking and texture->normal map generation. As of version 1.0 these have been separated into different windows.</em></p>

<p>A normal map is a special map which contains data about the normal (the angle of the surface) at each point on the surface of an object. Realtime 3d rendering engines use this data to modify how light on the surface of an object is rendered, which can give an object the appearace of having much more detail than the polygons alone provide. To generate a normal map, your model must first have either a texture or a high-resolution mesh which topologically matches the low-resolution mesh. This can be done in an external modeling studio, or texture creation software such as Photoshop or the GIMP. Problems can occur with the normal map if polygons are overlapping one another in the UV, so make sure that only one polygon is occupying any of the UV space.</p>

<p>Once your model is set up, the open the "Combo Map Generator" by selecting <strong>"Generate all maps" from the Tools menu</strong>. The "Combo map generator" dialog has a <i>Size</i> selector at the top that specifies the size of the generated output maps. It then has a panel for <i>Low Resolution Meshes</i> and a panel for <i>High Resolution Meshes</i>.</p>

<p>In order to generate your maps from a high resolution mesh, first add your low and high res meshes to each panel. Press the "Add" button and click on the appropriate mesh to add it to the tree. You can also drag and drop a mesh instance from the scene tree. A mesh instance is any node in the "Scenes" category that has the wireframe box icon beside it. To remove a mesh, select it and press the "Remove" button. Then, press the "Generate" button.<p>

<h2>Using The Texture To Normal Map Converter</h2>

<p class="manualfloatleft"><img src="manual-normalpanel.png" /></p>

<p><em>Note: During the SMAK beta (up until SMAK beta 1.8) the normal map generation window handled both hi->lo res baking and texture->normal map generation. As of version 1.0 the
se have been separated into different windows.</em></p>

<p>SMAK can be used to convert a texture to a normal map using the "Normal map generator." To do this, open the Tools menu and select "Generator normal from texture." Then choose the material that you wish to use to generate the normal map by clicking it in the list. You must use a material with an associated texture. Once you select your material, SMAK will begin to pre-calculate the data which will speed up the normal map generation. Once it's complete, you can control the texture generation using the depth sliders. These sliders control how many details from each frequency band are allowed to pass from the texture into the resulting normal map.</p>

<p>The <i>"Overall Depth"</i> slider is a master "volume control" for the input texture. Turning this to 0% will remove the normal map completely. Each frequency depth slider then controls details from an individual frequency band. The <em>"Texture Hi-Freq Depth"</em> slider uses only adjacent texels to produce normal values, <em>"Texture Mid-Freq Depth"</em> can produce bumps up to 10 texels wide, and <em>"Texture Low-Freq Depth"</em> can produce bumps up to 20 texels wide, depending on the input.</p>

<p>Once the normal maps have been generated, SMAK will automatically combine the mesh-generated normal map with the texture-generated normal map into one seamless map, which can be saved to the disk by pressing the <i>Save Map</i> button.</p>

<h2>Generating an Ambient Occlusion Map</h2>

<p class="manualfloatright"><img src="manual-properuv.png" /></p>

<p>In order to generate an ambient occlusion map, your model must first have a proper UV map created for it. This can be done with an external modeling studio. An example UV unwrap is shown at right. Problems can occur with the AO map if polygons are overlapping one another, so make sure that only one polygon is occupying any of the UV space. As of version Beta 1.4, enabling and disabling visibility of materials in the Scene Tree with the <strong>visibility buttons</strong> will affect how they are generated in SMAK. Disabling the rendering of a material will cause the AO generator not to generate AO values for that material. However, the geometry from that material will still occlude other geometry in the scene, as if it were still visible. This is useful for generating different parts of a model separately, but still retaining the occlusion of each part of the model on the other parts. In versions prior to Beta 1.4, problems could also be created by <a href="http://en.wikipedia.org/wiki/Convex_and_concave_polygons">concave polygons</a>, but as of Beta 1.4 this is no longer an issue.</p>

<p class="manualfloatleft"><img src="manual-bleed.png" /></p>

<p>Once you have your model ready to go, the Ambient Occlusion panel can be opened by clicking the <strong>AO button</strong> at the bottom of the window, by selecting <strong>"Generate AO Map" from the Tools menu</strong> or by simply pressing the <strong>'A' key</strong> on your keyboard. Every AO method has two options in common, the <i>Size</i> selector and the <i>Bleed</i> selector. The <i>Size</i> selector chooses what size the resultant AO map texture image should be. In general, larger AO maps take longer to generate, but look better when applied to the model. The <i>Bleed</i> selector determines how much extra space is applied to the outer edges of each polygon after the AO generation is complete. The nearest color is used to pad the AO map in a kind of "flooding" pattern around all of the polygons in UV space.</p>

<p>Version beta 1.4 comes with a slew of new options. Every generator now has a new option, the <i>Crease edges</i> option, which causes the shading algorithm to pretend that all edges of the model are creased, or that all faces of the model are in a separate smoothing group. This causes all of the edges of the model to have sharp transitions in the resulting AO map, and can be handy for working with meshes that have not had smoothing groups set for them.</p>

<h3>Shadow Mapping Method</h3>

<p class="manualfloatright"><img src="manual-aopanel.png" /></p>

<p>Shadow Mapping is the fastest AO generation method. 1024x1024 AO maps can be generated in less than a minute due to hardware acceleration. The graphics accelerator on your computer is used to render an array of lights in a sphere around the object, adding up all of the shadows created by each exposure. The more lights in a scene, the higher quality AO map results. Consequently, while larger sizes of AO map are slightly more expensive to generate, the number of lights in the scene is the main determinant of how long it takes to generate an AO map.</p>

<p>Version beta 1.4 comes with a option. The <i>Ground occlusion</i> feature forces all exposures below a certain angle to be completely black, simulating the effect of the mesh sitting on the ground. This causes the parts of the model which face down to be shaded darker.</p>

<h3>Raytracing Method</h3>

<p>Raytracing is a computing-intensive method of generating AO maps. For each texel of the resulting image, rays are emitted in all directions, to see if there is geometry in that direction. The results of all the rays are averaged for that texel. Raytracing is a very accurate method of AO maps, but its generation is very slow. Making larger maps becomes very intensive. There is one option in this method, <i>Ray Density</i>, which will increase the quality of the generated map at the expense of some additional generating time.</p>

<p>Version beta 1.4 comes with new options. The <i>Ray Falloff</i> option controls how strong the occlusion of distant geometry is. Lower values cause higher falloff rates, meaning that only closeby geometry causes darker areas in the resulting AO map. Higher values allow more distant geometry to occlude. The falloff is exponential, and the value determines the distance at which the falloff is at 50%. It can also be set to "No falloff" which disables falloff entirely. The <i>Randomize rays</i> checkbox causes a slight random variation of each ray, resulting in a more grainy look to the AO map. Lower values of <i>Ray Density</i> will cause the graininess to increase. The <i>Ground occlusion</i> feature forces all exposures below a certain angle to be completely black, simulating the effect of the mesh sitting on the ground. This causes the parts of the model which face down to be shaded darker. Ground occlusion is subject to ray falloff, so if the effects of ground occlusion are not visible in raytrace mode, increasing the ray falloff may help.</p>

<h3>Tri Distance Method</h3>

<p>The Tri Distance method is somewhat faster than raytracing, but less accurate. For every texel in the resulting image, an algorithm is run that looks at the distance to other polygons in the scene and the angle at which that polygon meets its neighbors, to generate a shadow value. This method is the least accurate method, as it will not detect polygons which intersect but do not connect to each other. However it generates smooth, soft looking AO maps that may look good on some models.</p>

<h3>Color AO Method</h3>

<p class="manualfloatleft"><img src="manual-color.png" /></p>

<p>The Color AO method is a special AO method that causes the texture colors of an object to bleed onto nearby surfaces. This is good for helping to light scenes or models with large, colorful surfaces, to help saturate the scene and give it depth. This method requires that a texture has already been made for that object.</p>

<p>Color AO has its own tools panel. To open it, <strong>click the Color AO Panel button</strong> at the bottom of the window, or select <strong>Generate Color AO</strong> from the Tools menu.</p>

<p>The Color AO method renders the scene from every texel of the resulting image, sampling all of the colors in that scene, and then applies averaging and smoothing to the result. This produces a map that is similar to regular AO maps, but reflects the colors of nearby textures more prominently than simple light/dark shading. The result is a map that bleeds bright colors into nearby regions, that can be easily combined with a regular AO map to produce pleasing, saturated shades. When generating Color AO maps, high resolution maps are usually unnecessary, since it combines additively with normal AO maps.</p>

<h3>Best Practices and Tips</h3>

<p>The best options for any particular AO map greatly depends on what kind of model is being generated. Some simple guidelines can be used to ensure the best possible quality output.</p>

<p>&raquo; Large surfaces with sharp angles at their edges should always have those edges creased. Since AO generation uses the normals from the model data, these edges will be "smoothed" over in a way that is usually undesireable. The "Crease edges" option may help if there are no other areas in the scene that require more smooth edges.</p>

<p>&raquo; For internal scenes with inward-facing polygons, the raytracer is best suited. It ray falloff must be set to something lower, to prevent dark result maps.<p>

<p>&raquo; When using the raytracer, larger models tend to look better with higher values of ray falloff.</p>

<p>&raquo; The "Randomize rays" feature can result in gritty-looking maps, and can be used to great effect to create a dirty look. It also serves to ameliorate the problem of lines appearing in an AO map next to walls and poles due to ray inaccuracies. Lower values of ray density will cause much rougher looking result maps, which higher values and higher resolutions reducing the gritty look.</p>

<p>&raquo; Ground occlusion is best used for objects which will always be situated on the ground, or over dark bottomless pits.</p>

<h2>"SMAK a Batch" Processing</h2>

<em>Since beta 1.4</em>

<p>SMAK allows for the execution of its functions on the command line. This allows for automating of tasks and greater control over parameters. The same binary that is used for the graphical user interface version of SMAK is also used for the command line version, <span class='code'>smak.exe</span> which can be found in the installation directory. This defaults to "C:\Program Files\SMAK" on a standard Windows machine. To run SMAK on the command line, it must be run in its installation directory, so that its current working directory is the same directory where it was installed.</p>

<h3>Ambient Occlusion Generation Options</h3>

<em>Note: A license of SMAK is required to generate AO maps through batch processing. Without one, your output maps will be downsampled to 128x128.</em>

<p>The arguments for generating an AO map are:</p>

<p><span class="code">C:\Program Files\SMAK\&gt;smak.exe &lt;input-file&gt; --command ao [--method &lt;shadowmap|raytrace|tridistance|color&gt;] [--output &lt;filename&gt;] [--size &lt;64-2048&gt;] [--bleed &lt;0-10&gt;] [--lights &lt;500-3000&gt;] [--samples &lt;5-25&gt;] [--falloff &lt;#&gt;] [--randomize] [--crease] [--groundocclusion]</span></p>

<p>[Square brackets] mean an optional parameter and &lt;Angle brackets&gt; mean a required parameter that needs to be replaced with the proper value. Explanations of all of the parameters is below. Full descriptions of what they do can be found in the section "Generating an Ambient Occlusion Map" in this manual.</p>

<p><span class="code">&lt;input-file&gt;</span> specifies the file name of the file that SMAK should operate on. Must be either .obj .sia or .dae</p>

<p><span class="code">--command</span> specifies the job that SMAK should be doing. Currently the only option is "ao" to generate ambient occlusion maps.</p>

<p><span class="code">--method</span> specifies the method by which the AO generation will occur. The default is "shadowmap"</p>

<p><span class="code">--output</span> specifies the file name of the output image. Must be either .png .jpg .bmp .tga or .psd</p>

<p><span class="code">--size</span> specifies the size of the output image file. Larger maps take longer to generate. Values from 64 to 2048 are allowed. The default is 1024.</p>

<p><span class="code">--bleed</span> specifies the about of bleed the result AO map should be given. Values from 0 to 10 are allowed. The default is 1.</p>

<p><span class="code">--lights</span> specifies the number of lights that the shadow map method should use. Values from 500 to 3000 are allowed. This parameter only has an effect with the "shadowmap" generator. The default is 3000.</p>

<p><span class="code">--samples</span> specifies the number of samples that the raytrace method should use. Values from 5 to 25 are allowed. This parameter only has an effect with the "raytrace" generator. The default is 20.</p>

<p><span class="code">--falloff</span> specifies the amount of ray falloff that the raytrace method should use. Any positive value above .0001 is allowed, and to disable falloff use "none". This parameter only has an effect with the "raytrace" generator. The default is 1.</p>

<p><span class="code">--randomize</span> instructs the raytracer to add random variations to the rays. This parameter only has an effect with the "raytrace" generator.</p>

<p><span class="code">--crease</span> instructs the AO generator to pretend all edges are creased.</p>

<p><span class="code">--groundocclusion</span> instructs the AO generator to pretend a ground exists below the object during AO generation. This parameter only has an effect with the "raytrace" and "shadowmap" generators.</p>

<p>Examples follow:</p>

<p><span class="code">C:\Program Files\SMAK\&gt;smak.exe model.obj --command ao --method shadowmap --output model-ao.png --size 512</span></p>

<p><span class="code">C:\Program Files\SMAK\&gt;smak.exe model.dae --command ao --method raytrace --output model-ao.jpg --size 1024 --samples 25 --falloff 10 --randomize --crease</span></p>

<?
require_once '../_footer.php';
?>
