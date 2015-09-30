<?php
session_start();
session_set_cookie_params(3600,'/','localhost',true,false);
mb_internal_encoding('UTF-8');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$title?></title>
    </head>
