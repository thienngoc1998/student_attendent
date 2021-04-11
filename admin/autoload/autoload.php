<?php
session_start();
require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../../config/function.php";
$db = new database;
if (!isset($_SESSION['admin_id'])) {
    header("location:/student/admin/login");
}

define("ROOT", $_SERVER['DOCUMENT_ROOT'] . "/student/public/uploads/")

?>
