<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid m-2">
        <a class="navbar-brand mb-0 h1 text-light">Jadyn Renk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?= echoActiveClassIfRequestMatches("index.php") ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= echoActiveClassIfRequestMatches("resume.php") ?>" href="resume.php">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= echoActiveClassIfRequestMatches("cover.php") ?>" href="cover.php">Cover Letter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= echoActiveClassIfRequestMatches("contact.php") ?>" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>