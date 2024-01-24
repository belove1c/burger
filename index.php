<?php
require("header.php");
require("connect.php"); //файл с данным для подключения

$query = "SELECT * FROM `Products`";
$result = mysqli_query($connect, $query) or die(mysqli_error($link));

$page = $_GET['page'];

if (!isset($page) or $page == 'main') {
    require("main.php");
} elseif ($page == 'menu') {
    require('menu.php');
} elseif ($page == 'about') {
    require('about.php');
} elseif ($page == 'contact') {
    require('contact.php');
}



require("footer.php");
