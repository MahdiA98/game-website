<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
    echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">'; // link to user icon and more
    echo '<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Playball&display=swap" rel="stylesheet">'; // link to review font family
    echo '<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">'; // link to arcade font family
    echo '<script src="http://kit.fontawesome.com/f2942c71c5.js" crossorigin="anonymous"></script>';
    echo '<script src="../js/setup.js"></script>'; // link to social media icons
    echo '</head>';
    echo '<body>';
}

/* Ouputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
    echo '<header>';
    echo '<div class="containerHeader">';
    echo '<div id="logo">';
    echo '<img src="../images/logo.png">';
    echo '</div>';
    echo '<nav>';
    echo '<ul>';
    
    //Array of pages to link to. Removed login page as I wanted it to have an icon next to it, so placed outside of for loop (after it goes through array)
    $linkNames = array("HOME", "GAME", "HI SCORE", "CONTACT");
    $linkAddresses = array("index.php", "game.php", "hi_score.php", "contact.php");

    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<li><a ';
        if($linkNames[$x] == $pageName){
            echo 'id="current" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li>'; //put <li> to display them in a list and have css apply styling. Changed class to my own id tag 
    }
    /* added login seperately as implementing the icon image within the loop applied it to all of the elements in the list.
    This however, made it so that the id current would not apply to it. Tried to come up with a solution but could not find any. Therefore, when user is in login or register page,
    'LOGIN' will not be highlighted in the background colour */ 
    echo '<li><a href="login.php"><i class="fas fa-user"></i> LOGIN</a></li>'; 
    echo '</ul>';
    echo '</nav>';
    echo '</div>';
    echo '</header>';

}

//Outputs closing body tag and closing HTML tag
function outputFooter(){
    echo '<footer>';
    echo '<div class="containerFooter">'; //container box for entire footer
    echo '<div class="footerContact">'; //container box for contact
    echo '<h2>CONTACT</h2>';
    echo '<p>275 Romford Lane <br>London <br>England <br>RM13 8BJ <br>020 7123 1234 <br></p>';
    echo '</div>';

    echo '<div class="footerNav">'; //container box for navigation, with links in unordered list
    echo '<h2>NAVIGATION</h2>';
    echo '<ul>';
    echo '<li><a href="index.php">Home</a></li>';
    echo '<li><a href="game.php">Game</a></li>';
    echo '<li><a href="hi_score.php">Hi-Score</a></li>';
    echo '<li><a href="contact.php">Contact</a></li>';
    echo '<li><a href="login.php">Login</a></li>';
    echo '</ul>';
    echo '</div>';

    echo '<div class="footerAbout">'; //container box for about, with links in unordered list
    echo '<h2>ABOUT</h2>';
    echo '<ul>';
    echo '<li><a href="">About Us</a></li>';
    echo '<li><a href="">Contacts</a></li>';
    echo '<li><a href="">Terms & Conditions</a></li>';
    echo '<li><a href="">Privacy Policy</a></li>';
    echo '<li><a href="">Help Center</a></li>';
    echo '</ul>';
    echo '</div>';

    echo '<div class="footerNewsletter">'; //container box for newsletter
    echo '<form>';
    echo '<h2>NEWSLETTER</h2>';
    echo '<input type="email" placeholder="Enter email...">'; //input field for email
    echo '<button type="submit">SIGN UP</button>'; // button to sign up
    echo '</form>';
    echo '</div>';

    echo '<div class="footerSocial">'; //container box for social that has social media icons
    echo '<a href=""><i class="fab fa-facebook-f"></i></a>';
    echo '<a href=""><i class="fab fa-twitter"></i></a>';
    echo '<a href=""><i class="fab fa-snapchat"></i></a>';
    echo '<a href=""><i class="fab fa-instagram"></i></a>';
    echo '<a href=""><i class="fab fa-youtube"></i></a>';
    echo '</div>';
    echo '</div>';
    echo '</footer>';
}