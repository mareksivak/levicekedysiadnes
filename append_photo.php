<?php
setlocale(LC_ALL, 'sky');
$q = intval($_GET['q']);

include_once 'load.php';
$photos_db = load_next_photos($q);		// nacita frazu z db


while($row = mysqli_fetch_array($photos_db)) {

    

    echo '<div class="levice-photo photo-loading animated fadeInUp" id="levice-photo-'.$row['id'].'">';
    echo '  <div class="row">';
    echo '      <div class="col-xs-12 no-padding">';
    echo '          <div class="sliding-container">';
    echo '              <img src="img/'.$row['photo'].'-kedysi.jpg" data-src="img/'.$row['photo'].'-kedysi.jpg" alt="Levice">';
    echo '              <img src="img/'.$row['photo'].'-dnes.jpg" data-src="img/'.$row['photo'].'-dnes.jpg" alt="Levice">';
    echo '          </div>';                        
    echo '          <div class="levice-photo--comment">';  
    echo '              <div class="comment-text">';  
    echo '                  '.print_comment($row['comment'], $row['id']);
    echo '              </div>'; 
    echo '              <div class="comment-date">';

    echo '                  '.datum(strtotime ($row['time']));
    echo '              </div>';                        
    echo '          </div>';                        
    echo '       </div>';                        
    echo '    </div>';                        
    echo '</div>';                        
    
}

function print_comment ($str, $id) {
    if ($str == "") return '<span class="crowdsourcing">Viete, kedy bola archívna fotka odfotená? <a href="mailto:levice@levicekedysiadnes.sk?subject=Levice: Kedysi a dnes / Fotka číslo '.$id.'">Napíšte nám</a>.</span>';
    return $str;
}

function datum($date)
{

$mesiac = array ("Január", "Február", "Marec", "Apríl", "Máj", "Jún", "Júl", 
"August", "September", "Október", "November", "December");
$year = "";
    if (date("Y") != date("Y", $date)) { $year = date("Y", $date); }
return date("j", $date) . ". " . $mesiac[date("n", $date) - 1]. " ".$year;


}

?> 