<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="about-me py-5">
    <div class="container">
        <h2 class="text-center mb-4">About Me</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="/img/my_profile.jpg" alt="Profile Picture" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px;">
                <h3>Kayla Sandi Putri Hanisahlia</h3>
                <p></p>
            </div>
            <div class="col-md-8">
                <p>Hello! I'm Kayla, known in the writing world as Kaykuya, a versatile computer science student with a passion for both writing and programming. My unique journey began with a love for storytelling, which naturally extended into the world of code and digital creation. With my diverse experiences, I bring a unique blend of creativity and technical expertise to everything I do.</p>
                <p>I am a dynamic and dedicated individual who thrives at the intersection of technology and creativity. My journey as a computer science student and writer has equipped me with a unique skill set that I am eager to bring to new and exciting challenges.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h4>Skills</h4>
                <ul class="list-group">
                    <li class="list-group-item">Article Writing</li>
                    <li class="list-group-item">Blogging</li>
                    <li class="list-group-item">Copywriting</li>
                    <li class="list-group-item">Editing and Proofreading</li>
                    <li class="list-group-item">Web Development</li>
                    <li class="list-group-item">Database Management</li>
                    <li class="list-group-item">Game Development</li>
                    <li class="list-group-item">Project Management</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Education</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5>Computer Science</h5>
                        <p>[Muhammadiyah University of Sukabumi], [2021-now]</p>
                    </li>
                    <li class="list-group-item">
                        <h5>Natural Science</h5>
                        <p>[Public High School 4 of Sukabumi], [2019-2021]</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h4>Experience</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5>Student exchange at Islamic University of Makassar</h5>
                        <p>[4 months]</p>
                        <p>Immersed myself in a new culture, forming lasting connections and gaining invaluable insights into global perspectives</p>
                    </li>
                    <li class="list-group-item">
                        <h5>Editor leader at Student's Press Unit</h5>
                        <p>[1 year]</p>
                        <p>Guided my team in producing high-quality content, fostering creativity, and upholding journalistic integrity</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>