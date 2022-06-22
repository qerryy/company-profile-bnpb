<div class="container py-5 px-4 bg-white">
    <div>
        <div class="row">
            <div class="col-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <h3><?= $data['judul']; ?></h3>
            <a href="<?= BASEURL; ?>/berita/create" class="btn btn-primary mb-3">Tambah Berita</a>
        </div>

        <div class="table-responsive">
            <table class="table table-sm table-hover border">
                <thead class="text-secondary text-center align-middle">
                    <tr>
                        <th scope="col">#</th>
                        <th class="fw-normal" scope="col">Tanggal</th>
                        <th class="fw-normal" scope="col">Judul</th>
                        <th class="fw-normal" scope="col">Action</th>
                    </tr>
                </thead>

                <tbody class="align-middle text-center">
                    <tr>
                        <th scope="row">
                            1
                        </th>
                        <td scope="row">
                            9 April 2022
                        </td>
                        <td scope="row">
                            Sebanyak 394 Warga Kota Medan Bertahan di Rumah Saat Banjir
                        </td>

                        <td scope="row">
                            <a 
                                href="<?= BASEURL; ?>/berita/detail" 
                                class="btn btn-outline-success" 
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Berita"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="d-flex bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                            </a>

                            <a 
                                href="<?= BASEURL; ?>/berita/edit" 
                                class="btn btn-outline-primary"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Berita"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="d-flex bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>

                            <a  href="<?= BASEURL; ?>/berita/delete"
                                class="btn btn-outline-danger"
                                onclick="return confirm('Yakin untuk menghapus?');"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Berita"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="d-flex bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>