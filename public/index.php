<?php
$host = 'db';
$dbname = 'prueba';
$user = '1-17-0619';
$password = '1-17-0619';

echo '<link rel="stylesheet" href="/styles.css">';

$dsn = "pgsql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM users";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) > 0) {
        echo "<table class='styled-table'>";
        echo "<thead><tr><th>ID</th><th>Username</th><th>Correo</th></tr></thead>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontró información";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>