<?php $this->load->view('layouts/header') ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <?php $this->load->view('layouts/sidebar') ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php $this->load->view('layouts/topbar'); ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tambah Data Pengguna</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>
                <!-- Content Row -->
                <div class="row">

                    <div class="col-lg-12">

                        <!-- Circle Buttons -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <form class="user">
                                            <div class="form-group">
                                                <label for="full_name">Nama Lengkap <span style="color: red;">*</span></label>
                                                <input type="email" class="form-control" id="full_name" placeholder="Nama Lengkap">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email <span style="color: red;">*</span></label>
                                                <input type="password" class="form-control" id="email" placeholder="email">
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Status <span style="color: red;">*</span></label>
                                                <select class="form-control" name="" id="">
                                                    <option value="actived" selected>Actived</option>
                                                    <option value="deactived">Deactived</option>
                                                    <option value="suspend">Suspend</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Password <span style="color: red;">*</span></label>
                                                <input type="password" class="form-control" id="email" placeholder="Password">
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="email">No. Handphone</label>
                                                <input type="number" class="form-control" id="exampleInputEmail" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="exampleInputPassword" placeholder="Tanggal Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Jenis Kelamin</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="male" selected>Pria</option>
                                                    <option value="female">Wanita</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-6">
                                        <form class="user">
                                            <div class="form-group">
                                                <label for="email">Provinsi</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="male" selected>DKI Jakarta</option>
                                                    <option value="female">Sumatera Barat</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Kabupaten</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="male" selected>Jakarta Selatan</option>
                                                    <option value="female">Bukittinggi</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Kecamatan</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="male" selected>Sawah Besar</option>
                                                    <option value="female">Baso</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Kelurahan</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="male" selected>Ps. Baru</option>
                                                    <option value="female">Ps. Ateh</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Nama Jalan</label>
                                                <input type="text" class="form-control" id="exampleInputPassword" placeholder="Nama Jalan">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Nomor Rumah</label>
                                                <input type="number" class="form-control" id="exampleInputPassword" placeholder="Nomor Rumah">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Alamat Lengkap</label>
                                                <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button href="index.html" class="btn btn-primary btn-block"> Submit </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php $this->load->view('layouts/foot') ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<?php $this->load->view('layouts/footer') ?>