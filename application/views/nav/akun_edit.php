<!-- start: Content -->
<div id="content" class="span10">

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <div class="box-icon">

                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content alerts">
                <div class="alert alert-block ">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-heading">Warning!</h4>
                    <p>
                    <p>If your position doesn't exist, please contact IT Officer UPN Veteran Jawa Timur</p>
                    </p>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" role="form" action="" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">NIK</label>
                            <div class="controls">
                                <input type="text" class="span6" name="nik" value="<?php echo $karyawan->nik ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama</label>
                            <div class="controls">
                                <input type="text" class="span6" name="nama" value="<?php echo $karyawan->nama ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Posisi</label>
                            <div class="controls">
                                <?= form_dropdown('id_jabatan', $jabatan, $select_jabatan, 'class="span6" data-rel="chosen"'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Gedung</label>
                            <div class="controls">
                                <?= form_dropdown('id_gedung', $gedung, $select_gedung, 'class="span6" data-rel="chosen"'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input type="text" class="span6" name="email" value="<?php echo $karyawan->email ?>" />
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            <button type="button" class="btn" onclick="window.history.back()">Batal</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/span-->

    </div><!--/row-->

</div><!--/.fluid-container-->