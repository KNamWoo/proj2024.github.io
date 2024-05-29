<?php
    $address = $_POST['address'];
?>

<<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            *{
                font-size: 16px;
                font-family: Consolas, sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Submitted</h1>
        <p>주소는 : <?php echo $address ?> 입니다.</p>
    </body>
</html>