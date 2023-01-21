<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" This is website to search for apartment in aqaba for rent or buy or show your house for sell ">
    <meta name="author" content="Abdelmajied Akram Abu Suliman">
    <meta name=" Keyword " content=" aqaba , apartment , rent , buy , sell , jordan , tourism , activities in aqaba , red sea , house ">
    <meta name="Copyright" content=" Orange Coding Academy . Designed by Abdelmajied Akram Abu Suliman ">
    <meta name="refresh" content=" 1 ">
    <link rel="icon" type="image/x-icon" href="./IMG/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>log in</title>

    <style>
        <?php include ("./CSS/login.css") ?>
        <?php include("./components/header.css")?>
        <?php include("./components/footer.css")?>
    </style>

</head>
<body>


    <?php include ("./components/header.php") ?>

    <section>
        <div class="container">
            <h2>Login</h2>
            <form action="">
                <label for="">E-mail</label>
                <input type="email" name="email">
                <label for="">Password</label>
                <input type="password" name="Password">
                <p>Forgot Password?</p>
                <button type="submit">Login</button>
                <p id="not-have-account" >Don't have an account? <a id="go-with-link" href="./register.php" >Sign up</a></p>
            </form>
        </div>
    </section>
    
    <?php include("./components/footer.php") ?>
</body>
</html>