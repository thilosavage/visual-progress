<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="visualprogress.js"></script>

<style>
body { margin: 0; font-family: arial; }

#wrapper {
	position: absolute;text-align: center;height: 100%;width: 100%;z-index: -1;
	background: -webkit-gradient(radial, 50% 50%, 500, 50% 50%, 40, from(#000), to(#222));
	background: -moz-radial-gradient(50% 50%, circle, #222 25%, #000 98%);
	}
	
#title-container {
	font-size: 48px;margin: 100px auto; width: 460px;	text-transform: uppercase;
	position: relative;font-weight: bold;letter-spacing: -3px;color: #ccc;
	padding-bottom: 40px;
	}
.title {position: absolute;}
.title-front{text-shadow: 13px 13px 19px yellow;}
.title-glow{left: 3px; top: 3px; text-shadow: -13px -13px 19px orange;}
.title-highlight{text-shadow: 0 0 18px white;}
.title-shadow{text-shadow: 0 0 2px black;}
.title-small{font-size: 55px;}
.title-large{font-size: 75px;}

#beta {display: none; position: absolute;letter-spacing: 4px; right: 5px; top: 75px; font-weight: normal;font-size:12px;}

#loader-container {text-align: center; padding:20px; font-size: 25px; color: #999; text-shadow: 2px 2px 9px black;}

#message {font-family: arial; margin: 10px;}

#visualprogress {position: absolute; top: 0px; left: 0px; border: 1px solid black; box-shadow: 0 0 5px black; font-size: 0px;}

#bg {
	width: 480px; height: 15px; position: absolute; top: 0px; left: 0px; 
	background-color: gray; border: 1px solid black; 
	box-shadow: 0 0 5px black; font-size: 0px;
}

#visualprogress-bar-container {position: relative; margin: 0 auto; width: 500px; text-align: left;}
</style>


<script>
// images to load
var imageObj = [
	"my/first/image.jpg",
	"my/second/image.png"
];

$(function($) {
	$('#visualprogress').visualprogress({
		width: 505,
		height: 16,
		images: imageObj,
		complete: function(){
			$('#title-container').animate({letterSpacing:'4px'},500, function(){
				$('#beta').fadeIn();
			});				
			$('#message').html('Done!');
		}
	});
});

</script>

<div id='wrapper'>

	<div id='title-container'>
		<div class='title title-front' style=''><span class='title-small'>Vi</span>su<em class='title-large'>Loader</em></div>
		<div class='title title-glow'><span class='title-small'>Vi</span>su<em class='title-large'>Loader</em></div>
		<div class='title title-highlight'><span class='title-small'>Vi</span>su<em class='title-large'>Loader</em></div>
		<div class='title title-shadow'><span class='title-small'>Vi</span>su<em class='title-large'>Loader</em></div>
		<div id='beta'>jQuery image preloading plugin</div>
	</div>
	
	<div id='loader-container'>
		<span id='message' style=''>Loading Images.. <span id='percentLoaded'></span>%</span><br><br>
		<div id='visualprogress-bar-container'>
			<div id='bg'></div>
			<div id='visualprogress'></div>
		</div>
	</div>

</div>