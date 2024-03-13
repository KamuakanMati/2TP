<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kamień papier nożyce</h1>
    <form action="gra.php" method="post">
        <select name="userChoice">
            <option value="kamien">Kamień</option>
            <option value="nozyce">Nożyce</option>
            <option value="papier">Papier</option>
        </select>
        <input type="submit" value="graj">
        </form>
    <?php
        $user = "";
        if(!empty($_POST["userChoice"])){
            $user = $_POST["userChoice"];
        }

        $bot = rand(1,3);
        switch($bot){
            case 1:
                $bot = "kamien";
                break;
            case 2:
                $bot = "nozyce";
                break;
            case 3:
                $bot  = "papier";
                break;
        }

        $result = "";

        if($user == "kamien" && $bot == "kamien"){
            $result = "remis";
        }else if($user == "papier" && $bot == "papier"){
            $result = "remis";
        }else if($user == "nozyce" && $bot == "nozyce"){
            $result = "remis";
        }else if($user == "kamien" && $bot == "papier"){
            $result = "Wygrywa bot";
        }else if($user == "kamien" && $bot == "nozyce"){
            $result = "Wygrywa juzer";
        }else if($user == "nozyce" && $bot == "papier"){
            $result = "WYgrywa juzer";
        }else if($user == "nozyce" && $bot == "kamien"){
            $result = "Wygrywa bot";
        }else if($user == "papier" && $bot == "kamien"){
            $result = "Wygrywa juzer";
        }else if($user == "papier" && $bot == "nozyce"){
            $result = "Wygrywa bot";
        }
        
        echo "juzer: $user, bot: $bot, $result";



    ?>

</body>
</html>