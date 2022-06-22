<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary py-1 shadow-sm">
    <div class="container">
        <a class="navbar-brand fs-5" href="<?= BASEURL; ?>">
            <img src="<?= BASEURL; ?>/img/logo-bpbd.png" alt="Logo BPBN">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= BASEURL; ?>">BERANDA</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ABOUT
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/home/sejarah">SEJARAH</a></li>
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/home/visiMisi">VISI & MISI</a></li>
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/home/tugasFungsi">TUGAS & FUNGSI</a></li>
                    </ul>
                </li>

                <?php if ( isset($_SESSION['user_id']) ) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">DAFTAR BENCANA</a>
                    </li>
                <?php endif; ?>
            </ul>
            
            <div class="navbar-nav">
                <?php if ( isset($_SESSION['user_id']) ) : ?>
                    <a
                        class="btn btn-outline-light"
                        href="<?= BASEURL; ?>/auth/logout"
                        role="button"
                    >
                        Logout
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a>

                <?php else : ?>
                    <a
                        class="btn btn-outline-light w-100 mb-2 mb-lg-0"
                        href="<?= BASEURL; ?>/auth">
                        Log In
                    </a>

                <?php endif; ?>
            </div>
        </div>

    </div>
</nav>