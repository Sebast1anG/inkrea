<?php

define( "DB_DSN", "mysql:host=sql1.47.pl;dbname=karkasy_page" );
define( "DB_USERNAME", "karkasy_page" );
define( "DB_PASSWORD", "iqvf7IJxv" );

function handleException( $exception ) {
  echo "Przepraszam wystąpił problem. Proszę spróbować poźniej !";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );

?>