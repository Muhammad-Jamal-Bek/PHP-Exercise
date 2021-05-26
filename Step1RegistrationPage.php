<?php
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
    function space($height,$width){
        echo $height*$width;
    }
    space(10,100);
    ?>
    <br>
    <?php
    $year=2010;
    $current_year=2021;
    if($current_year - $year>18)
    {
            echo "true";
        }
        else{
            echo "false";
        }    
?>
<br>
<?php
$arr=["item 1","item 2","rand1","rand2","item 3"];
echo "do you have ".$arr[0].",".$arr[1]." and ".$arr[4];
?>
<br>
<?php
$arr2=[["I1","I2"],["I3","I4"],["I5","I6"]];
echo "I'd like ".$arr2[0][1]." and some ".$arr2[2][0];
?>
<br>
<?php
$name2="Max";
var_dump($name2);
?>
<br>
<?php
    function check_power($num){
        if($num%2==0){
            echo "oui ".$num." is a power of two.<br>";
        }
        else{
            echo "nope ".$num." isn't a power of two.<br>";
        }
    }
    check_power(4);
    check_power(5);
    check_power(20);
    check_power(2222222);
    check_power(3829);
?>
<br>

<?php 
$x=1;
while($x<8){
    echo str_repeat("*",$x)."<br>";
    $x=$x+1;
}
function m($y){
    $t=1;
    while($y!=1){
    $t=$y*$t;
    $y=$y-1;
    }
    echo $t."<br>";
}
m(6);
m(5);
m(4);
m(3);