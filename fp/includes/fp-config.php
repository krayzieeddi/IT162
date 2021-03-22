<?php

/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//echo $_SERVER['PHP_SELF'];


define("THIS_PAGE", basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

// this switch section alters the title and logo depending on the page
//$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
        
    case "index.php":
        $title = "Sandra Lopez Home page";
    break;
        
    case "faq.php":
        $title = "FAQ page";
        
    break;
        
    case "pds.php":
        $title = "professional disclosure statement";
    break;

    case "contact.php":
        $title = "contacts";
    break;

    default: 
        $title = THIS_PAGE;

        
} // end of switch section 


/* 
here is the function to generate links and keep
the highlights on the current page

*/

// $nav1['index.php'] = "Welcome";
// $nav1['big/index.php'] = "Big";
// $nav1['aia.php'] = "AIA";
// $nav1['flowchart.php'] = "Flowchart";
// $nav1['fp/index.php'] = "Final Project";
// $nav1['contactme.php'] = "Contact Edwin";

// function makeLinks($linkArray) 
// {
//     $myReturn = "";
//      foreach($linkArray as $url => $text)
//      {
         
//         if ($url == THIS_PAGE) 
//         {//selected page - add class reference
//             $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
//         } 
//         else {
//             $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
//         }
        
//       }
    
//     return $myReturn;
// }

?>
