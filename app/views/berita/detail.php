<div class="container mt-5 bg-white">

    <h3><?= $data['alt']['nama'] ?></h3>

    <ul class="list-group">
        <li class="list-group-item d-flex">
            <div class="w-25">Harga</div>
            <span class="px-2 text-white fw-bold bg-primary rounded">
                <?php 
                    $fmt = new NumberFormatter( 'id_ID', NumberFormatter::CURRENCY );
                    echo $fmt->formatCurrency($data['alt']['harga'], "IDR");
                ?>
            </span>
        </li>

        <li class="list-group-item d-flex">
            <div class="w-25">Kecepatan Processor</div>
            <span class="px-2 text-white fw-bold bg-primary rounded">
                <?= $data['alt']['kec_processor'] ?> GHz
            </span>
        </li>

        <li class="list-group-item d-flex">
            <div class="w-25">RAM</div>
            <span class="px-2 text-white fw-bold bg-primary rounded">
                <?= $data['alt']['ram'] ?> GB
            </span>
        </li>

        <li class="list-group-item d-flex">
            <div class="w-25">Tipe Penyimpanan</div>
            <span class="px-2 text-white fw-bold bg-primary rounded text-uppercase">
                <?= $data['alt']['tipe_penyimpanan'] ?>
            </span>
        </li>

        <li class="list-group-item d-flex">
            <div class="w-25">Kapasitas Penyimpanan</div>
            <span class="px-2 text-white fw-bold bg-primary rounded">
                <?= $data['alt']['kap_penyimpanan'] ?>
            </span>
        </li>

        <li class="list-group-item d-flex">
            <div class="w-25">Kartu Grafis</div>
            <span class="px-2 text-white fw-bold bg-primary rounded">
                <?= $data['alt']['kartu_grafis'] ?>
            </span>
        </li>

        <li class="list-group-item d-flex">
            <div class="w-25">Berat</div>
            <span class="px-2 text-white fw-bold bg-primary rounded">
                <?= $data['alt']['berat'] ?> Kg
            </span>
        </li>
        <li class="list-group-item d-flex">
            <div class="w-25">Ukuran Layar</div>
            <span class="px-2 text-white fw-bold bg-primary rounded">
                <?= $data['alt']['ukuran_layar'] ?> inch
            </span>
        </li>
        <li class="list-group-item d-flex">
            <div class="w-25">Ketebalan</div>
            <span class="px-2 text-white fw-bold bg-primary rounded">
                <?= $data['alt']['ketebalan'] ?> mm
            </span>
        </li>
    </ul>

    <div class="mt-5">
        <a href="<?= BASEURL; ?>/alternatif" class="btn btn-outline-secondary">Kembali</a>
    </div>

</div>