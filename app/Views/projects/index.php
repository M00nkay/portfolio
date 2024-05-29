<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="projects py-5">
    <div class="container">
        <h2 class="text-center mb-4">My Projects</h2>
        <p class="text-center lead">Discover a showcase of my work as both a writer and a programmer</p>
        <hr>
        <br>

        <div class="row">
            <div class="col-md-6">
                <h3 class=" text-center mb-3">Writing Projects</h3>
                <div class="row">
                    <?php if (!empty($writing_projects)) : ?>
                        <?php foreach ($writing_projects as $wp) : ?>
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/img/<?= esc($wp['cover']); ?>" class="card-img p-2" style="height: 100%; object-fit: cover;" alt="<?= esc($wp['title']); ?>">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="p-3 mb-2 bg-light border">
                                                    <h5 class="card-title font-weight-bold"><?= esc($wp['title']); ?></h5>
                                                </div>
                                                <p class="card-text"><?= esc($wp['description']); ?></p>
                                                <p class="card-text text-muted"><small>Category: <?= esc($wp['categories']); ?></small>
                                                    <br>
                                                    <small>Status: <?= esc($wp['status']); ?></small>
                                                </p>
                                                <a href="<?= esc($wp['link']); ?>" target="_blank" class="btn btn-dark">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>No writer projects found.</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-6">
                <h3 class="text-center mb-3">Programming Projects</h3>
                <div class="row">
                    <?php if (!empty($programming_projects)) : ?>
                        <?php foreach ($programming_projects as $pp) : ?>
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/img/<?= esc($pp['cover']); ?>" class="card-img p-2" style="height: 100%; object-fit: cover;" alt="<?= esc($wp['title']); ?>">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="p-3 mb-2 bg-light border">
                                                    <h5 class="card-title font-weight-bold"><?= esc($pp['title']); ?></h5>
                                                </div>
                                                <p class="card-text"><?= esc($pp['description']); ?></p>
                                                <p class="card-text text-muted"><small>Category: <?= esc($pp['categories']); ?></small>
                                                    <br>
                                                    <small>Status: <?= esc($pp['status']); ?></small>
                                                </p>
                                                <a href="<?= esc($pp['link']); ?>" target="_blank" class="btn btn-dark">View Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>No programmer projects found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>