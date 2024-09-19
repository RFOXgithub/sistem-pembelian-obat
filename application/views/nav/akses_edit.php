<!-- start: Content -->
<div id="content" class="span10">

    <?php
    $opt_level = array('Admin' => 'Admin', 'Customer' => 'Customer');
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
                <form class="form-horizontal" role="form" action="" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Username</label>
                            <div class="controls">
                                <input value="<?php echo $akses->username; ?>" class="input-xlarge disabled span6" id="disabledInput" disabled="" type="text">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Password</label>
                            <div class="controls">
                                <input class="span6" placeholder="Password" type="text" name="password" value="<?php echo $akses->password; ?>">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Level</label>
                            <div class="controls">
                                <?= form_dropdown('level', $opt_level, $select_level, 'class="span6"'); ?>
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