<?php
include('session.php');
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array Visualisation</title>
    <meta name="description" content="Array Visualisation Tool">
	<script src="jquery-1.12.0.min.js"></script>
	<!--<script src="https://code.jquery.com/jquery-git.js"></script>-->
<script src="dest/concatCodeVis.js"></script>

< <script src="saveSvgAsPng.js"></script>
<!--<link href="https://code.jquery.com/ui/jquery-ui-git.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/ui/jquery-ui-git.js"></script>-->
    <script src="jquery.ui.touch-punch.js"></script>
    <script src="jquery.panzoom.min.js"></script>
  <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap-theme.min.css" >
  	<link rel="stylesheet" href="jquery-ui-1.12.0/jquery-ui.min.css">


	  <script src="CodeMirror/lib/codemirror.js"></script>
      <link rel="stylesheet" href="CodeMirror/lib/codemirror.css">
      <script src="CodeMirror/mode/javascript/javascript.js"></script>
      <script src="CodeMirror/mode/clike/clike.js"></script>
      <script src="CodeMirror/mode/swift/swift.js"></script>
      <script src="CodeMirror/mode/python/python.js"></script>
      <script src="CodeMirror/addon/selection/active-line.js"></script>
      <script src="CodeMirror/addon/edit/matchbrackets.js"></script>
      <script src="CodeMirror/addon/edit/closebrackets.js"></script>
      <link rel="stylesheet" href="CodeMirror/theme/3024-day.css">
 	  <link rel="stylesheet" href="CodeMirror/theme/3024-night.css">
    <link rel="stylesheet" href="CodeMirror/theme/abcdef.css">
    <link rel="stylesheet" href="CodeMirror/theme/ambiance.css">
    <link rel="stylesheet" href="CodeMirror/theme/base16-dark.css">
    <link rel="stylesheet" href="CodeMirror/theme/bespin.css">
    <link rel="stylesheet" href="CodeMirror/theme/base16-light.css">
    <link rel="stylesheet" href="CodeMirror/theme/blackboard.css">
    <link rel="stylesheet" href="CodeMirror/theme/cobalt.css">
    <link rel="stylesheet" href="CodeMirror/theme/colorforth.css">
    <link rel="stylesheet" href="CodeMirror/theme/dracula.css">
    <link rel="stylesheet" href="CodeMirror/theme/eclipse.css">
    <link rel="stylesheet" href="CodeMirror/theme/elegant.css">
    <link rel="stylesheet" href="CodeMirror/theme/erlang-dark.css">
    <link rel="stylesheet" href="CodeMirror/theme/hopscotch.css">
    <link rel="stylesheet" href="CodeMirror/theme/icecoder.css">
    <link rel="stylesheet" href="CodeMirror/theme/isotope.css">
    <link rel="stylesheet" href="CodeMirror/theme/lesser-dark.css">
    <link rel="stylesheet" href="CodeMirror/theme/liquibyte.css">
    <link rel="stylesheet" href="CodeMirror/theme/material.css">
    <link rel="stylesheet" href="CodeMirror/theme/mbo.css">
    <link rel="stylesheet" href="CodeMirror/theme/mdn-like.css">
    <link rel="stylesheet" href="CodeMirror/theme/midnight.css">
    <link rel="stylesheet" href="CodeMirror/theme/monokai.css">
    <link rel="stylesheet" href="CodeMirror/theme/neat.css">
    <link rel="stylesheet" href="CodeMirror/theme/neo.css">
    <link rel="stylesheet" href="CodeMirror/theme/night.css">
    <link rel="stylesheet" href="CodeMirror/theme/paraiso-dark.css">
    <link rel="stylesheet" href="CodeMirror/theme/paraiso-light.css">
    <link rel="stylesheet" href="CodeMirror/theme/pastel-on-dark.css">
    <link rel="stylesheet" href="CodeMirror/theme/railscasts.css">
    <link rel="stylesheet" href="CodeMirror/theme/rubyblue.css">
    <link rel="stylesheet" href="CodeMirror/theme/seti.css">
    <link rel="stylesheet" href="CodeMirror/theme/solarized.css">
    <link rel="stylesheet" href="CodeMirror/theme/the-matrix.css">
    <link rel="stylesheet" href="CodeMirror/theme/tomorrow-night-bright.css">
    <link rel="stylesheet" href="CodeMirror/theme/tomorrow-night-eighties.css">
    <link rel="stylesheet" href="CodeMirror/theme/ttcn.css">
    <link rel="stylesheet" href="CodeMirror/theme/twilight.css">
    <link rel="stylesheet" href="CodeMirror/theme/vibrant-ink.css">
    <link rel="stylesheet" href="CodeMirror/theme/xq-dark.css">
    <link rel="stylesheet" href="CodeMirror/theme/xq-light.css">
    <link rel="stylesheet" href="CodeMirror/theme/yeti.css">
    <link rel="stylesheet" href="CodeMirror/theme/zenburn.css">

    <!--<link rel="stylesheet" href="slide-in-panel/css/reset.css">
    <link rel="stylesheet" href="slide-in-panel/css/style.css">-->
     <script src="jquery-ui-1.12.0/jquery-ui.min.js"></script>
<style>

/* ---- Now styles for the site ---- */

body {
	padding-top: 70px;
	padding-bottom: 70px;
	overflow:scroll;
	font-family: 'Open Sans', sans-serif;
	height: 800px;
	font-weight: 200;
	font-size: 16px;
}

h1 {
	font-family: 'Open Sans', sans-serif;
    font-weight: 300;
	text-align: center;
	margin-top: 30px;
}

h2 {
	font-family: 'Open Sans', sans-serif;
    font-weight: 300;
	text-align: center;
}

#graph {
	/*position: absolute;
    left: 630px;
    top: 167px;*/
	border: solid hsla(24, 20%, 50%, 1) 1px;
	height: 710px;
	width: 655px;
	overflow: scroll;
	background-color: #f5f2f0;
	z-index: 1;
}

#svgContainer {
	/*position: absolute;
	left: 0; 
	top: 0; */
	height: 673px;
	width: 653px;
	overflow: scroll;
	z-index: 1;
	background-color: #f5f2f0;
}
/*#saveSVG {
	position: relative;
	top: 674px;
	left: 4px;
}*/
.buttons {
	/*position: relative;
	top: 679px;*/
}

#svgOne {
	background-color: #f9f6f4;
	/*position: absolute;
	left: 0; 
	top: 0;*/ 
	z-index: 1;
	overflow: scroll;
}

#sourceCode {
	/*position: static;
	top: 18px;
	left: -40px;*/
	min-width: 580px; 
	border: solid hsla(24, 20%, 50%, 1) 1px; /*solid rgb(255,0,255) 1px;*/
	height: 710px;
	overflow: scroll;
	background-color: #f5f2f0;
	font-size: 14px;
	z-index: 1;
}

table {
	margin-left: auto;
	margin-right: auto;
	min-width: 1241;
	border-spacing: 2px;
	max-width: 90%;
}

td { 
    padding: 2px;
}

/*textarea#codeOriginal {
	width: 565px;
	height: 450px;
	border: none;
	padding: 5px;
	font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
	font-size: 16px;
	color: purple;
    direction: ltr;
    text-align: left;
    white-space: pre;
    word-spacing: normal;
    word-break: normal;
    word-wrap: normal;
    line-height: 1.5;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
	-moz-hyphens: none;
}*/

/*#originalCode {
	position: absolute;
	top: 108px;
	width: 580px; 
	border: solid hsla(24, 20%, 50%, 1) 1px; /*solid rgb(255,0,255) 1px;
	height: 560px;
	overflow: scroll;
	background-color: #fff;
}
*/
.hidden {
	visibility: hidden;
}
/*
#originalCode code {
	color: black;
    text-shadow: 0 1px white;
    font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
    direction: ltr;
    text-align: left;
    white-space: pre;
    word-spacing: normal;
    word-break: normal;
    word-wrap: normal;
    line-height: 1.5;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
	-moz-hyphens: none;
}*/

#console {
	position: relative;
	top: -534px;
	width: 1190px; 
	border: solid hsla(24, 20%, 50%, 1) 1px;
	height: 150px;
	overflow: scroll;
}

g:hover polyline, 
g:hover line, 
g:focus polyline, 
g:focus line,
g.hovered line,
g.hovered polyline {
	fill: none;
	stroke-width: 2;
	stroke: black;
}

g.hovered g text, 
g.hovered text {
	font-weight: bold;
}

g:hover polygon, 
g:hover rect, 
g:hover ellipse, 
g:focus polygon, 
g:focus rect, 
g:focus ellipse,
g.hovered polygon,
g.hovered rect,
g.hovered ellipse {
	fill: hsla(24, 20%, 50%,.3);
	stroke: black;
	stroke-width: 2;
}

g.true polygon {
	fill: rgba(0, 255, 0 ,0.3);
}

g.false polygon {
	fill: rgba(255, 0, 0 ,0.3);
}

g:hover polygon.expansion,
g:focus polygon.expansion,
g.hovered polygon.expansion {
	fill: hsla(24, 20%, 50%,.2);
	stroke: grey;
	stroke-width: 0;
	shape-rendering: crispEdges;
}
#instructions {
	display: none;
}

#controlPanel {
	border: solid hsla(24, 20%, 50%, 1) 1px;
	z-index: 10;
	width: 200px;
	position: fixed;
	top: 150px;
	right: 100px;
	background: hsla(24, 20%, 50%,.3);
}

.running {
	color: red;
}

#controlPanel label, 
#controlPanel input { 
	display: table-cell; 
}

#controlPanel form { 
	display: table;
	padding: 10px;
}

#controlPanel p {
	display: table-row;
}

.ui-button {
	font-size: 14px;
}

.errorMessage {
	padding: 10px;
}

.errorMessage::before {
	content: url(images/errorIcon2.png);
	vertical-align: sub;
}

.hidden {
	display: none;
}
#codeStatus {
	font-size: 14px;
	/*position: absolute;
	right: 0px;*/
	vertical-align: middle;
    text-align: center;
	display: inline-block;
	margin-top: 5px;
	margin-right: 5px;
	color: #454545;
	z-index: 1;
}
.overflow {
	height: 200px;
}
label { 
	display: inline-block; 
}
#selectTheme { 
	width: 100px; 
}

.CodeMirror {
  height: 634px; /* 649px would be good in Chrome but not Firefox */
  z-index: 1;
}

header {
	border-top: 4px solid #ff0099;
	width: 100%;
}
.layout-right-content {
	width: 100%;
}

nav.navbar-arrayViz {
	border-top: 4px solid #ff0099;
}
pre code {
	font-size: 16px;
}

.dropdown-menu>.active>a, 
.dropdown-menu>.active>a:focus, 
.dropdown-menu>.active>a:hover {
	background-image: none;
	background-color: #ff0099;
}

nav.no-margin-bottom {
	margin-bottom: 0;
	border-radius: 0;
}

#slider {
	width: auto;
	display: inline;
}
#files {
	display: inline;
}
.left {
    min-width: 580px;
    float: left;
	margin-left: auto; 
	margin-right: auto;
}
.right {
	min-width: 655px;
    float: right;
	margin-left: auto; 
	margin-right: auto;
}

</style>
</head>

<body>
 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-arrayViz" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/westminster-logo.png" width="65%"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lessons <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="Lessons/ifelse.html">if else</a></li>
                <li><a href="Lessons/for.html">for loop</a></li>
              	<li><a href="Lessons/while.html">while loop</a></li>
              	<li class="disabled"><a href="Lessons/dowhile.html">do while loop</a></li>
              	<li class="disabled"><a href="Lessons/switch.html">switch case</a></li>
              	<li class="disabled"><a href="Lessons/functions.html">function calls</a></li>
              	<li class="disabled"><a href="Lessons/arrays.html">arrays</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Videos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="disabled"><a href="Videos/ifelse.html">if else</a></li>
                <li class="disabled"><a href="Videos/for.html">for loop</a></li>
              	<li class="disabled"><a href="Videos/while.html">while loop</a></li>
              	<li class="disabled"><a href="Videos/dowhile.html">do while loop</a></li>
              	<li class="disabled"><a href="Videos/switch.html">switch case</a></li>
              	<li class="disabled"><a href="Videos/functions.html">function calls</a></li>
              	<li class="disabled"><a href="Videos/arrays.html">arrays</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Code Visualiser <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="codeVisualiser.php">if else</a></li>
              <li class="disabled"><a href="#">for loop</a></li>
              <li class="disabled"><a href="#">while loop</a></li>
              <li class="disabled"><a href="#">do while loop</a></li>
              <li class="disabled"><a href="#">switch case</a></li>
              <li class="disabled"><a href="#">function calls</a></li>
              <li class="disabled"><a href="#">arrays</a></li>
              </ul>
            </li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Array Visualiser <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="active arrayViz"><a href="#">Creation</a></li>
             	<li class="disabled"><a href="#"></a></li>
              	<li class="disabled"><a href="#"></a></li>
              	<li class="disabled"><a href="#">Push</a></li>
              	<li class="disabled"><a href="#">Pop</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="About/about.html">About this application</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  
  <main><h1>Array Visualiser</h1>
  
  <table><tr><td>
<div id="sourceCode" class="left">

  	<div id="language-group">
        <input type="radio" id="javascript" name="language"><label for="javascript">JavaScript</label>
        <input type="radio" id="clike" name="language"><label for="clike">C-like</label>
        <input type="radio" id="swift" name="language"><label for="swift">Swift</label>
        <input type="radio" id="python" name="language" disabled><label for="python">Python</label>
  	</div>
    <label for="selectTheme"></label><select id="selectTheme">
    <option value="default">default</option>
    <option value="3024-day">3024-day</option>
    <option value="3024-night">3024-night</option>
    <option value="abcdef" selected>abcdef</option>
    <option value="ambiance">ambiance</option>
    <option value="base16-dark">base16-dark</option>
    <option value="base16-light">base16-light</option>
    <option value="bespin">bespin</option>
    <option value="blackboard">blackboard</option>
    <option value="cobalt">cobalt</option>
    <option value="colorforth">colorforth</option>
    <option value="dracula">dracula</option>
    <option value="eclipse">eclipse</option>
    <option value="elegant">elegant</option>
    <option value="erlang-dark">erlang-dark</option>
    <option value="hopscotch">hopscotch</option>
    <option value="icecoder">icecoder</option>
    <option value="isotope">isotope</option>
    <option value="lesser-dark">lesser-dark</option>
    <option value="liquibyte">liquibyte</option>
    <option value="material">material</option>
    <option value="mbo">mbo</option>
    <option value="mdn-like">mdn-like</option>
    <option value="midnight">midnight</option>
    <option value="monokai">monokai</option>
    <option value="neat">neat</option>
    <option value="neo">neo</option>
    <option value="night">night</option>
    <option value="paraiso-dark">paraiso-dark</option>
    <option value="paraiso-light">paraiso-light</option>
    <option value="pastel-on-dark">pastel-on-dark</option>
    <option value="railscasts">railscasts</option>
    <option value="rubyblue">rubyblue</option>
    <option value="seti">seti</option>
    <option value="solarized dark">solarized dark</option>
    <option value="solarized light">solarized light</option>
    <option value="the-matrix">the-matrix</option>
    <option value="tomorrow-night-bright">tomorrow-night-bright</option>
    <option value="tomorrow-night-eighties">tomorrow-night-eighties</option>
    <option value="ttcn">ttcn</option>
    <option value="twilight">twilight</option>
    <option value="vibrant-ink">vibrant-ink</option>
    <option value="xq-dark">xq-dark</option>
    <option value="xq-light">xq-light</option>
    <option value="yeti">yeti</option>
    <option value="zenburn">zenburn</option>
</select>
    <div id="codeStatus"></div>
	
<textarea id="codeSource">/* Let's create an array in JavaScript:*/
var myArray = new Array();
myArray[1] = 1;
myArray[3] = 3;

/* Now, let's view this array: */
drawArray( myArray );

/* Let's push a new value into the array: */
myArray.push(99);
/* and see what happened to the array: */
drawArray( myArray );
</textarea>


<button id="saveCode" class="uibutton">Save</button>
<button id="downloadCode" class="uibutton">Download code</button>
<input type="file" id="files" class="uibutton"></input>
<button id="uploadCode" class="uibutton">Upload</button>

<!--<button id="cancelCode">Cancel</button>-->

</div>
</td><td>
   <div id="graph"><div id="svgContainer" class="panzoom-parent right"><svg id="svgOne" class="panzoom">
  Sorry, your browser does not support inline SVG.
</svg>
</div>

        
      <div class="buttons">
        <button class="zoom-in uibutton">Zoom In</button>
        <button class="zoom-out uibutton">Zoom Out</button>
        <input type="range" class="zoom-range uibutton" id="slider">
        <button class="reset uibutton">Reset</button>
        <button id="saveSVG" class="uibutton">Save FlowChart</button>
      </div>
</div>
</td></tr></table>
</main>
<nav class="navbar navbar-default no-margin-bottom">
<div class="container">
<p class="navbar-text navbar-right">Copyright 2016-2017<a href="https://www.westminster.ac.uk" class="navbar-link">University of Westminster</a></p>
</div>
</nav>
  <script src="javascript/array/drawArray.js"></script>
  
  <script> 
  /*var myArray = new Array();
  myArray[1] = 2;
  myArray[3] = 10;
  myArray[13] = 10;
  drawArray( myArray, "myArray" );*/
  </script>
  <!--<script src="testsvg.js"></script>-->
<!--
<div id="console"><br>
<!--<button id="execute">Step</button>
<button id="executeFull">Run</button>
<br>

<div id="onPage">
On page fields: <br><br>
Age: <span id="ageGiven"></span>Entry:<span id="entryResults"></span></div>

</div>-->
<!--<div id="controlPanel"><h2 class="controlPanel">Control panel</h2>
<form>
	<p>
		<label for="inputAge">Age:</label><span id="inputAge"></span>
	</p><p>
    	<label for="inputEntry">Entry:</label><span id="inputEntry"></span>
    </p>
</form>
	<p><button id="execute" class="uibutton">Step</button>
<button id="executeFull" class="uibutton">Run</button>
</p></div>
-->
<script type="text/javascript">
// Change JQueryUI plugin names to fix name collision with Bootstrap.

$.widget.bridge( "uibutton", $.ui.button );

</script>
<script>
      var editor = CodeMirror.fromTextArea( document.getElementById( "codeSource" ), {
      	lineNumbers: true,
        matchBrackets: true,
		autoCloseBrackets: true,
		lineWrapping: true,
		styleActiveLine: true,
        extraKeys: {
			"Enter": "newlineAndIndentContinueComment",
			"Cmd-S": function ( instance ) {
				$( "#saveCode" ).click();
				return false;
			},
			"Ctrl-S": function ( instance ) {
				$( "#saveCode" ).click();
				return false;
			}
		},
		onKeyEvent: function( editor, event ) {
			// cmd+s -> build preview
				// cmd+d -> delete line
			if ( event.type === "keydown" && event.metaKey && event.keyCode === 68 ) {
				editor.removeLine( editor.coordsChar( editor.cursorCoords() ).line );
				event.stop();
			}
		}
      });
	  /*var input = document.getElementById( "select" );
	  function selectTheme() {
		var theme = input.options[input.selectedIndex].textContent;
		editor.setOption("theme", theme);
		//location.hash = "#" + theme;
	  }*/
    </script>
<script>
$( "#codeVisualiserMenu" ).removeClass( "hovered" );
$( "#arrayVisualiserMenu" ).addClass( "hovered" );
/*$( "nav" ).css( "position", "relative" );
$( "nav" ).children().css( "z-index", 3000 );*/
$( "button.uibutton" ).uibutton();
$( "#controlPanel" ).draggable();
$( "#files" ).uibutton();
$( "input[name='language']" ).checkboxradio({
	icon: false
	});
$( "input[name='language']" ).change( function() {
	  	editor.setOption( "mode", this.id );
		drawArray( myArray, "myArray" );//generateFlowChart( this.id );
		//TODO: set the language in the graph to this.id at the same time.
	});
$( "#language-group" ).controlgroup();

/* TODO: When bug in jQuery UI selectmenu is fixed, I can replace the 
following 2 lines with adding the selected item in the radio button */
$( "input[name='language'][id='javascript']" ).attr( "checked", true );
$( "#language-group" ).controlgroup( "refresh" );
/* ---- */

$( "#selectTheme" ).selectmenu({
		create: function( event, ui ) {
			document.getElementById( "selectTheme" );
			var theme = selectTheme.options[selectTheme.selectedIndex].textContent;
			editor.setOption( "theme", theme );
       },
	  	width: 200,
		change: function( event, ui ) {
			editor.setOption( "theme", ui.item.value );
       }
     })
  .selectmenu( "menuWidget" )
  .addClass( "overflow" );


var language = editor.getOption( "mode" );

generateArrayChart( language );



</script>

<script>
/* Save SVG as PNG image */
$( document ).on( "click", "#saveSVG", function() {
	$( "#svgOne" ).panzoom( "reset" );
	$( "#svgOne" ).css( "background-color", "#fff" );
	$( "g" ).attr( "class", "" );
	saveSvgAsPng( document.getElementById( "svgOne" ), "flowChart.png" );
	$( "#svgOne" ).css( "background-color", "#f5f2f0" );
});
/***********/

/* Download code as text file,  
** Currently named the file code.txt
*/ 

function downloadInnerHtml( filename, elementId, mimeType ) {
    var elHtml = document.getElementById( elementId ).value;//var elHtml = document.getElementById(elId).innerHTML;
    var fileLink = document.createElement( "a" );
    mimeType = mimeType || "text/plain";
    fileLink.setAttribute( "download", filename );
    fileLink.setAttribute( "href", "data:" + mimeType + ";charset=utf-8," + encodeURIComponent( elHtml ) );
    fileLink.click(); 
}

var fileName =  "code.txt"; 

$( document ).on( "click", "#downloadCode", function() {
    downloadInnerHtml( fileName, "codeSource", "text/html" );
});

/*************/

/* Upload code from file */

var fileInput = $( "#files" );
var uploadButton = $( "#uploadCode" );


uploadButton.on( "click", function() {
    if ( !window.FileReader ) {
        alert( "Sorry, your browser does not support this feature." );
    } else {
		var input = fileInput.get( 0 );
		
		// Create a reader object
		var reader = new FileReader();
		if ( input.files.length ) {
			var textFile = input.files[ 0 ];
			reader.readAsText( textFile );
			$( reader ).on( "load", processFile );
		} else {
			alert( "Please choose a file to upload before pressing the upload button." )
		} 
	}
});

function processFile( e ) {
    var file = e.target.result,
        results;
    if ( file && file.length ) {
        results = file.split( "\n" );
        console.log(results)
		document.getElementById( "codeSource" ).value = "";
		for ( var i = 0; i < results.length; i++ ) {
			document.getElementById( "codeSource" ).value += results[ i ] + "\n";
		}
		var codeEntered = $( "#codeSource" ).val();
		
		$( "#codeSource" ).html( codeEntered );
		editor.setValue( codeEntered );
		var language = editor.getOption( "mode" );
		drawArray( myArray, "myArray" );//generateFlowChart( language );
    }
}
$( document ).on( "mouseenter", "g", function() {
	
	$( "g[data-branch='" + $( this ).attr( "data-branch" ) + "']:first" ).attr( "class", "hovered" );//children( "rect:first" )
	
	
});
function addPanZoom( elem ) {
	$( elem ).panzoom({
        $zoomIn: $( ".zoom-in" ),
        $zoomOut: $( ".zoom-out" ),
        $zoomRange: $( ".zoom-range" ),
        $reset: $( ".reset" ),
		startTransform: "scale(1.0)",
        increment: 0.1,
		contain: "invert",
		disablePan: false,
		disableZoom: false,
		transition: true,
		duration: 200,
		easing: "ease-in-out",
		cursor: "pointer"
    });
	
	$( elem ).mousedown( function() {
		$( this ).css( "cursor", "move" );
	});
	$( elem ).mouseup(function() {
        $( this ).css( "cursor", "pointer" );
    });
}

$( document ).ready(function() {
	addPanZoom( "#svgOne" );
});

</script>
<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrap-3.3.7/js/bootstrap.min.js" ></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-90995417-1', 'auto');
  ga('send', 'pageview');
 
</script>
</body>
</html>
