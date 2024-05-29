<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="hero bg-light text-center py-5">
    <div class="container">
        <h2 class="display-4">Welcome to My Portfolio</h2>
        <p class="lead">I am a versatile computer science student with skills in both writing and programming.</p>
        <a href="<?= base_url('/projects') ?>" class="btn btn-dark">View My Work</a>
    </div>
</section>

<section class="roles py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">As a Writer</h2>
                <p>I have written numerous articles, blogs, and books. My writing spans various genres and topics, reflecting my versatility and passion for storytelling.</p>
                <ul>
                    <li>Article Writing</li>
                    <li>Blogging</li>
                    <li>Copywriting</li>
                    <li>Editing and Proofreading</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="text-center">As an IT student</h2>
                <p>I specialize in web and game development. My coding skills include both front-end and back-end development.</p>
                <ul>
                    <li>Web Development</li>
                    <li>Database Management</li>
                    <li>Game Development</li>
                    <li>Project Management</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>