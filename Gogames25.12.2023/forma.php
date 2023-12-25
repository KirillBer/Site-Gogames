<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $comment = $_POST["comment"];

    if(trim($name)!="") echo "Your name is $name <br>";
    if(trim($email)!="") echo "Your email is $email <br>";
    if(trim($age)!="") echo "Your age is $age <br>";
    if(trim($comment)!="") echo "Your recommendation is $comment <br>";
    echo "Thank you for your recommandations!<br>";
}
?>

