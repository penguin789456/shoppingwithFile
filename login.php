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
    $_SESSION["tel"] = $_POST["tel"];
    $userFileName = "user/" . $_POST["tel"].".txt";
    $userFile = fopen($userFileName, 'a');
    fclose($userFile);


    ?>
</body>

</html>