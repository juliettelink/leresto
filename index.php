<?php include 'templates/header.php'; ?>
<?php include 'config.php'; ?>

<main>
    <div class="background-image">
        <h1>Le Resto</h1>
        <div class="clock">
            <?php
            $stmt = $conn->query("SELECT id, name, image1 FROM plats");
            $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($plats as $key => $plat) {
                echo "<div class='plat' style='transform: rotate(" . ($key * 60) . "deg) translate(250px) rotate(-" . ($key * 60) . "deg);'>
                        <a href='plat.php?id=" . $plat['id'] . "'><img src='" . $plat['image1'] . "' alt='" . $plat['name'] . "'></a>
                      </div>";
            }
            ?>
        </div>
    </div>
</main>
<?php include 'templates/footer.php'; ?>
