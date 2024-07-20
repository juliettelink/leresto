<?php include 'templates/header.php'; ?>
<?php include 'config.php'; ?>

<main class="container mt-5">
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM plats WHERE id = ?");
        $stmt->execute([$id]);
        $plat = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($plat) {
            echo "
            <h2 class='text-center mb-5'>{$plat['name']}</h2>
            <div class='row'>
                <div class='col-md-6'>
                    <img src='{$plat['image1']}' class='img-fluid' alt='{$plat['name']}'>
                </div>
                <div class='col-md-6'>
                    <h3>Description</h3>
                    <p>{$plat['description']}</p>
                    <h3>Ingrédients</h3>
                    <p>{$plat['ingredients']}</p>
                    <img src='{$plat['image2']}' class='img-fluid mt-3' alt='{$plat['name']}'>
                </div>
            </div>";
        } else {
            echo "<p>Plat non trouvé.</p>";
        }
    } else {
        echo "<p>ID du plat non spécifié.</p>";
    }
    ?>
</main>

<?php include 'templates/footer.php'; ?>
