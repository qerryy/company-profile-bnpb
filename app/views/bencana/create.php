<div class="container py-5 px-4 bg-white">

    <form action="<?= BASEURL; ?>/bencana/store"  method="POST">

        <div class="mb-3">
            <label for="jenis_bencana" class="form-label">Jenis Bencana</label>
            <select class="form-select" id="jenis_bencana" name="jenis_bencana">
                <option value="banjir">Banjir</option>
                <option value="longsor">Longsor</option>
                <option value="kebakaran">Kebakaran</option>
                <option value="covid">Covid</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" required>
        </div>

        <div class="mb-3">
            <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
        </div>

        <div class="mb-3">
            <label for="meninggal" class="form-label">Korban Meninggal</label>
            <input type="number" class="form-control" id="meninggal" name="meninggal" required>
        </div>
        <div class="mb-3">
            <label for="hilang" class="form-label">Korban Hilang</label>
            <input type="number" class="form-control" id="hilang" name="hilang" required>
        </div>
        <div class="mb-3">
            <label for="perawatan" class="form-label">Korban Perawatan</label>
            <input type="number" class="form-control" id="perawatan" name="perawatan" required>
        </div>

        <div class="mt-5">
            <a href="<?= BASEURL; ?>/bencana" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>

</div>