<?php
/**
 *	How to use PHP to get all the images
 *	in a directory and put them into a JSON object
 *	for visualprogress  rather than statically
 *	adding all the images
 */

// user PHP to cycle through a file and get images
if ($handle = opendir('i')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
			$ims[] = $entry;
        }
    }
    closedir($handle);
}
// encode images
$images = json_encode($ims);
?>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="visualprogress.js"></script>

<script>
var imageObj = <?php echo $images;?>;
$(function($) {
	$('#visualprogress').visualprogress({
		images: imageObj,
		finished: function(){
			$('#message-div').html('Done!');
		}
	});
});
</script>
<span id='message-div'>Loading Images.. <span id='visualprogress-percentage'></span></span><br><br>
<div id='visualprogress'></div>