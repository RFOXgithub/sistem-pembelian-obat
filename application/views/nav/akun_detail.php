<!-- start: Content -->
<div id="content" class="span10">

    <div class="row-fluid sortable">
        <div class="box span11">
            <div class="box-header">
                <h2><i class="icon-user"></i><span class="break"></span>User Detail</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" role="form" action="" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Username</label>
                            <div class="controls">
                                <input type="text" class="span6" name="username" value="<?php echo $akun->username; ?>" readonly />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Address</label>
                            <div class="controls">
                                <input type="text" class="span6" name="address" value="<?php echo $akun->address ?>" readonly />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">City</label>
                            <div class="controls">
                                <input type="text" class="span6" value="<?php echo $akun->city ?>" readonly />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Number</label>
                            <div class="controls">
                                <input type="text" class="span6" name="number" value="<?php echo $akun->number ?>" readonly />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">ID Paypal</label>
                            <div class="controls">
                                <input type="text" class="span6" name="id_paypal" value="<?php echo $akun->id_paypal ?>" readonly />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Birth</label>
                            <div class="controls">
                                <input type="date" class="span6" name="birth" value="<?php echo date('Y-m-d', strtotime($akun->birth)) ?>" readonly />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Gender</label>
                            <div class="controls">
                                <input type="text" class="span6" name="gender" value="<?php echo $akun->gender ?>" readonly />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input type="email" class="span6" name="email" value="<?php echo $akun->email ?>" readonly />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/span-->

    </div><!--/row-->

</div><!--/.fluid-container-->