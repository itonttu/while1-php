<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
<?php
    $num = 10;
    $cnt= 0;

    // $str = 'クジラ';
    // $str = htmlspecialchars( $str, ENT_QUOTES, 'UTF-8' );

    echo $num,'個の●を表示します。<br>';
    while ($cnt < $num) {
        echo'●';
        $cnt ++;
    }
?>
    <!-- <a href="switch2.html" autofocus>戻る</a> -->
</body>
</html>