<div id="content" class="span">
    <?php
    $nik = $this->session->userdata('username');
    $pengguna = $this->authentication_model->dataPengguna($nik);
    ?>

    <div class="row-fluid span10">
        <div class="box span11">
            <div class="box-header"></div>
            <div class="page-header text-center">
                <h1>Detail Produk Toko Alat Kesehatan</h1>
            </div>
            <div class="detail-produk">
                <img src="<?php echo base_url($product['gambar']); ?>" alt="Product Image" class="img-detail" />
                <div class="detail-text">
                    <h1>Nama : <?php echo $product['nama_produk']; ?></h1>
                    <h1>Harga : Rp <?php echo number_format($product['harga'], 0, ',', '.'); ?></h1>
                    <button class="btn btn-success" style="margin-top: 10px; width: 150px;">Buy</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>