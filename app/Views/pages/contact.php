<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Custom CSS -->
<style>
    .social-links {
        width: 100%;
        text-align: center;
    }

    .social-links a {
        display: inline-block;
        margin: 0 10px;
        color: #333;
        font-size: 24px;
    }

    .social-links img {
        height: 40px;
    }
</style>
</head>

<body>

    <section class="about-me py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Me</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <p class="text-center">I'd love to connect with you! Feel free to reach out through any of the following channels:</p>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/your-profile" target="_blank">
                            <img src="/img/linkedin.png" alt="LinkedIn">LinkedIn
                        </a>
                        <a href="https://www.twitter.com/your-profile" target="_blank">
                            <img src="/img/twitter.png" alt="Twitter">Twitter
                        </a>
                        <a href="https://www.instagram.com/kaykuya" target="_blank">
                            <img src="/img/instagram.png" alt="Instagram">Instagram
                        </a>
                        <!-- Add more social media links as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->endSection(); ?>