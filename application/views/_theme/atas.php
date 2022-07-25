<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <link href="<?php echo base_url('assets/css/') ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugin/datatables/') ?>jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugin/fontawesome/') ?>all.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('assets/img/') ?>logo-tni-ad.png">
    <meta name="theme-color" content="#712cf9">

    <style>
        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Rekrutment TNI-AD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <?php if ($this->uri->segment(1) == 'home') { ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url('home') ?>">Home</a>
                        </li>
                    <?php } elseif ($this->uri->segment(1) == '') { ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url('home') ?>">Home</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo base_url('home') ?>">Home</a>
                        </li>
                    <?php } ?>

                    <?php if ($this->uri->segment(1) == 'pendaftaran') { ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url('pendaftaran') ?>">Pendaftaran</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('pendaftaran') ?>">Pendaftaran</a>
                        </li>
                    <?php } ?>

                    <?php if ($this->uri->segment(1) == 'data_peserta') { ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url('data_peserta') ?>">Data Perserta</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo base_url('data_peserta') ?>">Data Perserta</a>
                        </li>
                    <?php } ?>

                </ul>

                <div class="d-flex" role="search">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->

                    <?php if ($this->session->userdata('is_login') == 1) { ?>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalLogout">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout Admin
                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalLogin">
                            <i class="fa-solid fa-right-to-bracket"></i> Login Admin
                        </button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>