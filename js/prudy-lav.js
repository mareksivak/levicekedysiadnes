var LIMIT = 8;

var data = [];

data [0] = ['1', '2015-11-05 14:51:41', 'Stará nemocnica, 90-te roky.', 'levice1'];
data [1] = ['2', '2015-11-05 14:51:45', '', 'levice2'];
data [2] = ['3', '2015-11-05 14:51:45', '', 'levice3'],
data [3] = ['4', '2015-11-05 14:51:45', '', 'levice4'],
data [4] = ['5', '2014-11-05 14:54:07', 'Námestie Šoltésovej, 1992.', 'levice5'],
data [5] = ['6', '2014-11-05 14:54:07', '', 'levice6'],
data [6] = ['7', '2014-11-05 14:57:23', '', 'levice7'],
data [7] = ['8', '2015-04-05 13:57:23', '', 'levice8'],
data [8] = ['9', '2015-05-05 13:59:22', '', 'levice9'],
data [9] = ['10', '2015-12-05 14:59:22', '', 'levice10'],
data [10] = ['11', '2016-01-02 14:45:49', '', 'levice11'],
data [11] = ['12', '2016-01-07 22:06:37', '', 'levice12'];


function generatePhotos(lastId) {
    console.log("Generating photos");
    
    var i = 0;
    var photo_html = "";
    
    $.each(data, function( index, value ) {
        if ((index >= lastId) && (index <= lastId + LIMIT)) {
            console.log( index + ": " + value );
        
            photo_html += '<div class="levice-photo photo-loading animated fadeInUp" id="levice-photo-'+value[0]+'">'; // id
            photo_html +='  <div class="row">';
            photo_html +='      <div class="col-xs-12 no-padding">';
            photo_html +='          <div class="sliding-container">';
            photo_html +='              <img src="img/'+value[3]+'-kedysi.jpg" data-src="img/'+value[3]+'-kedysi.jpg" alt="Levice">'; // photo
            photo_html +='              <img src="img/'+value[3]+'-dnes.jpg" data-src="img/'+value[3]+'-dnes.jpg" alt="Levice">'; // photo
            photo_html +='          </div>';  
            photo_html +='          <div class="levice-photo--comment">';  
            photo_html +='              <div class="comment-text">';  
            photo_html +='                  '+printComment(value[2], value[0]); // comment, id  
            photo_html +='              </div>'; 
            photo_html +='          </div>'; 
            photo_html +='      </div>'; 
            photo_html +='  </div>'; 
            photo_html +='</div>'; 
        }
        
    });
    	
   return photo_html;
}

function printComment(comment, id) {                                                               
   if (comment == "") return '<span class="crowdsourcing">Viete, kedy bola archívna fotka odfotená? <a href="mailto:xsivak@gmail.com?subject=Levice: Kedysi a dnes / Fotka číslo '+ id + '">Napíšte nám</a>.</span>';
   return comment;                                                                    
}
                                                                       
    // did some work on old personal project. its page was dead because after migrating to github pages data couldnt be loaded from mysql any more. i modified its logic so input is fetched from code. page is live again on levicekedysiadnes.sk. By dragging you can comape historical photos pof my hometown with screens from google streetview.