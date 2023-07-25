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
        echo "<h1>感謝購買總金額為：".$_SESSION["total"]."</h1>";
    ?>
    <h2><a href="shoping.php">返回商品目錄</a></h2>
</body>
</html>
