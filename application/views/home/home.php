<div id="content" class="span">
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
            <?php foreach ($product as $row) : ?>
                <div class="span-card statbox white" ontablet="span6" ondesktop="span2">
                    <img src="<?php echo $row['gambar']; ?>" alt="Gambar Produk" class="span-card-img img-fluid">
                    <div class="footer">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#productModal" data-id="<?= $row['id_produk'] ?>">View</button>
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Product Details Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" id="modalImage" class="img-fluid" alt="Product Image">
                <p id="modalDescription">Deskripsi tidak tersedia.</p>
                <p><strong>Harga:</strong> <span id="modalPrice"></span></p>
            </div>
        </div>
    </div>
</div>

<script>
    $('#productModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var productId = button.data('id');

        var modal = $(this);

        $.ajax({
            url: '<?= base_url("produk/getProductDetails") ?>',
            type: 'GET',
            data: {
                id: productId
            },
            dataType: 'json',
            success: function(data) {
                if (data.error) {
                    alert(data.error);
                } else {
                    modal.find('.modal-title').text(data.nama_produk);
                    modal.find('#modalImage').attr('src', '<?= base_url("assets/images/") ?>' + data.gambar);
                    modal.find('#modalPrice').text(data.harga);
                }
            },
            error: function() {
                alert('Error fetching product details.');
            }
        });
    });
</script>