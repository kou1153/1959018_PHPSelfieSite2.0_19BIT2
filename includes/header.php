<?php
$navlinks = ["home", "gallery", "mysanity", "aboutme"];
$current_page = basename($_SERVER['SCRIPT_NAME'], ".php");

function outputNav($navlinks, $current_page) {
  $output = '';
  foreach($navlinks as $link) {
    ## switch home to index for href
    if($link == "home") {
      $href = "index";
    } else {
      $href = $link;
    }

    ## set active class if href == $current_page
    $class = '';
    if($href == $current_page) {
      $class = "activehehe";
    }
    if($current_page != 'mysanity'){
    $output.= "<li><a href='{$href}.php' class='{$class}'>" . ucfirst($link) . "</a></li>";
    }
  }
  echo $output;
}

function cssCase($current_page) {
  $cssName = "";
  switch ($current_page) {
    case 'index':
      $cssName = 'master.css';
      break;
      case 'gallery':
        $cssName = 'gallery.css';
        break;
        case 'mysanity':
          $cssName = 'mysanity.css';
          break;
          case 'aboutme':
            $cssName = 'aboutme.css';
            break;
  }

  echo $cssName;
}

function dynamicTitles($current_page) {
  $pageName = "";
  switch ($current_page) {
    case 'index':
      $pageName = 'Home';
      break;
      case 'gallery':
        $pageName = 'Gallery';
        break;
        case 'mysanity':
          $pageName = 'Gomenasorry';
          break;
          case 'aboutme':
            $pageName = 'sad piece of';
            break;
  }
  echo $pageName;
}
 ?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Depression | <?php dynamicTitles($current_page); ?> </title>

    <link rel="stylesheet" href=<?php cssCase($current_page);  ?>>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="header">
   
    <?php 
    $cringeQuote = "<h1>Welcome!</h1>
    <p>You Either Die A Person,<br>Or You Live Long Enough To See Yourself Become A Weeb</p>";

    if ($current_page == 'index') {
      echo $cringeQuote;
    }
    ?>

    <div class="nav">
      <nav>
        <ul>
        <?php 
            outputNav($navlinks,$current_page);
          ?>
        </ul>
      </nav>
    </div>
    </div>
