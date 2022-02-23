<html>
<head>
<title> Demo Player POST test </title>
<script type="text/javascript" src="SubPlayerJSpost.js" ></script>
</head>
<body>

    
<center>

    
<h3> Inferno Trailer - SubRip - .srt </h3>
</p>
<div id="divIDwhereVideoPlayerWillBeLoaded2"></div> 

<!--<br />
Trailer <b><a href="http://trailers.apple.com/trailers/sony_pictures/inferno/">Inferno</a> and subtitle ripped from: <a href="https://www.youtube.com/watch?v=XgyHgaWqrGo">Subtitled Trailers</a></b> -->
</center>
 <br />
 
<script>

	//NOTE mp4 doesn't play on IRON
	//var newPlayer2 = new SubPlayerJS('#divIDwhereVideoPlayerWillBeLoaded2', 'toumba-dimotika-tk-COMMENTergasia-vokoscreenNG-2020-12-04_13-59-17.mp4');
	var newPlayer2 = new SubPlayerJS('#divIDwhereVideoPlayerWillBeLoaded2', 'aaa.mp4');
	///newPlayer2.setSubtitle('aaa.srt'); 
	newPlayer2.postSubtitle('aaa.srt'); 

/*
newPlayer2.setSubtitle(
"1
00:00:00,000 --> 01:00:04,921
XxxxxxxxxxxxxxxxxxxxxxΔΟΚΙΜΗSubtitledtrailers.comhttp://localhost/img/SubPlayerJS/demo.html
""
); 
*/	
	//ORIGINAL
	//	var newPlayer2 = new SubPlayerJS('#divIDwhereVideoPlayerWillBeLoaded2', 'http://movietrailers.apple.com/movies/sony_pictures/inferno/inferno-tlr1_a720p.m4v');
	//newPlayer2.setSubtitle('DemoSubtitle/inferno.srt'); 

</script>


</body>
</html>