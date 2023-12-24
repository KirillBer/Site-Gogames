<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $comment = $_POST["comment"];

    echo "Your name is $name <br>";
    echo "Your email is $email <br>";
    echo "Your age is $age <br>";
    echo "Your recommendation is $comment <br>";
    echo "Thank you for your recommandations!<br>";
}
?>

