var lastId = "NaN";

var showLoadBtn = false;

function get(url){
  return new Promise(function(resolve, reject){
      var req = new XMLHttpRequest();
      req.open('GET', url);
      
      req.onload = function() {
        if(req.status == 200){
  //          console.log(req)
          resolve(req.response);
        }else{
          reject('failed request');
        }
      }
      
      req.onerror = function () {
        reject('network error');
      }
      
      req.send();
      
  });
      
};

function calltwenty(response){
    
  $('#photos').append(response);
    if (showLoadBtn) $('#btn-autoload').show();
    
    //$('#loading-photos').hide();
    $('#loading-photos').removeClass("animated fadeIn");
  //$(".sliding-container").twentytwenty();
    
    if ($('.levice-photo.photo-loading').length == 0) {
        //if (showLoadBtn) $('#btn-autoload').hide();
        //$('#empty-state').show();
    }
    $('.levice-photo.photo-loading').each(function() {
        var parent = $(this);
        parent.find('img').one("load", function() {
          // do stuff
            //console.log("loading "+this.src);
            if(this.complete) {
              $(this).load();
              if (!parent.hasClass("partially-loaded")) {
                    parent.addClass("partially-loaded");  
                    //console.log("adding PL " + this.src);

              }
              else {
                  //console.log("removing PL" + this.src);

                parent.removeClass("partially-loaded");
                parent.find('.sliding-container').twentytwenty();
                parent.find('.sliding-container').addClass("animated fadeIn");
                parent.removeClass("photo-loading");

                
              }
          }
        });
    });
    
    $('#waypoint-autoload').show();
    initWaypoint();
        
}

function loadPhotos(){
    var oldId = lastId; 
    
    var loadedPhotos = $('#photos').find('.levice-photo').children();
    
    if (loadedPhotos.length > 0) {
        console.log("naladovane " + loadedPhotos.length);
        lastId = $('#photos .levice-photo').last().attr('id').substring("levice-photo-".length);
    }
    else {
        lastId = -1;   
    }
    console.log(lastId + " " + oldId);
    if (oldId != lastId) {
        if (showLoadBtn) $('#btn-autoload').hide();
        //$('#loading-photos').show();
        $('#loading-photos').addClass("animated fadeIn");
        console.log("LOAD MOAR PHOTOZZZ");


        console.log('volam 20');
        get('append_photo.php?q=' + lastId).then(calltwenty);
    }
    else {
        // vsetko uz je nacitane
        if (lastId == 1) {
            if (showLoadBtn) $('#btn-autoload').hide();
            $('#empty-state').show();
            console.log("show empty state");    
        }
        
    }
}

function initWaypoint() {
 console.log('vytvaram waypoint');

    
    $('#waypoint-autoload')
				.waypoint({
					triggerOnce: true,
					handler: function(direction)
					{
						if (direction == 'down')
						{
							loadPhotos();
                            $('#waypoint-autoload').hide();
                            //console.log("autoload photos triggered");

						}
					},
					offset: '100%'
				});
}

$('#btn-autoload').click(function() {
    
    loadPhotos();
    
});


$(window).load(function() {
        loadPhotos();
    });


$(document).ready(function() {
    //initWaypoint();
  })