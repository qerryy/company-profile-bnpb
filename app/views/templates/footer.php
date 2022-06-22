    <footer class="<?= isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1 ? 'd-none' : 'd-block' ?> bg-dark text-light">
        <div class="row py-5 px-3">
            <div class="col-4">
                <img src="<?= BASEURL; ?>/img/logo-bpbd.png" alt="Logo BPBN">
            </div>

            <div class="col-4">
                <h6>KANTOR PUSAT</h6>
                <div class="d-flex flex-column">
                    <h6>Graha BNPB - Jl. Pramuka Kav.38 Jakarta Timur 13120</h6>
                    <span>Telp.021-29827793</span>
                    <span>Fax.021-21281200</span>
                    <span>Email: persuratan@bnpb.go.id</span>
                    <br>
                    <h6>Pusdalop BNPB</h6>
                    <span>Telp. +62 21 29827444 , 117</span>
                    <span>+62 812 1237 575</span>
                    <span>Email:pusdalops@bnpb.go.id</span>
                </div>
            </div>

            <div class="col-4">
                <h6>TAUTAN TERKAIT</h6>
                <div class="list-group">
                    <a href="https://bnpb.co.id/nasional" target="_blank" rel="noopener" class="bg-dark text-light border-0 border-bottom rounded-0 list-group-item list-group-item-action">Nasional</a>
                    <a href="https://bnpb.co.id/internasional" target="_blank" rel="noopener" class="bg-dark text-light border-0 border-bottom rounded-0 list-group-item list-group-item-action">Internasional</a>
                    <a href="https://bnpb.co.id/bpbd-propinsi" target="_blank" rel="noopener" class="bg-dark text-light border-0 border-bottom rounded-0 list-group-item list-group-item-action">BPBD Provinsi</a>
                    <a href="https://bnpb.co.id/bpbd-kota-kabupaten" target="_blank" rel="noopener" class="bg-dark text-light border-0 border-bottom rounded-0 list-group-item list-group-item-action">BPBD Kabupaten/Kota</a>
                    <a href="https://bnpb.co.id/sitemap" target="_blank" rel="noopener" class="bg-dark text-light border-0 border-bottom rounded-0 list-group-item list-group-item-action">Peta Situs</a>
                </div>
            </div>
        </div>
    </footer>

    </main>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src="<?=BASEURL;?>/js/bootstrap.bundle.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>
</html>