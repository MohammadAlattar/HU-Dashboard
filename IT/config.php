<?php

/* Set database data */
$db_host        = 'localhost';      /* Standard: localhost */
$db_user        = 'root';      /* User name */
$db_password    = 'Attar1234';       /* Password */
$db_name        = 'huu';   /* Name of the database */
$db_table       = 'courses';       /* Table in the database for storing file data */

/* Set file path for downloads without slash at the end */
$filepath       = 'media';


/*
    Please do not change anything from here
*/
$db = new PDO("mysql:host=$db_host;dbname=$db_name","$db_user","$db_password");
?>