<?php

/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define("THIS_PAGE", basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

// this switch section alters the title and logo depending on the page
$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
        
    case "index.php":
        $title = "Edwin's IT162 portal page";
        $logo = "fa-home";
    break;
        
    case "flowchart.php":
        $title = "Edwin's IT162 flowchart page";
        $logo = "fa-pencil-squre-o";
    break;
        
    case "aia.php":
        $title = "Edwin's IT162 AIA page";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
    break;
        
    case "contactme.php":
        $title = "Edwin's IT162 contact page";
        $logo = "fa-pencil-plane-o";
        $logo_color = ' style="color:#0f0"';
    break;
        
    default: 
        $title = THIS_PAGE;
        $logo = "fa-home";
        
} // end of switch section 

$nav1["index.php"] = "Welcome";
$nav1["big/index.php"] = "Big";
$nav1["aia.php"] = "AIA";
$nav1["flowchart.php"] = "Flowchart";
$nav1["fp/index.php"] = "Final Project";
$nav1["contactme.php"] = "Contact Edwin";

/* 
here is the function to generate links and keep
the highlights on the current page

<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Edwin</a></li>
*/

function makeLinks($linkArray) 
{
    /*
    $myReturn = "";
    foreach($nav1 as $url => $text){
        if ($url == THIS_PAGE) {
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        } 
        else {
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
        
        
    } 
    */
    
    $myReturn = "";
     foreach($linkArray as $url => $text)
     {
         
        if ($url == THIS_PAGE) 
        {//selected page - add class reference
            $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        } 
        else {
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
        }
        
        
    }
    
    return $myReturn;
}

?>
