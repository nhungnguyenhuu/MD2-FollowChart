<?php

function creatTable($row, $col)
{
    $arr = [];
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $arr[$i][$j] = rand(10, 50);
        }
    }
    return $arr;
}

function crossPlus($arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[0]); $j++) {
            if ($i = $j) {
                $sum += $arr[$i][$j];
            }
        }
    }
    return $sum;
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST["row"]) && $_REQUEST["col"]){
       $row= $_REQUEST["row"];
       $col= $_REQUEST["col"];
       $arr = creatTable($row, $col);
       echo crossPlus($arr);
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
<form action=""method="post">
    <input type="text" name="row" placeholder="Input row">
    <input type="text" name="col" placeholder="Input col">
    <button>Submit</button>
</form>
<table border="1px">
    <?php foreach ($arr as $numbers): ?>
        <tr>
            <?php foreach ($numbers as $number): ?>
            <td><?php echo $number;?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>

