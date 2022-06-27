// creating canvas in HTML and getting drawing properties and functions
const canvas = document.getElementById("canvas");
const ctx = canvas.getContext('2d');

// setting canvas height and width
canvas.width = 900;
canvas.height = 600;

// variable to position and set player
var player = {
    x: canvas.width / 2,
    y: (canvas.height / 2) + 150,
    width: 49,
    height: 67,
};

// variable to position and set enemy
var enemy = {
    x: Math.random() * 800 + 50,
    y: -70,
    width: 47,
    height: 55,
};

// variable to position and set bullet
var bullet = {
    x: -5,
    y: -5,
    width: 10,
    height: 19,
    speed: 5,
}

// variable to position and set lives
var lives = {
    x: 50,
    y: 50,
    width: 200,
    height: 200,
}

// variables that store initial score and lives
var score = 0;
var lives = 3;

// array that holds and deleteds keydown and keyup
const keys = [];

// creating image object and sourcing them. includes player, enemy, background and more
const playerSprite = new Image();
playerSprite.src = "../images/tank_sprites.png";

const enemySprite = new Image();
enemySprite.src = "../images/enemy_sprites.png";

const bulletSprite = new Image();
bulletSprite.src = "../images/bullet_sprite.png";

const livesSprite = new Image();
livesSprite.src = "../images/lives.png";

const background = new Image();
background.src = "../images/background_game.jpg";


// main game loop function that draws all images and clears canvas every second to create motion objects. Also call several functions created for different features of game i.e movement, shooting, collision etc
function gameLoop() {

    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.drawImage(background, 0, 0, canvas.width, canvas.height); // drawing background image to canvas

    ctx.font = "30px Arial";
    ctx.fillText("Score: " + score, 750, 40); // creating score and positioning it to top right
    ctx.fillText("Lives:  " + "", 25, 40); // creating lives and positioning it to top left

    ctx.drawImage(playerSprite, 119, 133, player.width, player.height, player.x, player.y, player.width, player.height); // drawing player sprite and using drawImage() parameters to clip image from sprite sheet
    movement();

    ctx.drawImage(enemySprite, 121, 145, enemy.width, enemy.height, enemy.x, enemy.y, enemy.width, enemy.height); // same as player, but with enemy sprite
    enemyMove();

    ctx.drawImage(bulletSprite, 7, 5, bullet.width, bullet.height, bullet.x, bullet.y, bullet.width, bullet.height); // same as player and enemy, but with bullet sprite
    bulletMove();
    shoot();


    // draws and clips hearts sprite sheet based on amount of lives 
    if (lives == 3) {
        ctx.drawImage(livesSprite, 0, 0, 150, 40, 105, 14, 100, 33);
    }
    else if (lives == 2) {
        ctx.drawImage(livesSprite, 48.8, 0, 150, 40, 105, 14, 100, 33);
    }
    else if (lives == 1) {
        ctx.drawImage(livesSprite, 97, 0, 150, 40, 105, 14, 100, 33);
    }

    collide(player, enemy); // passes player and enemy in collide()
    bulletCollide(bullet, enemy); // passes bullet and enemy in bulletCollide()

    // performs animation and updates before next repaint
    requestAnimationFrame(gameLoop);
}

// enter key => add keycode to array
window.addEventListener("keydown", function (e) {
    keys[e.keyCode] = true;
});

// release key => deletes array variable
window.addEventListener("keyup", function (e) {
    delete keys[e.keyCode];
});

// function that allows movement by adding/subtracting 2 to player x or y (depending on key input). Boundaries set after AND condition so player doesn't move past canvas.
function movement() {
    if ((keys[38] || keys[87]) && player.y > 50) { // up arrow and 'w'
        player.y -= 2
    }
    if ((keys[40] || keys[83]) && player.y < 500) { // down arrow and 's'
        player.y += 2
    }
    if ((keys[37] || keys[65]) && player.x > 20) { // left arrow and 'a'
        player.x -= 2
    }
    if ((keys[39] || keys[68]) && player.x < 820) { // right arrow and 'd'
        player.x += 2
    }
}

// set shooting to false
var shooting = false;

// if spacebar pressed, set bullet position to slightly above the tank
function shoot() {
    if (keys[32] && shooting == false) {
        bullet.x = player.x + 18;
        bullet.y = player.y - 15;
        bulletMove();
    }
}

/* shooting set to true and set bullet.y to speed 5 (minus so it moves upwards). If statement to check whether bullet is past top of canvas, where it then sets shooting to false.
   prevents error where if the user shoots while bullet is still in canvas area, it would spawn back to the tank area */
function bulletMove() {
    shooting = true;
    bullet.y -= 5;
    if (bullet.y < 0) {
        shooting = false;
    }
}

// increment enemy y position to move it down the canvas. If y position greater than canvas height, initiate enemySpawn()
function enemyMove() {
    enemy.y += 1;
    if (enemy.y > canvas.height) {
        enemySpawn();
    }
}

// sets player x to middle of canvas and just above the bottom of canvas
function playerSpawn() {
    player.x = canvas.width / 2;
    player.y = (canvas.height / 2) + 150;
}

// sets bullet spawn after collision or shooting to outside of canvas, to hide it
function bulletSpawn() {
    bullet.x = -5;
    bullet.y = -5;
}

// sets enemy x to random value between 800 and 50 and y to outside of the canvas (at the top)
function enemySpawn() {
    enemy.x = Math.random() * 800 + 50;
    enemy.y = -70;
}

// rectangular collision condition that takes in two parameters a and b. if all conditions met, decrement lives and pass playerSpawn() and enemySpawn()
function collide(a, b) {
    if (a.x < b.x + b.width &&
        a.x + a.width > b.x &&
        a.y < b.y + b.height &&
        a.y + a.height > b.y) {
        lives--;
        if (lives < 0) { // if lives less than 0, alert, add score and reload page
            alert("GAME OVER!");
            document.location.reload();
            addScore();
        }
        playerSpawn();
        enemySpawn();
    }
}

// similar to previous collision detection, but with different results. Takes in bullet and enemy, where all conditions met = score incrementation and bulletSpawn() + enemySpawn().
function bulletCollide(a, b) {
    if (a.x < b.x + b.width &&
        a.x + a.width > b.x &&
        a.y < b.y + b.height &&
        a.y + a.height > b.y) {
        score++;
        bulletSpawn();
        enemySpawn();
    }
}

/* function that parses local storage data (retrieved using session storage login email) and storing it in object 'user'.
   create object array and set its values as username and score of object 'user'. Set first array containing this so multiple arrays aren't created. if statement that checks if
   'userScores' is in local storage. If true, stringify in JSON format in local storage for key 'userScores'. If false (exisiting), let create temporary object and parse local 
   storage data into it. Used helper function .push() in order to set new data at end of array as opposed to start. Called this in gameLoop(). */
function addScore() {
    let user = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail]);

    let userObj = [];
    userObj = { username: user.username, gameScore: score };

    userObjFirst = [{ username: user.username, gameScore: score }];

    if (localStorage["userScores"] === undefined) {
        localStorage.setItem("userScores", JSON.stringify(userObjFirst));
    }
    else {
        let userObjTemp = JSON.parse(localStorage["userScores"]);
        userObjTemp.push(userObj);
        localStorage.setItem("userScores", JSON.stringify(userObjTemp));
    }
}

// calling gameLoop function
gameLoop();