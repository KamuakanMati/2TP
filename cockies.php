<?php
setcookie(
    string $name,
    string $value = "",
    int $expires = 0,
    string $path = "";
    string $domain = "";
    bool $secure = false,
    bool $httponly = false,
):bool

$cookie_name = "user";
$cookie_value = "Kan Jowalski";
setcookie($cookie_name, $cookie_value, time()+20, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie o nazwie '" . $cookie_name . "'nie istnieje";
}
else{
    echo"Cookie '". $cookie_name . "'jest ustawione<br>";
    echo"Przewywana w cookie wartość: " . $_COOKIE[$cookie_name];
}


?>
</body>
</html>