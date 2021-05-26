<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<header>
    <h1>Check if your text is a palindrome!</h1>
</header>
<main>
    <form method="get">
        <label for="string">Enter your text here
            <input id="string" name="string" type="text" value="<?php echo htmlspecialchars($_GET['string'])?>">
            <button type="submit">Check</button>
        </label>
    </form>
    <div class="result">
        <p>
            <?php
            echo chek_pal($_GET["string"]);
            ?>
        </p>
    </div>
</main>
<footer class="footer">
<div class="footer"><nav>
    <a href="#" target="_blank">Conact us</a>
    <a href="#" target="_blacnk">Report a Problem</a>
    </nav>
    </div>
</footer>


<?php
function chek_pal($string){
    $new_str=str_replace(" ","",$string);
    $h=strlen($string);
    for($i=0;$i<$h;$i++){
        $new_str[$i]=strtolower($new_str[$i]);
    }
    if($new_str==strrev($new_str)){
        return "YUP! YOUR TEXT IS A PALINDROME!!";
    }
    else{
        return "NOPE, THAT WASN'T A PALINDROME :(";
    }
}
?>