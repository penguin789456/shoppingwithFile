<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        $total = $_SESSION["total"];
        $tel = $_SESSION["tel"];


        $fileN="bill.txt";
        $fp = fopen($fileN,"a");
        date_default_timezone_set('Asia/Taipei'); //設定時間為台北時區
        $date = date('YmdHis');
        $content = "$date,$tel,$total";
        fwrite($fp,"$content");
        fclose($fp);
        echo "<h1>感謝購買總金額為：".$_SESSION["total"]."</h1>";
    ?>
    <h2><a href="shoping.php">返回商品目錄</a></h2>
</body>
</html>
