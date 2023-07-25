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
        .table_Container{
            width: 1500px;
            display: flex;
            flex-wrap: wrap;
            transform: translateX(-35%);
        }
        td{
            width: 200px;
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
            <div class="table_Container">
                <?php
                    foreach ($product as $det) {
                        echo "<table>
                        <tr>
                        <td rowspan='3'><img src='pics\\".$det[3]."'></td>
                        <td>ID：".$det[0]."</td>
                        </tr>
                        <tr>
                            <td>名稱：".$det[1]."</td>
                        </tr>
                        <tr>
                            <td>價格".$det[2]."</td>
                        </tr>
                        <tr>
                            <td colspan='2' style='text-align:center'><a href=>加入購物車</a></td>
                        </tr>
                        </table>";
                    }
                ?>
            </div>
    </div>
</body>

</html>