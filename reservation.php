<?php include 'templates/header.php'; ?>
<?php include 'config.php'; ?>

<main class="background-image d-flex flex-column justify-content-center align-items-center">
    <div class="container mt-5">
        <h2 class="text-center text-white mb-4">Réservation de salle</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="process_reservation.php" method="POST">
                            <div class="form-group">
                                <label for="name">Nom:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Heure:</label>
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Réserver</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'templates/footer.php'; ?>
