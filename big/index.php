<?php include "includes/header.php"?>
<!-- START LEFT COL ////////////////////////////// -->

 <p>Help me help you by answering the question below.</p>
    
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

//        echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

</section>
<!-- END LEFT COL //////////////////////////// -->

<!-- START RIGHT COL /////////////////////////////////// -->
<aside >
    
 <h3>Other helpful links for web design help</h3>

 <p><a href="https://tutsplus.com/?_ga=2.137991152.1333841627.1613912373-2110829502.1610668496">tutsplus.com - general web programming and design</a></p>
    
 <p><a href="https://www.w3schools.com/whatis/">w3schools.com - front end web development stuff</a></p>

</aside>
<!-- END RIGHT COL ///////////////////////////////////// -->
<?php include "includes/footer.php"?>