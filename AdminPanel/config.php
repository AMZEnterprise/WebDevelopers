<?php

$content = file_get_contents('../config/db.cfg');
$content = substr($content, strpos($content,"*/" ) + 2);
$content = substr($content , strpos($content , "'") + 1);

/****************************/
$host = substr($content , 0 ,strpos($content,"'"));
/****************************/

$content = substr($content , strpos($content , "'") + 1);
$content = substr($content , strpos($content , "'") + 1);

/****************************/
$user = substr($content , 0 ,strpos($content,"'"));
/***************************/

$content = substr($content , strpos($content , "'") + 1);
$content = substr($content , strpos($content , "'") + 1);

/***************************/
$pass = substr($content , 0 ,strpos($content,"'"));
/***************************/

$content = substr($content , strpos($content , "'") + 1);
$content = substr($content , strpos($content , "'") + 1);

/***************************/
$dbname = substr($content , 0 ,strpos($content,"'"));
/***************************/
?>