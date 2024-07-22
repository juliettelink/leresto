<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_POST['email'];

    // Préparation et exécution de la requête SQL
    $stmt = $conn->prepare("INSERT INTO reservations (name, date, time, email) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $date, $time, $email]);

    // Redirection avec un message de confirmation
    header("Location: confirmation.php?name=" . urlencode($name) . "&date=" . urlencode($date) . "&time=" . urlencode($time));
    exit();
}
?>
