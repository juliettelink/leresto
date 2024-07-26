<?php include 'templates/header.php'; ?>
<?php include 'config.php'; ?>

<main class="content-wrapper">
    <div class="container">
        <h2 class="text-center mb-5 text-white">Notre Carte</h2>
        <h3 class="text-white mt-5">Nos entrées</h3>
        <div class="row">
            <?php
                // Récupération des entrées
                $stmt = $conn->query("SELECT id, prix, name, description, ingredients, image1 FROM entrees");
                $entrees = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
                foreach ($entrees as $entree) {
                    $short_description = substr($entree['description'], 0, 100); // Ajuste le nombre de caractères
                    echo "
                    <div class='col-md-4 mb-4'>
                        <div class='card'>
                            <img src='{$entree['image1']}' class='card-img-top' alt='{$entree['name']}'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$entree['name']}</h5>
                                <p class='card-text'>{$entree['prix']} €</p>
                                <p class='card-text short-description'>{$short_description}...</p>
                                <p class='card-text full-description d-none'>{$entree['description']}</p>
                                <button class='btn btn-secondary show-more'>Voir plus</button>
                            </div>
                        </div>
                    </div>";
                }
            ?>
        </div>
        <h3 class="text-white mt-5">Nos plats</h3>
        <div class="row">
            <?php
                // Récupération des plats
                $stmt = $conn->query("SELECT id, name, prix, description, image1 FROM plats");
                $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($plats as $plat) {
                    echo "
                    <div class='col-md-4 mb-4'>
                        <div class='card'>
                            <img src='{$plat['image1']}' class='card-img-top' alt='{$plat['name']}'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$plat['name']}</h5>
                                <p class='card-text'>{$plat['prix']} €</p>
                                <a href='plat.php?id={$plat['id']}' class='btn btn-dark'>Voir le plat</a>
                            </div>
                        </div>
                    </div>";
                }
            ?>
        </div>
        <h3 class="text-white mt-5">Nos desserts</h3>
        <div class="row">
            <?php
                // Récupération des desserts
                $stmt = $conn->query("SELECT id, name, prix, description, ingredients, image1 FROM desserts");
                $desserts = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($desserts as $dessert) {
                    $short_description = substr($dessert['description'], 0, 100); // Ajuste le nombre de caractères
                    echo "
                    <div class='col-md-4 mb-4'>
                        <div class='card'>
                            <img src='{$dessert['image1']}' class='card-img-top' alt='{$dessert['name']}'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$dessert['name']}</h5>
                                <p class='card-text'>{$dessert['prix']} €</p>
                                <p class='card-text short-description'>{$short_description}...</p>
                                <p class='card-text full-description d-none'>{$dessert['description']}</p>
                                <button class='btn btn-secondary show-more'>Voir plus</button>
                            </div>
                        </div>
                    </div>";
                }
            ?>
        </div>
    </div>
</main>

<script>
    document.querySelectorAll('.show-more').forEach(button => {
        button.addEventListener('click', () => {
            const cardBody = button.parentElement;
            const shortDescription = cardBody.querySelector('.short-description');
            const fullDescription = cardBody.querySelector('.full-description');

            shortDescription.classList.toggle('d-none');
            fullDescription.classList.toggle('d-none');
            button.textContent = button.textContent === 'Voir plus' ? 'Voir moins' : 'Voir plus';
        });
    });
</script>

<?php include 'templates/footer.php'; ?>
