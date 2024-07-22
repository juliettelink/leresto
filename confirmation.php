<?php include 'templates/header.php'; ?>

<main class="background-image d-flex flex-column justify-content-center align-items-center">
    <div class="container mt-5">
        <h2 class="text-center text-white mb-4">Confirmation de Réservation</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <p>Merci, <?php echo htmlspecialchars($_GET['name']); ?>.</p>
                        <p>Votre réservation pour le <?php echo htmlspecialchars($_GET['date']); ?> à <?php echo htmlspecialchars($_GET['time']); ?> a été reçue.</p>
                        <p>Elle sera validée par un membre de notre équipe de logistique, et vous recevrez un email de confirmation.</p>
                        <a href="index.php" class="btn btn-dark">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'templates/footer.php'; ?>
