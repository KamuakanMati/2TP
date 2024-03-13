<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="rozliczenie2.php" method="post">
        <textarea name="dane" rows=5 cols=40></textarea>
        <input type="submit">
    </form>
    <?php
    $dane="";
    if(!empty($_POST["dane"])){
        $dane = $_POST["dane"];
    }
    include "rozliczenie3.php";

    for($i=0; $i<$n; $i++){
        echo $zakupy[$i]. " ";
    }
    ?>
</body>
</html>