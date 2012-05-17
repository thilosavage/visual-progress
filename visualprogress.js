/*

Title:		VisualProgress: a jQuery Visual Image Preloader
Author:	Thilo Savage
Website:	http://www.thilosavage.com/projects/visualprogress/

*/

$.fn.visualprogress = function(el)
{

	// default size
	var width = el.width ? el.width : '500';
	var height = el.height ? el.height : '15';
	
	// arguments
	var args = el.images;
	var complete = el.complete;
	var image_count = args.length;
	
	var loaded = 0; 
	var cache = [];
	
	// for each image
	for (var i = image_count; i--;)
	{
		
		// create image
		var cacheImage = document.createElement('img');
		cacheImage.src = args[i];
		
		// count each image loaded
		cacheImage.onload = function(){
			loaded++;
		}
		
		// push it to cache
		cache.push(cacheImage);
		
		// get the width of each thumb
		var w = width / image_count;
		
		// loop until all the images are loaded
		function checkLoaded()
		{
			
			// if the loaded count equals image count
			if (loaded == image_count)
			{
			
				// run callback
				if (typeof complete == 'function') complete();
				complete = null;
			}
			else
			{
			
				// update status bar and percentage
				var perc = parseInt(loaded / image_count * 100);
				$('#visualprogress-percentage').html(perc+"%");
				
				// do it again
				setTimeout(function(){
					checkLoaded();
				}, 30);
			}
		}
		
		// fill in the bar with images to be loaded
		this.append("<img width='"+w+"px' height='"+height+"' src='"+args[i]+"'>");
		
		// start it
		checkLoaded();
	
	}
	
	return this;
}