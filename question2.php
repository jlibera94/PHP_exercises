<?php
    date_default_timezone_set('EST');
    if (!isset($_COOKIE["time"])) {
        $cookieValue = 1;
    } else {
        $cookieValue = ++$_COOKIE["time"];
    }
    setcookie("time", $cookieValue, time()+(86400*365));

    $cookieLastVisit = date("D M j G:i:s T Y");
	
    setcookie("lastVisit", $cookieLastVisit, time()+(86400*365));
?>


<html>
  <head>
    <title>numOfVIsits</title>
  </head>
  <body>
    <?php
      if ($cookieValue == 1){
        echo ("Welcome to my webpage! It is the first time that you are here.");
      } else {

        echo("Hello, this is the " . $_COOKIE["time"]  . " time that you are visiting my webpage.<br> Last time you visited my webpage on: " . $cookieLastVisit."." );

      }
    ?>
  </body>
</html>