var format = /\d[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

function checkFirstName(){
    let yourFirstName = document.getElementById("first-name").value;
    if (yourFirstName.match(/\d/) || yourFirstName.match(format) || yourFirstName == ""){
        document.getElementById("firstName-warining").style.display = 'block';
        document.getElementById("firstName-accept").style.display = 'none';
    } else {
        document.getElementById("firstName-warining").style.display = 'none';
        document.getElementById("firstName-accept").style.display = 'block'; 
    }
}

function checkLastName(){
    let yourLastName = document.getElementById("last-name").value;
    if (yourLastName.match(/\d/) || yourLastName.match(format) || yourLastName == ""){
        document.getElementById("lastname-warining").style.display = 'block';
        document.getElementById("lastname-accept").style.display = 'none';
    } else {
        document.getElementById("lastname-warining").style.display = 'none';
        document.getElementById("lastname-accept").style.display = 'block'; 
    }
}

function checkEmail(){
    let yourEmail = document.getElementById("your-email").value;
    if ((/^[a-zA-Z]\w+@[a-zA-Z0-9]+.[a-zA-Z]{2,4}$/).test(yourEmail)){
        
        let flagEmail = true;
        async function showData() {
            const response = await fetch('http://localhost/MasterPeice/CODING/components/users-data.php');
            const data = await response.json();
            
            data.forEach(function (element) {
        
                if(element.email == yourEmail){
                    flagEmail = false;
                }
        
            } );
            if (flagEmail == false){
                alert('This email is already registerd. Please Login.');
                document.getElementById("email-accept").style.display = 'none'; 
                document.getElementById("email-warining").style.display = 'block';
            } else {
                document.getElementById("email-accept").style.display = 'block'; 
            }
        }
        
        showData();
        document.getElementById("email-warining").style.display = 'none';
    } 
    else {
        document.getElementById("email-warining").style.display = 'block';
        document.getElementById("email-accept").style.display = 'none'; 
    }
}

function checkMobile(){
    let yourMobile = document.getElementById("your-mobile").value;

    if(/^07[7-9]\d{7}$/.test(yourMobile)){
        document.getElementById("mobile-warining").style.display = 'none';
        document.getElementById("mobile-accept").style.display = 'block'; 
    } else {
        document.getElementById("mobile-warining").style.display = 'block';
        document.getElementById("mobile-accept").style.display = 'none'; 
    }
}

var passREG = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
function checkPass(){
    let yourPassword = document.getElementById("your-password").value;

    if (yourPassword.match(passREG)){
        document.getElementById("password-warining").style.display = 'none';
        document.getElementById("password-accept").style.display = 'block'; 
    } else {
        document.getElementById("password-warining").style.display = 'block';
        document.getElementById("password-accept").style.display = 'none'; 
    }
}

function checkConfirmation(){
    let yourPassword = document.getElementById("your-password").value;
    let confirmationPass = document.getElementById("confirm-your-password").value;

    console.log(confirmationPass);

    if (confirmationPass == yourPassword){
        document.getElementById("confirm-warining").style.display = 'none';
        document.getElementById("confirm-accept").style.display = 'block'; 
    } else {
        document.getElementById("confirm-warining").style.display = 'block';
        document.getElementById("confirm-accept").style.display = 'none'; 
    }
}

