<?php
include_once "Data.php";
include_once "Student.php";

if(isset($_REQUEST["id"])){
    $student = new Data();
   $students = $student->loadData();
   $student1= $students[$_REQUEST["id"]];
}
?>
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
    <input type="text" name="name" value="<?php echo $student1->name?>">
    <input type="text" name="age" value="<?php echo $student1->age?>">
    <input type="text" name="address" value="<?php echo $student1->address?>">
    <button>Creat</button>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $data = new Data();
    $student = new Student($_REQUEST["name"], $_REQUEST["age"]);
    $student->setAddress($_REQUEST["address"]);
    $data->update($_REQUEST["id"],$student);
    header("location:index.php");

}
?>