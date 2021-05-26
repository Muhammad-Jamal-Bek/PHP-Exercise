<?php
echo "<hr>";
$arr=array("MUSICALS"=>array("Oklahoma","The Music Man","South Pacific"),
"DRAMAS"=>array("lawrence of Arabia","To Kill a Mockingbird","Casablanca"),
"MYSTERIES"=>array("The Maltese Falcon","Rear Window","North by Northwest"));
foreach($arr as $k => $v) {
    echo strtoupper($k);
    echo "<br>";
    foreach($v as $i => $v) {
      echo "----> $i = $v";
      echo "<br>";
    }
  }
echo"<br>";
echo "<hr>";
echo "<br>";
  krsort($arr);
  foreach($arr as $k => $v) {
    echo strtoupper($k);
    echo "<br>";
    foreach($v as $i => $v) {
      echo "----> $i = $v";
      echo "<br>";
    }
  }
 echo "<hr>";
 ?>

    
