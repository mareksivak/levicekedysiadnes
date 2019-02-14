<?php


function load_next_photos($last_id)
{
	$socket = "/tmp/mariadb55.sock";
	
	//$con = new mysqli("mariadb55.websupport.sk:3310", "9ebk2mct", "1234512345", "9ebk2mct", 0, $socket); // localhost
	$con = new mysqli("localhost", "vetvm23a", "1234512345", "vetvm23a", 0, $socket); // produkcia
	
	
	if (!$con)
	  {
	  die('Could not connect: ' . mysqli_error($con));
	  }


	$condition = "";
    if ($last_id > 0) {
        $condition = " WHERE id < ".$last_id;   
    }
	$sql="SELECT * FROM levice".$condition." ORDER BY id DESC LIMIT 8";
//echo 'last id: '.$last_id."<br>";
//echo $sql;
	$result = mysqli_query($con,$sql);

	//echo '<pre>'.print_r(mysqli_fetch_array($result)).'</pre>';
	mysqli_close($con);
	return $result;
	
	/*while($row = mysqli_fetch_array($result))
	  {
		mysqli_close($con);
		return $row;
	  
	  }*/
}

?>


