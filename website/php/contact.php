<?php
    include('common.php');

    outputHeader("Contact page");
    outputBannerNavigation("CONTACT")
?>

<img id="mail" src="../images/mail.png"> <!-- image of mail placed next to contact form, on left -->

    <div class="contactForm"> <!-- class for contact form, giving size, padding, margin and more in css -->
        <h1> Contact Us</h1> 
        <p> Want to get in touch? Fill out the form below to submit your query!</p>

        <div class="inputBox"> 
            <label>FIRST NAME:</label> <!-- input field for first name, in form of text -->
            <input type="text" name="" value="" placeholder="Your first name..."> 
        </div>

        <div class="inputBox">
            <label>LAST NAME:</label> <!-- input field for last name, in form of text -->
            <input type="text" name="" value="" placeholder="Your last name...">
        </div>

        <div class="inputBox">
            <label>EMAIL ADDRESS:</label> <!-- input field for email, in form of email -->
            <input type="email" name="" value="" placeholder="Your email...">
        </div>

        <div class="inputBox"> 
            <label>QUERY:</label> <!-- input field for query, in form of text within a textarea (can be adjusted in size) -->
            <textarea placeholder="Enter your query..."></textarea>
        </div>

        <a id="buttonContact">SEND</a> <!-- static 'button' that sends message -->
    </div>

<?php
    outputFooter() //outputs footer that is stored in common.php
?>