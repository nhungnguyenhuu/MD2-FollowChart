<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="address" placeholder="address">
    <button>Creat</button>
</form>
</body>
</html>
<?php
include_once "Data.php";
include_once "Student.php";

$data = new Data();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if(!isset($_REQUEST["name"]) && !isset($_REQUEST["age"]) && !isset($_REQUEST["address"])){
//        header("location:creatStudent.php");
//    }
    if (empty($_REQUEST["name"]) && empty($_REQUEST["age"]) && empty($_REQUEST["address"])) {
        header("location:creatStudent.php");
    } else {
        $student = new Student($_REQUEST["name"], $_REQUEST["age"]);
        $student->setAddress($_REQUEST["address"]);
        $data->addNewStudent($student);
        header("location:index.php");
    }


}
