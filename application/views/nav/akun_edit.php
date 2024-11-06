<!-- start: Content -->
<div id="content" class="span10">

    <div class="row-fluid sortable">
        <div class="box span11">
            <div class="box-header" data-original-title>
                <h2><i class="icon-user"></i><span class="break"></span>User Edit</h2>
                <div class="box-icon">

                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content alerts">
            </div>
            <div class="box-content">
                <form class="form-horizontal" role="form" action="" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Username</label>
                            <div class="controls">
                                <input type="text" class="span6" name="username" value="<?php echo $akun->username ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Address</label>
                            <div class="controls">
                                <input type="text" class="span6" name="address" value="<?php echo $akun->address ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">City</label>
                            <div class="controls">
                                <?= form_dropdown('city', $city_options, $akun->city, 'class="span6" id="selectError" data-rel="chosen"'); ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Number</label>
                            <div class="controls">
                                <input type="number" class="span6" name="number" value="<?php echo $akun->number ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">ID Paypal</label>
                            <div class="controls">
                                <input type="text" class="span6" name="id_paypal" value="<?php echo $akun->id_paypal ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Birth</label>
                            <div class="controls">
                                <input type="date" class="span6" name="birth" value="<?php echo date('Y-m-d', strtotime($akun->birth)) ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Gender</label>
                            <div class="controls">
                                <label>
                                    <input type="radio" name="gender" value="Male" <?php echo ($akun->gender == 'Male') ? 'checked' : ''; ?> /> Male
                                </label>
                                <label>
                                    <input type="radio" name="gender" value="Female" <?php echo ($akun->gender == 'Female') ? 'checked' : ''; ?> /> Female
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input type="email" class="span6" name="email" value="<?php echo $akun->email ?>" />
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