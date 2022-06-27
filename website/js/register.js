function storeUser(){ 

    //Build object that we are going to store. Gets value from input fields in HTML and sets to object variable
    var usrObject = {};
    usrObject.username = document.getElementById("usernameInput").value;
    usrObject.email = document.getElementById("emailInput").value;
    usrObject.phonenumber = document.getElementById("phoneNumberInput").value;
    usrObject.password = document.getElementById("passwordInput").value;
    
    /* 4 input validations checking if username field is empty, if email includes '@', if phonenumber is a number and if password length is greater than 8.
    if corresponding conditions not met, appropriate error messages given i.e username = "username must not be empty" in else statements for each nested block */
    if (usrObject.username != "") {
        if(usrObject.email.includes("@")) {
            if(!isNaN(usrObject.phonenumber)) {
                if(usrObject.password.length > 8) {
                    localStorage[usrObject.email] = JSON.stringify(usrObject);
                    document.getElementById("registerSuccessful").innerHTML = "<b>Registration successful.</b>";
                }
                else {
                    document.getElementById("registerFailure").innerHTML = "<b>Password must be longer than 8 characters.</b>";
                }
            }
            else {
                document.getElementById("registerFailure").innerHTML = "<b>Phone number must only contain numbers and not letters.</b>";
            }
        }
        else {
            document.getElementById("registerFailure").innerHTML = "<b>Email must include a '@' symbol.</b>";
        }
    }
    else {
        document.getElementById("registerFailure").innerHTML = "<b>Username must not be empty.</b>";
    }
}
