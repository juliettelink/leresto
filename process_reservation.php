
<?php include 'config.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Préparation et exécution de la requête SQL
    $stmt = $conn->prepare("INSERT INTO reservations (name, date, time) VALUES (?, ?, ?)");
    $stmt->execute([$name, $date, $time]);

    // Redirection avec un message de confirmation
    header("Location: confirmation.php?name=" . urlencode($name) . "&date=" . urlencode($date) . "&time=" . urlencode($time));
    exit();
}
?>
