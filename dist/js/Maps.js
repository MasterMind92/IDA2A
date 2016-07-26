var Markers=[];
			
			function initMap() {

		      var map = new google.maps.Map(document.getElementById('googleMap'), {
		        zoom: 12,
		        center: new google.maps.LatLng(5.3096600,-4.0126600)
		      });

		      Load(map);

		      var geocoder = new google.maps.Geocoder();

		      document.getElementById('affiche').addEventListener('click', function() {
		        geocodeAddress(geocoder, map);
		      });

		      
		      
		     
		      document.getElementById('Marquer').addEventListener('click', function() {
		        Mark(geocoder, map);
		      });
		    }

		    
		    function geocodeAddress(geocoder, resultsMap) {
	
		      var address = document.getElementById('adresse').value;


		      
		      geocoder.geocode({'address': address}, function(results, status){
		        
		        if (status === google.maps.GeocoderStatus.OK) {
		          
		          resultsMap.setCenter(results[0].geometry.location);
		          resultsMap.setZoom(16);

		          document.getElementById('Lng').value=resultsMap.getCenter(results[0].geometry.location).lng();
		          document.getElementById('Lat').value=resultsMap.getCenter(results[0].geometry.location).lat();
		        
		        } else  {

		          alert('Geocode was not successful for the following reason: ' + status);
		        
		        }
		    	});
		    }

		    //fonction de recuperation des coordonnees pendant evenement drag

		    function setposition(marker){

		    	var pos=marker.getPosition();

		    	 document.getElementById('Lng').value=pos.lng();
		         document.getElementById('Lat').value=pos.lat();
		    }



		    //fonction de marquage des endroits geocoder


		    function Mark (geocoder, map) {
		    	var address = document.getElementById('adresse').value;

	    	    geocoder.geocode({'address': address}, function(results, status) {
	        
			        if (status === google.maps.GeocoderStatus.OK) {
			        	 
			          var marker = new google.maps.Marker({
			            map: map,
			            position: results[0].geometry.location,
			            draggable: true,
				        animation: google.maps.Animation.DROP
			          });

	          		google.maps.event.addListener(marker,'drag',function () {
				      	 	 setposition(marker);
				      });
			      	}
			    });
			}