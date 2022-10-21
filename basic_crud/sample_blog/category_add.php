<?php require_once "core/auth.php"?>
<?php require_once "core/isEditor&Admin.php"?>
<?php include "template/header.php" ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item">
                    <a href="<?php echo $url;?>dashboard.php"><i class="feather-home"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Category Manager
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card mb-3">
            <div class="card-body">
                <div
                    class="d-flex justify-content-between align-items-center"
                >
                    <h4 class="mb-0">
                        <i class="feather-layers mr-2 text-primary"></i>
                        Category Manager
                    </h4>
                </div>
                <hr />
                <?php
                if(isset($_POST['addCat'])){
                    categoryAdd();
                }

                ?>
                <form method="post">
                    <div class="form-inline">
                        <hr />
                        <input type="text" class="form-control mr-3" name="title">
                        <button name="addCat" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
                <?php include "template/list.php"?>
            </div>
        </div>
    </div>
</div>
<?php include "template/footer.php" ?>

