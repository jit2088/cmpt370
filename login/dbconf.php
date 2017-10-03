<?php
//DATABASE CONNECTION VARIABLES
$host = "db.cs.usask.ca";  //"127.0.0.1:3306"; // Host name
$username = "cmpt370_rdynam"; //"jin2099"; // Mysql username
$password = "j9mnyOSf1Ewbl8qLngHt"; // Mysql password
$db_name = "cmpt370_rdynam"; // Database name

//DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES

$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_members = $tbl_prefix."members";
$tbl_attempts = $tbl_prefix."loginAttempts";
