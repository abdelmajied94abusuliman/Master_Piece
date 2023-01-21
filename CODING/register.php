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
    <title>Register</title>
    

    <style>
        <?php include ("./CSS/register.css") ?>
        <?php include("./components/header.css")?>
        <?php include("./components/footer.css")?>
    </style>

</head>
<body>


    <?php include ("./components/header.php") ?>

    <section>
        <div class="container">
            <h2>Register</h2>
            <form action="">
                <div id="table-form">
                    <div><label>First Name</label></div>
                    <div><input id="first-name" type="text" name="fname" onchange="checkFirstName()"></div>
                    <div id="firstName-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Please don't use numbers or Char. And don't let it empty.</div>
                    <div id="firstName-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Name is okay.</div>
                </div>
                <div id="table-form">
                    <div><label>Last Name</label></div>
                    <div><input id="last-name" type="text" name="lname" onchange="checkLastName()"></div>
                    <div id="lastname-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Please don't use numbers or Char. And don't let it empty.</div>
                    <div id="lastname-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Name is okay.</div>
                </div>
                <div id="table-form">
                    <div><label>E-mail</label></div>
                    <div><input id="your-email" type="email" name="email" onchange="checkEmail()"></div>
                    <div id="email-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Invalid Email.</div>
                    <div id="email-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Email is okay.</div>
                </div>
                <div id="table-form">
                    <div><label>Mobile</label></div>
                    <div><input id="your-mobile" type="number" name="mobile" onchange="checkMobile()"></div>
                    <div id="mobile-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Invalid Number</div>
                    <div id="mobile-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">The Number is okay.</div>
                </div>
                <div id="table-form">
                    <div><label>Password</label></div>
                    <div><input id="your-password" type="password" name="Password" onchange="checkPass()"></div>
                    <div id="password-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Please use at least one Upper-Lower-Number and Special Char.</div>
                    <div id="password-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Password is okay.</div>
                </div>
                <div id="table-form">
                    <td><label>Confirm Password</label></td>
                    <td><input id="confirm-your-password" type="password" name="confirm-Password" onchange="checkConfirmation()"></td>
                    <div id="confirm-warining" style="display: none; color:red; font-size: 12px; margin-bottom: 25px; margin-top:-15px">*Your Password doesn't matched.</div>
                    <div id="confirm-accept" style="display: none; color:green; font-size: 12px; margin-bottom: 25px; margin-top:-15px">Password is okay.</div>
                </div>

                <button id="button-register" type="submit">Register</button>
                <p id="have-account" style="padding-bottom: 35px;">You have already account? <a id="go-with-link" href="./login.php" >Please Login</a></p>

            </form>
        </div>
    </section>
    
    <?php include("./components/footer.php") ?>

    <script src="./js/register.js"></script>
</body>
</html>