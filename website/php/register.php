<?php
    include('common.php');

    outputHeader("Account Page"); //outputs everything within head of html
    outputBannerNavigation("LOGIN") //outputs navigation bar
?>

    <script src="../js/register.js"></script>

    <div class="loginForm"> <!-- class for login container -->
        <img id="loginIcon" src="../images/login_icon.png"> <!-- user icon placed on right of input fields -->

        <h1 id="registerHeading">Create an account:</h1>
        <div class="loginInputBox">
            <input type="email" name="usernameInput" id="usernameInput" placeholder="Username"> 
        </div>
        <div class="loginInputBox">
            <input type="email" name="emailInput" id="emailInput" placeholder="Email"> 
        </div>
        <div class="loginInputBox">
            <input type="email" name="phoneNumberInput" id="phoneNumberInput" placeholder="Phone number"> 
        </div>
        <div class="loginInputBox">
            <input type="password" name="passwordInput" id="passwordInput" placeholder="Password"> <!-- input field for password -->
        </div>
        <h2 id="registerLink"><a href="login.php">Already have an account? Sign in ></a></h2> <!-- link to sign in and send to login.php -->
        <button type="button" onclick="storeUser()" id="registerButton"> Register </button>
        <p id="registerFailure"></p>
        <p id="registerFailure"></p>
        <p id="registerSuccessful"></p>
    </div>

<?php
    outputFooter() //outputs footer that is stored in common.php
?>