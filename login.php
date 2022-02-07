<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    if(!empty($name)&& !empty($password)){
        if($name=="admin"&& $password=="12345"){
            header("location:index.php");
        }
    }else{
        echo "Nhap lai ten va mat khau";
    }
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
    <input type="text" name="username" placeholder="username" value="<?php $name?>">
    <input type="password" name="password" placeholder="password">
    <button>Login</button>

</form>
</body>
</html>
