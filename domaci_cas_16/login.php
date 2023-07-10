<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <div class="box">
        <form action="modeli/loginUser.php" method="POST">
            <img src="images/person.png" alt="">
            <input type="email" name="email" placeholder="Email Address">
            <input type="password" name="sifra" placeholder="Password">
            <button>Login</button>
            <a href="http://localhost/domaci_cas_16/registracijaKorisnika.php" class="loginColor loginPassword">Create an account</a>
     </form> 
    </div>
</body>
</html>