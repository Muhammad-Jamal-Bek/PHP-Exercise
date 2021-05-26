<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style-home.css" rel="stylesheet">
    <title>Registration</title>
</head>
<body>
    <header class="page-header">
        <h1>Welcome to Cyber Scratch</h1>
        <br>
        <img src="Logo.png" alt="Our Logo">
    </header>
    <main>
        <div class="content">
            <div class="register">
                <form action="safe.php" method="post">
                    <fieldset><legend>Register</legend>
                    <label for="name">Full Name*
                        <input id="name" name="name" type="text" placeholder="Your Full Name" required>
                    </label>
                    <br>
                    <label for="username">Username*
                        <input id="username" name="username" type="text" placeholder="Must contain only letters, numbers and '_'" required>
                    </label>
                    <br>
                    <label for="password">Password*
                        <input id="password" name="password" type="password" placeholder="Your Password" required minlength="8" maxlength="16">
                    </label>
                    <br>
                    <label for="re-password">Confirm Password*
                        <input id="re-password" name="re-password" type="password" placeholder="Retype your Password" required>
                    </label>
                    <br>
                    <label for="email">Email*
                        <input id="email" name="email" type="email" placeholder="example@email.com" required>
                    </label>
                    <br>
                    <label for="phone">Phone Number*
                        <input id="phone" name="phone" type="tel" placeholder="Your Active Phone Number" required> 
                    </label>
                    <br>
                    <label for="birth-date">Date of Birth*
                        <input id="birth-date" name="birth-date" type="date" placeholder="Your Birth Date" required>
                    </label>
                    <br>
                    <label for="SSN">Social Security Number*
                        <input id="SSN" name="SSN" type="text" maxlength="9" placeholder="Your Social Security Number" required>
                    </label>
                    <br>
                    <a href="safe.php">
                    <button type="submit">Register</button></a>
                    </fieldset>
                </form>
            </div>
            <div class="login">
                <form action="safe.php" method="post">
                    <fieldset><legend>Login</legend>
                    <label for="login-user">Username:
                        <input id="login-user" name="login-user" type="text" placeholder="Your Username" required>
                    </label>
                    <br>
                    <label for="login-password">Password:
                        <input id="login-password" name="login-password" type="password" placeholder="Make Sure No-one is Looking" required>
                    </label>
                    <br>
                    <a href="#" target="_blank">
                    <button type="submit">Login</button></a>
                    </fieldset>
                </form>
            </div>
        </div>
        <footer class="site-footer">
            <a href="#" target=_blank>Conact Us</a>
        </footer>
</body>
</html>