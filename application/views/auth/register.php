<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Whatsapp Api" />
    <meta name="author" content="amriarendy" />
    <link rel="icon" href="<?= base_url() ?>public/uploads/favicon.ico" />
    <title><?= $title ?></title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<!-- Custom styles for this template-->
<link href="<?= base_url() ?>/public/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-black">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register</h1>
                            </div>
                            <form class="user" action="<?= site_url('register') ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fullName" placeholder="Full Name">
                                    <?= form_error('fullName', '<span class="text-danger"></span>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <?= form_error('email', '<span class="text-danger"></span>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <?= form_error('password', '<span class="text-danger"></span>') ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    Registration
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= site_url('login') ?>">Have account? login!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/public/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/public/js/sb-admin-2.min.js"></script>
</body>

</html>