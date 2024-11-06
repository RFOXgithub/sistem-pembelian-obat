<!-- start: Content -->
<div id="content" class="span11">
    <div class="row-fluid sortable">
        <div class="box span11" style="margin-left:30px;">
            <div class="box-header" data-original-title>
                <h2><i class="icon-search"></i><span class="break"></span>Pencarian</h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" method="GET" action="">
                    <div class="control-group">
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Perhatian!</strong> Cari Produk berdasarkan Nama atau Harga
                        </div>
                        <label class="control-label">Cari</label>
                        <div class="controls">
                            <input name="cari" type="text" class="span6 typeahead" id="typeahead" placeholder="Cari Produk" data-provide="typeahead" data-items="8"
                                data-source='<?php echo json_encode($this->produk_model->get()); ?>'>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
                <?php
                $cari = isset($_GET['cari']) ? ($_GET['cari']) : "";
                if ($cari != '') {
                    $list = $this->produk_model->search($cari);
                ?>
                    <table class="table table-striped table-bordered table-condensed bootstrap-datatable datatable">
                        <thead>
                            <tr class="gray-table">
                                <th>
                                    <div align="center">No.</div>
                                </th>
                                <th>
                                    <div align="center">Nama Produk</div>
                                </th>
                                <th>
                                    <div align="center">Harga</div>
                                </th>
                                <th>
                                    <div align="center">Gambar</div>
                                </th>
                                <th>
                                    <div align="center">Aksi</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n = 1; ?>
                            <?php if (!empty($list)): ?>
                                <?php foreach ($list as $row) : ?>
                                    <tr>
                                        <td>
                                            <div align="center">
                                                <?php echo $n++; ?>
                                            </div>
                                        </td>
                                        <td><?php echo htmlspecialchars($row->nama_produk); ?></td>
                                        <td><?php echo htmlspecialchars($row->harga); ?></td>
                                        <td>
                                            <?php if (!empty($row->gambar)): ?>
                                                <img src="<?php echo base_url('/uploads/' . $row->gambar); ?>" alt="<?php echo htmlspecialchars($row->nama_produk); ?>" style="width: 50px; height: auto;">
                                            <?php else: ?>
                                                Tidak ada gambar
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <a href="<?php echo site_url('produk/getProductDetails/' . $row->id_produk); ?>" class="btn btn-info">Detail</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" align="center">Tidak ada produk ditemukan untuk pencarian "<?php echo htmlspecialchars($cari); ?>".</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                <?php
                }
                ?>
            </div>
        </div><!--/span-->
    </div><!--/row-->
</div><!--/.fluid-container-->