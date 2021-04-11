<?php

session_start();
require_once  __DIR__. "/../config/database.php";
require_once  __DIR__. "/../config/function.php";
$db = new database;
define("ROOT", $_SERVER['DOCUMENT_ROOT'] ."/student_attendance/public/uploads/");
