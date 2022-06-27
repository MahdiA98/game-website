window.onload = checkLogin;//Check to see if user is logged in already

function checkLogin(){
    if(sessionStorage.loggedInUsrEmail !== undefined){
        //Extract details of logged in user
        let usrObj = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail]);
        
        //Say hello to logged in user
        document.getElementById("loginSuccessful").innerHTML = usrObj.username + " logged in.";
    }
}

function login(){
    //Get email address
    let email = document.getElementById("emailInput").value;
    
    //User does not have an account
    if(localStorage[email] === undefined) {
        //Inform user that they do not have an account
        document.getElementById("loginFailure").innerHTML = "Email not recognized. Do you have an account?";
        return; //Do nothing else
    }
    else{//User has an account
        let usrObj = JSON.parse(localStorage[email]);//Convert to object
        let password = document.getElementById("passwordInput").value;
        if(password === usrObj.password){//Successful login
            document.getElementById("loginSuccessful").innerHTML = usrObj.username + " logged in.";
            document.getElementById("loginFailure").innerHTML = "";//Clear any login failures
            sessionStorage.loggedInUsrEmail = usrObj.email;
        }
        else{
            document.getElementById("loginFailure").innerHTML = "Password not correct. Please try again.";
        }
    }
}