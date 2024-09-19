<!-- start: Main Menu -->
<div id="sidebar-left" class="span3">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <?php
            $username = $this->session->userdata('username');
            $pengguna = $this->authentication_model->dataPengguna($username);
            ?>
            <?php if ($pengguna->level != "Admin" && $pengguna->level != "Customer") : ?>
                <li><a href="<?php echo base_url(); ?>"><i class="icon-dashboard"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                <li><a href="<?php echo base_url(); ?>tracking"><i class="icon-search"></i><span class="hidden-tablet"> Pencarian</span></a></li>
            <?php else : ?>
                <li><a href="<?php echo base_url(); ?>"><i class="icon-dashboard"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                <li><a href="<?php echo base_url(); ?>tracking"><i class="icon-search"></i><span class="hidden-tablet"> Pencarian</span></a></li>
                <li><a href="<?php echo base_url(); ?>aset"><i class="icon-gift"></i><span class="hidden-tablet">Katalog</span></a></li>
                <li>
                    <a class="dropmenu" href="#"><i class="halflings-icon white chevron-right"></i><span class="hidden-tablet"> &nbsp;Pengguna</span></a>
                    <ul>
                        <li><a class="submenu" href="<?php echo base_url(); ?>karyawan"><i class="icon-user"></i><span class="hidden-tablet"> &nbsp; Karyawan</span></a></li>
                        <li><a class="submenu" href="<?php echo base_url(); ?>akses"><i class="icon-key"></i><span class="hidden-tablet"> &nbsp; Akses</span></a></li>
                    </ul>
                </li>
            <?php endif; ?>

        </ul>
    </div>
</div>
<!-- end: Main Menu -->

<noscript>
    <div class="alert alert-block span10">
        <h4 class="alert-heading">Warning!</h4>
        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
</noscript>