function calltwenty(){

    console.log("calltwenty");

    
    
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
            console.log("loading "+this.src);
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
        
}

calltwenty();

$(window).load(function() {
        
    });