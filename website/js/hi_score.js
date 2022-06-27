// get local storage data
let user = JSON.parse(localStorage["userScores"]);

// sorts scores in descending order
user.sort(function(a, b) {return b.gameScore - a.gameScore});

// for loop to iterate 10 times, gets table row (first is one below table headings) and sets second cell of table to username and third as score.
for(var i = 0; i < 10; i++) {
    var table = document.getElementById("myTable").rows[i + 1].cells;
    table[1].innerHTML = user[i].username;
    table[2].innerHTML = user[i].gameScore;
}