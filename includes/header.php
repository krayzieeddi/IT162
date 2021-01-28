<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="utf-8">    
<title><?=$title?></title> 
    
<meta name="viewport" content=”width=device-width, initial-scale=1.0”> <!-- enables the dynamic media resolution -->
<meta name="robots" content="noindex,nofollow"> <!-- tells official bots not to index my page -->

    
<script src="https://use.fontawesome.com/c046a12b1e.js"></script>    
<!-- <script src="https://use.fontawesome.com/6a71565c22.js"></script> vector based icon -->
    
<link rel="stylesheet" href="css/nav.css" >
<link rel="stylesheet" href="css/portal.css" >
<link rel="stylesheet" href="css/form.css" >
<link rel="stylesheet" href="css/contact-form.css">
    
</head> <!-- end of head //////////////////////////////////// -->

<body>
<!-- START WRAPPER main //////////////////////////////////// -->
<main class="wrapper"> 
    
<header> <!-- start of header //////////////////////////////////// -->
    
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i>Edwin Ho IT 162 Portal</a></h1>
       
  <nav>
    <ul class="topnav" id="myTopnav"> 
     <?=makeLinks($nav1)?> 
<!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Edwin</a></li>
-->
  
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    
    </ul>
  </nav>
    
</header> 
<!-- end of header //////////////////////////////////// -->