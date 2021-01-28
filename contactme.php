<?php include "includes/header.php";?>

<h2 class="pageID">This is the contact me page.</h2>

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "edwinh300@gmail.com";  //place your/your client's email address here
        $toName = "Edwin Ho"; //place your client's name here
        $website = "IT 162 contact form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

<?php include "includes/footer.php";?>