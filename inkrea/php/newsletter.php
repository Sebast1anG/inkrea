<?php
    $nEmail = trim($_POST["nEmail"]);
    $date = date('Y-m-d');

    if ( $nEmail == '' ) {
        http_response_code(400);
        echo "Proszę wpisać e-mail!";
        exit;
    } else 

	require_once('db.php');
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$conn -> query ('SET NAMES utf8');
	$conn -> query ('SET CHARACTER_SET utf8_unicode_ci');
    $sql = "INSERT INTO newsletter ( date, email ) VALUES ( :date, :nEmail )";
    $st = $conn -> prepare ( $sql );
    $st -> bindValue( ":date", $date, PDO::PARAM_STR );
    $st -> bindValue( ":nEmail", $nEmail, PDO::PARAM_STR );

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