<?php

session_start(); 
include("myfunctions.php");
include("account.php");

session_unset();	//destroy session variables
session_destroy();	//destroys session
redirect("Logging out. One moment please.", "http://localhost/IT202-Project-Meier/login.html");	//return to login.html

?>