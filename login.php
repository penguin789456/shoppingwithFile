<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            margin: auto;
            width: 400px;
            height: auto;
        }

        .container h1 {
            text-align: center;
        }
        .container img{
            width: 250px;
        }
    </style>

</head>

<body>
    <?php
    session_start();
    /*$_SESSION["tel"] = $_POST["tel"];
    $userFileName = "user/" . $_POST["tel"] . ".txt";
    $userFile = fopen($userFileName, 'a');
    fclose($userFile);*/
    //set user
    
    $file = file("product.txt");
    $product = array();
    foreach ($file as $x) {
        array_push($product, explode(",", $x));
    }
    //set product array
    ?>
    <div class="container">
        <h1>商品目錄</h1>
        <table>
            <?php
                foreach ($product as $det) {
                    echo "<tr>
                    <td rowspan='3'><img src='pics\\".$det[3]."'></td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>123</td>
                </tr>
                <tr>
                    <td>123</td>
                </tr>
                <tr>
                    <td colspan='2' style='text-align:center'><a href=>加入購物車</a></td>
                </tr>";
                }
            ?>
    </div>
    </table>
</body>

</html>