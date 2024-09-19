<!-- start: Content -->
<div id="content" class="span10">

    <?php
    $nik = $this->session->userdata('username');
    $pengguna = $this->authentication_model->dataPengguna($nik);
    ?>

    <div class="row-fluid sortable">
        <div class="box span11">
            <div class="box-header" data-original-title>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered table-condensed bootstrap-datatable datatable">
                    <thead>
                        <tr class="gray-table">
                            <th>
                                <div align="center">ID</div>
                            </th>
                            <th>
                                <div align="center">Username</div>
                            </th>
                            <th>
                                <div align="center">Password</div>
                            </th>
                            <th>
                                <div align="center">Level</div>
                            </th>
                            <th>
                                <div align="center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $i = 1 ?>
                            <?php foreach ($akses as $row): ?>
                                <td><?php echo $row->id_akun; ?></td>
                                <td><?php echo $row->username; ?></td>
                                <td><?php echo $row->password; ?></td>
                                <td><?php echo $row->level; ?></td>
                                <td>
                                    <div align="center"><?php echo anchor('akses/edit/' . $row->id_akun, '<i class="icon-edit"></i>', array('class' => 'btn btn-mini btn-success')) . '  ' . anchor('akses/delete/' . $row->id_akun, '<i class="icon-trash"></i>', array('class' => 'btn btn-mini btn-danger', 'onclick' => "return confirm('Are you sure to delete this user access?')")); ?></div>
                                </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
</div><!--/.fluid-container-->