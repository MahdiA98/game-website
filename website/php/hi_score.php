<?php
    include('common.php');

    outputHeader("High Scores Page"); //outputs everything within head of html
    outputBannerNavigation("HI SCORE") //outputs navigation bar
?>

    <h1 id="tableHeader"> <img src="../images/trophy.png"> Ranking Table <img src="../images/trophy.png"></h1> <!-- header for table with images on either site -->

    <table id="myTable"> <!-- table containing 3 coloumns, Rank, Name and Score -->
        <tr>
            <th>RANK</th> <!-- headings for coloumns -->
            <th>NAME</th>
            <th>SCORE</th>
        </tr>
        <tr>
            <td>1st</td> <!-- table data for each row -->
            <td>...</td>
            <td>0</td>
        </tr>
        <tr>
            <td>2nd</td>
            <td>...</td>
            <td>0</td>
        </tr>
        <tr>
            <td>3rd</td>
            <td>...</td>
            <td>0</td>
        </tr>
        <tr>
            <td>4th</td>
            <td>...</td>
            <td>0</td>
        </tr>
        <tr>
            <td>5th</td>
            <td>...</td>
            <td>0</td>
        </tr>
        <tr>
            <td>6th</td>
            <td>...</td>
            <td>0</td>
        </tr>
        <tr>
            <td>7th</td>
            <td>...</td>
            <td>0</td>
        </tr>
        <tr>
            <td>8th</td>
            <td>...</td>
            <td>0</td>
        </tr>
        <tr>
            <td>9th</td>
            <td>...</td>
            <td>0</td>
        </tr>
        <tr>
            <td>10th</td>
            <td>...</td>
            <td>0</td>
        </tr>
    </table>

    <script src="../js/hi_score.js"> </script>

<?php
    outputFooter() //outputs footer that is stored in common.php
?>