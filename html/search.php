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
        <p>address is <?php echo $address ?>.</p>
    </body>
</html>