<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign up</title>
</head>
<body>
    <div class="box">
        <form action="modeli/registracija.php" method="POST">
            <img src="images/person.png" alt="">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="sifra" placeholder="Password" required>
            <button>Sign Up</button>
            <p class="loginText">Have an account? <a href="http://localhost/domaci_cas_16/login.php#" class="loginColor">Login</a> </p>

     </form> 
    </div>

</body>
</html>
