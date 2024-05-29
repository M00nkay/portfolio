<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">My Portfolio</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('/') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('/pages/about') ?>">About Me</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('/projects') ?>">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('/pages/contact') ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <?= $this->renderSection('content'); ?>


    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; <?= date('Y') ?> Your Name. All rights reserved.</p>
        </div>
    </footer>

    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>