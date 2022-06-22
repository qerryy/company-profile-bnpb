<div class="container py-5 px-4 bg-white">

    <form action="<?= BASEURL; ?>/berita/store"  method="POST">

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <div class="mb-4">
            <label for="berita" class="form-label">Isi Berita</label>
            <textarea name="berita" class="form-control" id="berita" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>

        <div class="mt-5">
            <a href="<?= BASEURL; ?>/berita" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>

</div>