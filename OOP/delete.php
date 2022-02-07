<?php
include_once "Data.php";
include_once "Student.php";

if(isset($_REQUEST["id"])){
    $student = new Data();
    $student->delete($_REQUEST["id"]);
    header("location:index.php");
}