<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 300px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 mx-auto text-white text-decoration-none">
        <img src="<?= BASEURL; ?>/img/logo-bpbd.png" alt="Logo BPBN">
    </a>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="<?= BASEURL; ?>/berita" class="nav-link text-white d-flex align-items-center <?= ($data['judul'] === 'Berita') ? 'active':'' ?>" aria-current="page">
                <i class="bi bi-newspaper me-2"></i>
                <span>Berita</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= BASEURL; ?>/bencana" class="nav-link text-white d-flex align-items-center <?= ($data['judul'] === 'Bencana') ? 'active':'' ?>" aria-current="page">
                <i class="bi bi-table me-2"></i>
                <span>Bencana</span>
            </a>
        </li>

        <hr>

        <li class="nav-item mt-2">
            <a href="<?= BASEURL; ?>/auth/logout" class="nav-link text-danger d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>