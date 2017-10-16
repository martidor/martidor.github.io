window.addEventListener("load", function() {



	var images = new Array();

	var image1 = new Image();
	image1.src = "images/bilde1.jpg";
	images[0] = image1;

	var image2 = new Image();
	image2.src = "images/bilde2.jpg";
	images[1] = image2;

	var image3 = new Image();
	image3.src = "images/bilde3.jpg";
	images[2] = image3;

	var image4 = new Image();
	image4.src = "images/bilde4.jpg";
	images[3] = image4;

	var image5 = new Image();
	image5.src = "images/bilde5.jpg";
	images[4] = image5;

	var image6 = new Image();
	image6.src = "images/bilde6.jpg";
	images[5] = image6;

	var image7 = new Image();
	image7.src = "images/bilde7.jpg";
	images[6] = image7;

	var image8 = new Image();
	image8.src = "images/bilde8.jpg";
	images[7] = image8;

	var i = 1;

	console.log(image1.src);

	function slide() {
		document.getElementById("slideshow").src = images[i].src;
		i++;
		if (i >= images.length) {
			i = 0;
		};
	};
		
	setInterval(slide, 4500);
	

	
});