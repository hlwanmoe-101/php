<?php require_once "./core/base.php" ?>
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
<body style="background: var(--primary-soft)">
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center text-primary">
                        <i class="feather-users"></i>
                        Login Page
                    </h4>
                    <hr>
                    <?php
                    if(isset($_POST['login-btn'])){
                        echo login();
                    }
                    ?>

                    <form method="post">
                        <div class="form-group">
                            <i class="feather-mail text-primary"></i>
                            <label for="email">Your Email</label>
                            <input class="form-control" type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <i class="feather-lock text-primary"></i>
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" required>
                        </div>
                        <div class="form-group mb-0 ">
                            <button class="btn btn-primary" name="login-btn">Sign In</button>
                            <a href="register.php" class="btn btn-outline-primary">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo $url; ?>assets/vendor/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="<?php echo $url; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url; ?>assets/vendor/way_point/jquery.waypoints.js"></script>
<script src="<?php echo $url; ?>assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url; ?>assets/vendor/chart_js/Chart.min.js"></script>
<script src="<?php echo $url; ?>assets/js/app.js"></script>
<script src="<?php echo $url; ?>assets/js/dashboard.js"></script>
</body>
</html>