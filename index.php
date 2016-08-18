<?php
/*
 *  © CryptoDice 
 *  
 *  
 *    
*/


header('X-Frame-Options: DENY'); 

$init=true;
include './inc/start.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $settings['title'].' - '.$settings['description']; ?></title>
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="stylesheet" type="text/css" href="themes/<?php echo $settings['activeTheme']; ?>/main.css">
    <link rel="stylesheet" type="text/css" href="content/ext/msgbox/Styles/msgBoxLight.css">
    <link rel="stylesheet" type="text/css" href="content/ext/qtip/jquery.qtip.min.css">
  </head>
  <body>
    <?php include './themes/'.$settings['activeTheme'].'/frontpage.php'; ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.2.4.js"></script>
    <script type="text/javascript" src="content/ext/msgbox/Scripts/jquery.msgBox.js"></script>
    <script type="text/javascript" src="content/ext/qtip/jquery.qtip.min.js"></script>
    <script type="text/javascript" src="js/colors.js"></script>    
    <?php include './js/includer.php'; ?>
  </body>
</html>
<?php include './inc/end.php'; ?>
