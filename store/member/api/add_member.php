<?php
/* $dsn = "mysql:host=localhost;dbname=foodie;charset=utf8";
$pdo = new PDO($dsn, 'root', '');

$pw = md5($_POST['pw']);

$sql = "insert into members(name,acc,pw,birthday,email)
        values('{$_POST['name']}',               
               '{$_POST['acc']}',
               '{$pw}',
               '{$_POST['birthday']}',
               '{$_POST['email']}')";
               
$pdo->exec($sql); */

include "../api/foodie_db.php";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$_POST['pw']=md5($_POST['pw']);

$Members->save($_POST);

header("location: ../index.php");