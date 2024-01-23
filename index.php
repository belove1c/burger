<?php
require("header.php");
require("connect.php"); //файл с данным для подключения

$sql_bur=$link->query("SELECT * FROM `Products`");

$page = $_GET['page'];

if(!isset($page) or $page=='main'){
    require("main.php");
}elseif($page=='menu'){
    require('menu.php');
}elseif($page=='about'){
    require('about.php');
}elseif($page=='contact'){
    require('contact.php');
}



require("footer.php");


?>