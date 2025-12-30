<?php
require_once "productModel.php"


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Our Products</h2>

        <div class="row">


            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden text-center">

                    <img
                        src="<?= $p1->getImage() ?>"
                        class="card-img-top img-fluid"
                        alt="Product Image"
                        style="height: 250px; object-fit: cover;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold"><?= $p1->getName() ?></h5>

                        <p class="card-text text-muted small">
                            <?= $p1->getDescription() ?>
                        </p>

                        <p class="mb-1">
                            <span class="fw-semibold">Brand:</span>
                            <span class="text-secondary"><?= $p1->getBrand() ?></span>
                        </p>

                        <p class="mt-auto fs-5 fw-bold text-success">
                            <?= $p1->getFinalPrice() ?> EGP
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden text-center">

                    <img
                        src="<?= $p2->getImage() ?>"
                        class="card-img-top img-fluid"
                        alt="Product Image"
                        style="height: 250px; object-fit: cover;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold"><?= $p2->getName() ?></h5>

                        <p class="card-text text-muted small">
                            <?= $p2->getDescription() ?>
                        </p>

                        <p class="mb-1">
                            <span class="fw-semibold">Brand:</span>
                            <span class="text-secondary"><?= $p2->getBrand() ?></span>
                        </p>

                        <p class="mt-auto fs-5 fw-bold text-success">
                            <?= $p1->getFinalPrice() ?> EGP
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden text-center">

                    <img
                        src="<?= $p3->getImage() ?>"
                        class="card-img-top img-fluid"
                        alt="Product Image"
                        style="height: 250px; object-fit: cover;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold"><?= $p3->getName() ?></h5>

                        <p class="card-text text-muted small">
                            <?= $p3->getDescription() ?>
                        </p>

                        <p class="mb-1">
                            <span class="fw-semibold">Brand:</span>
                            <span class="text-secondary"><?= $p3->getBrand() ?></span>
                        </p>

                        <p class="mt-auto fs-5 fw-bold text-success">
                            <?= $p3->getFinalPrice() ?> EGP
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>