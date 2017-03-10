<?php
    $name = trim($_POST["name"]);
    $number = trim($_POST["number"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    $date = date('Y-m-d');

    if ( empty($name) OR empty($message) OR empty($number) OR empty($email) ) {
        http_response_code(400);
        echo "Proszę uzupełnić wszystkie dane";
        exit;
    }

    require_once('db.php');
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $conn -> query ('SET NAMES utf8');
    $conn -> query ('SET CHARACTER_SET utf8_unicode_ci');
    $sql = "INSERT INTO emails ( date, name, number, email, message ) VALUES ( :date, :name, :number, :email, :message )";
    $st = $conn -> prepare ( $sql );
    $st -> bindValue( ":date", $date, PDO::PARAM_STR );
    $st -> bindValue( ":name", $name, PDO::PARAM_STR );
    $st -> bindValue( ":number", $number, PDO::PARAM_STR );
    $st -> bindValue( ":email", $email, PDO::PARAM_STR );
    $st -> bindValue( ":message", $message, PDO::PARAM_STR );

    if ($st -> execute()) {
        http_response_code(200);
        echo "Dzięki! Wiadomość została wysłana!";
    } else {
        http_response_code(500);
        echo "Błąd. Wiadomość nie została wysłana!";
    }

    $conn = null;
    $_POST = array();
?>