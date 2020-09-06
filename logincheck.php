<?php
session_start();

if(isset($_POST['newmember'])){
  header("location:newmemberpage.php");
  exit();
}elseif(isset($_POST['login'])){
  
}else{
  header("location:mission6top-page.php");
  exit();
}
?>