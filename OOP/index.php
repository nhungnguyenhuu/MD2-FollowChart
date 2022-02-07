<?php
include_once "Data.php";
include_once "Student.php";

$data = new Data();
//$student = new Student("Nhung", 112);
$students = $data->loadData();

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
<a href="creatStudent.php">Creat New Student</a>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key=>$student): ?>
    <tr>
        <td><?php echo $key+1 ?></td>
        <td><?php echo $student->name ?></td>
        <td><?php echo $student->age ?></td>
        <td><?php echo $student->address ?></td>
        <td><a onclick="return confirm('Are you sue?')" href="delete.php?id=<?php echo $key?>">Delete</a></td>
        <td><a href="update.php?id=<?php echo $key?>">Update</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
    
</table>
</body>
</html>


