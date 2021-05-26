<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style-home.css" rel="stylesheet">
    <title>Safe page</title>
</head>
<body>
<header class="safe-header">
<h1 class="welcome">Welcome <?php echo $_POST["name"]; echo $_POST["login-user"];?></h1>
</header>
<main>
    <div class="info">
    <?php if(strlen($_POST["name"])>0 ){
        echo "WELCOME ABOARD!"."<br><br>";
        echo "Your user name is: ".$_POST['username']."<br>";
        echo "Password: ". str_repeat("*",strlen($_POST["password"]))."<br>";
        echo "Your Email is: ".$_POST["email"]."<br>";
        echo "Your Registered phone number is: ". $_POST["phone"]."<br>";
        echo "Birth Date: ".$_POST["birth-date"]."<br>";
        echo "Social Security No. ".$_POST["SSN"]."<br>";}
        else{
            echo "Welcome back ". $_POST["login-user"]."! <br>"."We've Missed you!!";} 
        ?>
    </div>
</main>
</body>
</html>