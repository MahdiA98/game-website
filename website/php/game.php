<?php
    include('common.php');

    outputHeader("Game page"); //outputs everything within head of html
    outputBannerNavigation("GAME") //outputs navigation bar
?>

<h3 id="overviewHeader">Overview</h3> <!-- container for overview textbox -->
    <p id="overview">Tank Trouble is a simple and short game that replicates the once popular, Space Invaders. Control the remaining tank from squad 15 and fight your way through a 
        wave of enemy forces, until your inevitable demise. Score points by taking down opposing tanks with your projectiles and survive as long as possible by manuevering your tank 
        from their charge. Good Luck! </p>
    <div class="box2"> <!-- classes for controls, each including a heading and paragraph -->
        <h3>Shooting:</h3>
        <p>Use left click or spacebar to shoot projectiles <img src="../images/icon_c_space.png"></p> <!-- images placed next to p tag -->
    </div>

    <div class="box3">
        <h3>Game Interface:</h3>
        <p>Player score is in top right and player lives in top left.</p>
    </div>

    <div class="box1">
        <h3>Movement:</h3>
        <p>Use WASD or Arrow keys to control the ship <img src="../images/icon_c_wasd.png"> / <img src="../images/icon_c_arrows.png"></p> <!-- images placed next to p tag -->
    </div>

    <canvas id="canvas"> <button type="button" id="start">start</button> </canvas>
    <script src="../js/game.js"> </script>


<?php
    outputFooter() //outputs footer that is stored in common.php
?>