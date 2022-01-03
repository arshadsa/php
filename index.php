<?php

$the_username = $POST["username"];

if($the_username!=""){
  print "$the_username";
}else{
  print "<form method='post' action='/test/index.php'>";
  print "Username<br>";
  print "<input type='text' name='username' size='25'><br>";
  print "<input type='submit' value='Go'>";
  print "</form>";
}


?>