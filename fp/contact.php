  
<?php include "includes/header.php";?>

<main>

<h1>Contact Me</h1>

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
        $website = "edwinhocodes";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

</main>
<?php include "includes/footer.php";?>