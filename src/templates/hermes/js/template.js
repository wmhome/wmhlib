

//Preloader

	$(window).load(function() {
		$("#status").fadeOut();
		$("#preloader").delay(350).fadeOut("slow");
	}) 


	
	
//Home fit screen	
	
	
	/*global $:false */
	$(function(){"use strict";
		$('#home').css({'height':($(window).height())+'px'});
		$(window).resize(function(){
		$('#home').css({'height':($(window).height())+'px'});
		});

//Home typer		

      $('[data-typer-targets]').typer();

//Home Background Slider

            $.mbBgndGallery.buildGallery({
                containment:"#home",
                timer:2000,
                effTimer:4000,
                controls:"#controls",
                grayScale:false,
                shuffle:true,
                preserveWidth:false,
                effect:"zoom",
//				effect:{enter:{transform:"scale("+(1+ Math.random()*2)+")",opacity:0},exit:{transform:"scale("+(Math.random()*2)+")",opacity:0}},

                // If your server allow directory listing you can use:
                // (however this doesn't work locally on your computer)

                //folderPath:"testImage/",

                // else:

                 images:[
                 "images/1.jpg",
                 "images/2.jpg",
                 "images/3.jpg"
                 ],

                onStart:function(){},
                onPause:function(){},
                onPlay:function(opt){},
                onChange:function(opt,idx){},
                onNext:function(opt){},
                onPrev:function(opt){}
            });


	  
	});	


	
	
//Scrolling

$(document).ready(function(){
      $(".main").onepage_scroll({
			sectionContainer: "section",
			responsiveFallback: 600
      });
});



	
//Google map	
	
/*global $:false */
    var map;
    $(document).ready(function(){"use strict";
      map = new GMaps({
    disableDefaultUI: false,
    scrollwheel: false,
        el: '#map',
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.LARGE,
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		panControl: false,
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
        lat: 44.789511,
        lng: 20.43633,
		zoom: 13
      });
      map.drawOverlay({
        lat: map.getCenter().lat(),
        lng: map.getCenter().lng(),
        layer: 'overlayLayer',
        content: '<div class="overlay1"></div>',
        verticalAlign: 'center',
        horizontalAlign: 'center'
      });
        var styles = [
  {
    "featureType": "water",
    "stylers": [
      { "color": "#eef7fb" },
      { "visibility": "simplified" }
    ]
  },{
    "featureType": "administrative.country",
    "stylers": [
      { "weight": 0.3 },
      { "color": "#4f4b4c" }
    ]
  },{
    "featureType": "road",
    "stylers": [
      { "visibility": "simplified" },
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "landscape",
    "stylers": [
      { "visibility": "simplified" }
    ]
  },{
    "featureType": "poi",
    "stylers": [
      { "visibility": "simplified" }
    ]
  },{
    "featureType": "transit",
    "stylers": [
      { "visibility": "simplified" }
    ]
  },{
    "featureType": "landscape.natural",
    "stylers": [
      { "visibility": "simplified" },
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "landscape.man_made",
    "stylers": [
      { "visibility": "simplified" },
      { "color": "#dfdddb" }
    ]
  },{
    "featureType": "poi.park",
    "stylers": [
      { "visibility": "simplified" },
      { "color": "#c8c5c5" }
    ]
  },{
    "featureType": "poi",
    "stylers": [
      { "visibility": "simplified" },
      { "color": "#f6f6f7" }
    ]
  }
];
        
        map.addStyle({
            styledMapName:"Styled Map",
            styles: styles,
            mapTypeId: "map_style"  
        });
        
        map.setStyle("map_style");	  
    });		
	













	
	
	