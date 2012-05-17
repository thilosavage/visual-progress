<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="visualprogress.js"></script>

<script>
// images to load
var imageObj = [
	"images/abstract.jpg",
	"images/boat.jpg",
	"images/bridge.jpg",
	"images/cactus.jpg",
	"images/canoe.jpg",
	"images/dragon.jpg",
	"images/fence.jpg",
	"images/glacier.jpg",
	"images/horse.jpg",
	"images/island.jpg",
	"images/lake.jpg",
	"images/lake1.jpg",
	"images/mountainlake.jpg",
	"images/pilgrims.jpg",
	"images/promenade.jpg",
	"images/purplesky.jpg",
	"images/road.jpg",
	"images/road2.jpg",
	"images/roadclouds.jpg",
	"images/smalllake.jpg",
	"images/spirals.jpg",
	"images/whitehouse.jpg",
	"images/windmill.jpg"
];

$(function($) {
	$('#visualprogress').visualprogress({
		images: imageObj,
		complete: function(){
			$('#message-div').html('Done!');
		}
	});
});

</script>


<div id='message-div'>Loading Images.. <span id='visualprogress-percentage'></span></div>

<div id='visualprogress'></div>
