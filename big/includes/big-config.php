<?php

/*
big-config.php

Used to store all of our IT162 big page configuration information

*/

//echo $_SERVER['PHP_SELF'];


define("THIS_PAGE", basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

//place your site keys here (keys for web-students.net posted here)
$siteKey = "6LcvvTYaAAAAAC4K1ES_0ZJYUCIjzgQGrAKa-E2z";
$secretKey = "6LcvvTYaAAAAACYQHMxfaF5I-kgDdDPg8NuLvz5a";

// this helps eliminate PHP date errors
date_default_timezone_set('America/Los_Angeles'); #sets default 

// this switch section alters the title and logo depending on the page
//$logo_color = ''; //make logo_color an empty string by default
switch(THIS_PAGE){
        
    case "index.php":
        $title = "Edwin's Big page";
        $logo = "fa-home";
        $pageId = "Client Questionaire";
    break;
        
    case "flexbox.php":
        $title = "Flexbox Research";
        $logo = "fa-universal-access";
        $pageId = "Flexbox Research";
    break;
        
    case "galleries.php":
        $title = "Galleries";
        $logo = "fa-universal-access";
        $pageId = "Galleries";
    break;
        
    case "calendar.php":
        $title = "Google calendar";
        $logo = "fa-universal-access";
        $pageId = "Google calendar";
    break;
        
    case "map.php":
        $title = "Google map";
        $logo = "fa-universal-access";
        $pageId = "Google map.";
    break;
        
    case "youtube.php":
        $title = "Youtube";
        $logo = "fa-universal-access";
        $pageId = "Youtube";
    break;
        
    case "shoppingcarts.php":
        $title = "Shoppingcarts";
        $logo = "fa-universal-access";
        $pageId = "Shoppingcarts";
    break;
        
    case "siteapp.php":
        $title = "Responsive vs Native App";
        $logo = "fa-universal-access";
        $pageId = "Responsive vs Native App";
    break;
         
    case "webcam.php":
        $title = "Webcam Cam";
        $logo = "fa-universal-access";
        $pageId = "Webcam Cam";
    break;
        
    default: 
        $title = THIS_PAGE;
        $logo = "";
        $pageId = "";
        
} // end of switch section 

?>
