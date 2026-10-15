
<?php
$host = "localhost";
$port = "5432";
$dbname = "ch14db";
$user = "postgres";
$password = "qwerty123";

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $user,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    error_log($e->getMessage());
    echo "Database connection failed.";
}
?>
