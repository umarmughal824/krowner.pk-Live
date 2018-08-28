<?php
/* Connect to an ODBC database using driver invocation */
$conn = "mysql:host=localhost;dbname=krowner5_subscribers_db";
$user = 'krowner5_krowner';
$password = 'Krowner-16';

try {
    $db = new PDO($conn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>