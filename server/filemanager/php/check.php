<?php
function get_content($URL){
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_URL, $URL);
          $data = curl_exec($ch);
          curl_close($ch);
          return $data;
}
	  
echo $url = 'https:'.$_SERVER['SERVER_ADDR'].':8080/filemanager/get.php?t='.$_GET['t'];
echo '<br>';
$answer = get_contents($url);
var_dump($answer);