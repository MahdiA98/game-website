<?php
    include('common.php');

    outputHeader("Account Page"); //outputs everything within head of html
    outputBannerNavigation("LOGIN") //outputs navigation bar
?>

<script src="../js/login.js"></script>

    <div class="loginForm"> <!-- class for login container -->
        <img id="loginIcon" src="../images/login_icon.png"> <!-- user icon placed on right of input fields -->

        <h1>Existing users:</h1>

        <div class="loginInputBox">
            <input type="email" id="emailInput" placeholder="Email"> <!-- input field for username/email -->
        </div>

        <div class="loginInputBox">
            <input type="password" id="passwordInput" placeholder="Password"> <!-- input field for password -->
        </div>
        
        <div class="loginInputBox">
        <button onclick="login()" id="loginButton">Login</button> <!-- static 'button' that logins the user -->
        </div>

        <p id="loginFailure"></p>
        <p id="loginSuccessful"></p>

        <h2 id="loginLink"><a href="register.php">Create your account ></a></h2> <!-- link to create an account and send to register.php -->
    </div>

<?php
    outputFooter() //outputs footer that is stored in common.php
?>