<?php require_once "./core/base.php" ?>
<?php require_once  "./core/conn.php" ?>
<?php require_once  "./core/functions.php" ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/vendor/feather-icons-web/feather.css" />
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo $url; ?>assets/vendor/bootstrap/css/bootstrap.css" />


</head>
<body>
<section class="main container-fluid">
    <div class="row">
        <?php include "template/sidebar.php"?>
        <div class="col-12 col-lg-9 col-xl-10 vh-100 py-3 content">
            <div class="row header mb-3">
                <div class="col-12">
                    <div
                            class="
                  p-4
                  bg-primary
                  rounded
                  d-flex
                  justify-content-between
                  align-items-center
                "
                    >
                        <button class="show-sidebar-btn btn btn-link d-lg-none">
                            <i class="feather-menu text-light" style="font-size: 3em"></i>
                        </button>

                        <form action="" method="post" class="d-none d-md-block">
                            <div class="row">
                                <div class="col-8 me-0 pr-0">
                                    <input type="text" class="form-control search-bar" placeholder="Search" />
                                </div>
                                <div class="col-4 mx-0 pl-0">
                                    <button class="btn btn-light">
                                        <i class="feather-search text-primary p-0"></i>
                                    </button>
                                </div>


                            </div>
                        </form>

                        <div class="dropdown">
                            <button
                                    class="btn btn-light dropdown-toggle"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown"
                                    aria-expanded="false"
                            >
                                <img
                                        src="<?php echo $url; ?>assets/img/user/avatar1.jpg"
                                        alt=""
                                        class="user-img shadow-sm"
                                />
                                Hlwan
                            </button>
                            <div
                                    class="dropdown-menu"
                                    aria-labelledby="dropdownMenuButton"
                            >
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider" href="#"></div>
                                <a class="dropdown-item text-danger" href="#"
                                ><i class="feather-log-out"></i> Logout</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
