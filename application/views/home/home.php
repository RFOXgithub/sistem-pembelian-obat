<div id="content" class="span10">
    <?php
    $nik = $this->session->userdata('username');
    $pengguna = $this->authentication_model->dataPengguna($nik);
    ?>

    <div class="row-fluid span10">
        <div class="box span11">
            <div class="box-header"></div>
            <div class="page-header text-center">
                <h1>Daftar Produk Toko Alat Kesehatan</h1>
            </div>

            <div class="filter-section text-right" style="margin: 10px 45px 20px 10px;">
                <input type="text" id="search-name" placeholder="Cari berdasarkan nama..." onkeyup="filterProducts()">
                <select id="filter-price" onchange="filterProducts()">
                    <option value="">Pilih Rentang Harga</option>
                    <option value="0-50000">0 - 50.000</option>
                    <option value="51000-100000">51.000 - 100.000</option>
                    <option value="101000-2000000">101.000 - 2.000.000</option>
                    <option value="2010000+">2.000.000+</option>
                </select>
            </div>

            <?php foreach ($product as $row) : ?>
                <div class="span-card statbox product-item" data-name="<?php echo htmlspecialchars($row['nama_produk']); ?>" data-price="<?php echo htmlspecialchars($row['harga']); ?>" ontablet="span6" ondesktop="span2">
                    <img src="<?php echo htmlspecialchars($row['gambar']); ?>" alt="Gambar Produk" class="span-card-img img-fluid">
                    <h4 class="text-center"><?php echo htmlspecialchars($row['nama_produk']); ?></h4>
                    <div class="footer">
                        <button class="btn btn-primary" onclick="location.href='<?php echo site_url('produk/getProductDetails/' . $row['id_produk']); ?>'">View</button>
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="cart-icon">
                <a href="<?php echo site_url('cart'); ?>">
                    <img src="path/to/cart-icon.png" alt="Keranjang" />
                </a>
            </div>

        </div>
    </div>
</div>