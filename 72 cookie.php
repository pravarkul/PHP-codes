<?php
setcookie("username","Arnav Kharbanda",time()+30*24*60*60);
if(isset($_COOKIE["username"])){
   echo "Hi" . $_COOKIE["username"];
}else{
  echo "Welcome Guest!","<br>";
}
print_r($_COOKIE);
echo "<br>";
echo "Program by Pravar,(PRN:2220100249)";;
?>