<!-- start: Content -->
<div id="content" class="span10">

    <?php
    $nik = $this->session->userdata('username');
    $pengguna = $this->authentication_model->dataPengguna($nik);
    ?>

    <div class="row-fluid sortable">
        <div class="box span11">
            <div class="box-header" data-original-title>
                <h2><i class="icon-user"></i><span class="break"></span>User</h2>
                <div class="box-icon">
                    <?php if (!in_array($pengguna->level, ["Operator"])): ?>
                        <a href="<?php echo site_url('akses/addAkun') ?>" class="halflings-icon white plus"></a>
                    <?php endif; ?>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered table-condensed bootstrap-datatable datatable">
                    <thead>
                        <tr class="gray-table">
                            <th>
                                <div align="center">No</div>
                            </th>
                            <th>
                                <div align="center">Username</div>
                            </th>
                            <th>
                                <div align="center">Address</div>
                            </th>
                            <th>
                                <div align="center">City</div>
                            </th>
                            <th>
                                <div align="center">Number</div>
                            </th>
                            <th>
                                <div align="center">ID Paypal</div>
                            </th>
                            <th>
                                <div align="center">Birth</div>
                            </th>
                            <th>
                                <div align="center">Gender</div>
                            </th>
                            <th>
                                <div align="center">Email</div>
                            </th>
                            <th>
                                <div align="center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $i = 1 ?>
                            <?php foreach ($akun as $row): ?>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row->username; ?></td>
                                <td><?php echo $row->address; ?></td>
                                <td><?php echo $row->city; ?></td>
                                <td><?php echo $row->number; ?></td>
                                <td><?php echo $row->id_paypal; ?></td>
                                <td><?php echo $row->birth; ?></td>
                                <td><?php echo $row->gender; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td>
                                    <div align="center">
                                        <?php echo anchor('akses/editAkun/' . $row->id_akun, '<i class="icon-edit"></i>', array('class' => 'btn btn-mini btn-success', 'title' => 'Edit')); ?>
                                        <?php echo anchor('akses/deleteAkun/' . $row->id_akun, '<i class="icon-trash"></i>', array('class' => 'btn btn-mini btn-danger', 'onclick' => "return confirm('Are you sure to delete this employee?')", 'title' => 'Delete')); ?>
                                    </div>
                                </td>

                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
</div><!--/.fluid-container-->