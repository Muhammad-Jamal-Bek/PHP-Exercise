<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Salary Calculator</title>
</head>
<body>
    <header class="site-header">
        <h1 class="title">Welcome to SalCal!</h1>
        <h3>Let's find out how much bread you're winning, shall we!? :D</h3>
    </header>
    <main>
        <div class="content">
            <form method="post">
                <fieldset><legend>Please fill out the folowing fields</legend>
                <label for="salary">Your Salary in USD
                    <input id="salary" name="salary" type="number" min="0" required value="<?php echo htmlspecialchars($_POST['salary']); ?>">
                </label>
                <label for="mouthly">
                    <input id="monthly" name="rate" type="radio" value="monthly" required>Monthly</label>
                <label for="yearly"><input id="yearly" name="rate" type="radio" value="yearly">Yearly</label>
                <br>
                <label for="allowance">Your Tax Free Allowance in USD
                    <input id="allowance" name="allowance" type="number" min="0" required value="<?php echo htmlspecialchars($_POST['allowance']); ?>">
                </label>
                <button type="submit">Submit</button>
                </fieldset>
                <a href="calc.jpg" target="_blank"><img src="calc.jpg"></a>
            </form>
            <h3 class="middle">Your salary will be shown in details in the table below</h3>
            <table>
                <tr>
                    <th>Results</th>
                    <th>Monthly</th>
                    <th>Yearly</th>
                </tr>
                <tr><td>Total salary</td>
                <td><?php echo total_monthly($_POST["salary"],$_POST["rate"])?></td>
                <td><?php echo total_yearly($_POST["salary"],$_POST["rate"])?></td>
                </tr>
                <tr><td>Tax amount</td>
                <td><?php echo tax_monthly($_POST["salary"],$_POST["rate"]);?></td>
                <td><?php echo tax_yearly($_POST["salary"],$_POST["rate"])?></td>
                </tr>
                <tr><td>Social security fee</td>
                <td><?php echo social_monthly($_POST["salary"],$_POST["rate"])?></td>
                <td><?php echo social_yearly($_POST["salary"],$_POST["rate"])?></td>
                </tr>
                <tr><td>Salary after tax</td>
                <td><?php echo post_tax_monthly($_POST["salary"],$_POST["rate"],tax_monthly($_POST["salary"],$_POST["rate"])
                ,social_monthly($_POST["salary"],$_POST["rate"]),$_POST["allowance"]) ?></td>
                <td><?php echo post_tax_yearly($_POST["salary"],$_POST["rate"],tax_yearly($_POST["salary"],$_POST["rate"])
                ,social_yearly($_POST["salary"],$_POST["rate"]),$_POST["allowance"]) ?></td>
                </tr>
            </table>
        </div>
    </main>
    <footer><div class="footer"><nav>
    <a href="#" target="_blank">Conact us</a> | 
    <a href="#" target="_blacnk">Report a Problem</a>
    </nav>
    </div>
    </footer>
</body>
</html>
<?php 
function total_yearly($salary,$rate){
    if($rate=="monthly"){
        return $salary*12;
    }
    else{
        return $salary;
    }
}
function total_monthly($salary,$rate){
    if($rate=="yearly"){
        return $salary/12;
    }
    else{
        return $salary;
    }
}

function tax_monthly($salary,$rate){
    if($rate=="yearly"){
        if($salary<=10000){
            return 0;
        }
        elseif(10000<$salary & $salary<=25000){
            return  $salary*0.11/12;
            
        }
        elseif(25000<$salary & $salary<=50000){
            return $salary*0.3/12;
        }
        else{
            return $salary*0.45/12;
        }
    }
    else{$new_sal=$salary*12;
        if($new_sal<=10000){
            return 0;
        }
        elseif(10000<=$new_sal & $new_sal<25000){
            return $new_sal*0.11/12;
        }
        elseif(25000<=$new_sal & $new_sal<50000){
            return $new_sal*0.30/12;
        }
        else{
            return $new_sal*0.45/12;
        }
    }
}
function tax_yearly($salary,$rate){
    if($rate=="yearly"){
        if($salary<=10000){
            return 0;
        }
        elseif(10000<$salary & $salary<=25000){
            return $salary*0.11;
        }
        elseif(25000<$salary & $salary<=50000){
            return $salary*0.3;
        }
        else{
            return $salary*0.45;
        }
    }
    else{$new_sal=$salary*12;
        if($new_sal<=10000){
            return 0;
        }
        elseif(10000<=$new_sal & $new_sal<25000){
            return $new_sal*0.11;
        }
        elseif(25000<=$new_sal & $new_sal<50000){
            return $new_sal*0.30;
        }
        else{
            return $new_sal*0.45;
        }
    }
}
function social_yearly($salary,$rate){
    if ($rate=="yearly"){
        if ($salary<=10000){
            return 0;
        }
        else{
            return $salary*0.04;
        }
    }
    else{
        return $salary*12*0.04;;
    }
}
function social_monthly($salary,$rate){
    if ($rate=="yearly"){
        if ($salary<=10000){
            return 0;
        }
        else{
            return $salary*0.04/12;
        }
    }
    else{
        return $salary*0.04;
    }
}
function post_tax_yearly($salary,$rate,$tax,$social,$allowance){
    $total=0;
    if($rate=="yearly"){
        $total=$salary+$allowance-$tax-$social;
        return $total;
    }
    else{
        $total=$salary*12+$allowance-$tax-$social;
        return $total;
    }
}
function post_tax_monthly($salary,$rate,$tax,$social,$allowance){
    $total=0;
    if($rate=="yearly"){
        $total=$salary/12+$allowance/12-$tax-$social;
        return $total;
    }
    else{
        $total=$salary+$allowance/12-$tax-$social;
        return $total;
    }
}