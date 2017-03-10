<?php
    $phone = trim($_POST["phone2"]);

    if ( empty($phone) ) {
        http_response_code(400);
        echo "Proszę wpisać numer telefonu!";
        exit;
    }

	require_once('db.php');
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$conn -> query ('SET NAMES utf8');
	$conn -> query ('SET CHARACTER_SET utf8_unicode_ci');
    $sql = "INSERT INTO numbers ( number ) VALUES ( :phone )";
    $st = $conn -> prepare ( $sql );
    $st -> bindValue( ":phone", $phone, PDO::PARAM_INT );

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