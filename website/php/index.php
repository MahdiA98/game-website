<?php
    include('common.php');

    outputHeader("Home page"); //outputs everything within head of html
    outputBannerNavigation("HOME") //outputs navigation bar
?>

    <section>
        <div class="containerBanner"> <!-- container that includes all elements in banner -->
            <div class="banner">
                <h1>LIKE SPACE INVADERS - <br /> <span style="color:green"> BUT WITH TANKS! </span> </h1>
                <p>Dive into the world of Tank Trouble and fight your <br />way through a wave of enemies and secure your place as number one tank.</p>
                <!-- when floating both these to right, it would place first on the right then second next to it. couldnt figure out how to fix this so just swapped their names and nav link-->
                <a href="register.php"><button class="inlineButton" id="button1">Sign up </button> </a>
                <a href="game.php"><button class="inlineButton" id="button2"> Play now</button> </a>
                <img src="../images/tank3.png">
            </div>  
        </div>
    </section>

    <section>
        <div class="containerTextbox"> <!-- container that includes all elements in textbox -->
            <div class="textbox"> <!-- class that styles the textbox heading, paragraph and itself -->
                <h3> ------------ Welcome ------------</h3>
                <p> To the game TANK TROUBLE! Inspired by the infamous Space Invaders, Tank Trouble is set in the scorching deserts of Bahrain, where you are the remaining officer of
                squad 15, trapped and surrounded. With nowhere else to run, you resolve to go out with a bang (literally) and take out as many of the enemy forces as possible. Face off agaisn't 
                a wave of tanks and destroy them to earn yourself points. Get hit by their bullets or via collision, then it is game over. Have fun!</p>
            </div>
        </div>
    </section>

    <section>
        <div class="containerReview"> <!-- container that includes all elements within -->
            <div class="row">
                <div class="coloumn"> <!-- coloumn contains 3 images placed next to each other -->
                    <img src="../images/ign.png" style="width: 100;">
                </div>
                <div class="coloumn">
                    <img src="../images/gamespot.png" style="width: 100;">
                </div>
                <div class="coloumn">
                    <img src="../images/nintendo.png" style="width: 100;">
                </div>
             </div>
        </div>
    </section>

    <section>
        <div class="reviewText"> <!-- class styles text of each heading and positions them -->
            <h1 id="ign">"MASTERPIECE"</h1>
            <h1 id="gamespot">"10/10 - A MUST HAVE"</h1>
            <h1 id="nintendo">"GAME OF THE YEAR"</h1>
        </div>
    </section>

<?php
    outputFooter() //outputs footer that is stored in common.php
?>