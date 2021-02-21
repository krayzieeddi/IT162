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
        $title = "Edwin's Web dev page of stuff I guess";
        $logo = "fa-home";
        $pageId = "Client Questionaire";
    break;
        
    case "flexbox.php":
        $title = "Flexbox Research";
        $logo = "fa-home";
        $pageId = "Flexbox Research";
    break;
        
    case "galleries.php":
        $title = "Galleries";
        $logo = "fa-home"
        $pageId = "Galleries";
    break;
        
    case "calendar.php":
        $title = "Google calendar";
        $logo = "fa-home";
        $pageId = "Pax West Calendar Event";
    break;
        
    case "map.php":
        $title = "Google map";
        $logo = "fa-home";
        $pageId = "Seattle Central College";
    break;
        
    case "youtube.php":
        $title = "Youtube";
        $logo = "fa-home";
        $pageId = "What is SEO(Search Engine Optimization)";
    break;
        
    case "shoppingcarts.php":
        $title = "Shoppingcarts";
        $logo = "fa-home";
        $pageId = "Shoppingcarts";
    break;
        
    case "siteapp.php":
        $title = "Responsive vs Native App";
        $logo = "fa-home";
        $pageId = "Responsive vs Native App";
    break;
         
    case "webcam.php":
        $title = "Live Cam";
        $logo = "fa-home";
        $pageId = "International Space Station View of Earth";
    break;
        
    default: 
        $title = THIS_PAGE;
        $logo = "";
        $pageId = "";
        
} // end of switch section 

?>
