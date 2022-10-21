<?php require_once "core/auth.php"?>
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
                    <a
                        href="<?php echo $url;?>item_list.php"
                        class="feather-menu btn btn-outline-primary"
                    ></a>
                </div>
                <hr />
                <?php
                $id=$_GET['id'];
                $current= category($id);
//                if(isset($_POST['updateCat'])){
//                  if(categoryUpdate($id,$_POST['title'])){
//                      linkto("category_add.php");
//                  }(my code)
                if(isset($_POST['updateCat'])){
                    if(categoryUpdate()){
                        linkto("category_add.php");
                    }

                }

                ?>
                <form method="post">
                    <div class="form-inline">
                        <hr />
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <input type="text" class="form-control mr-3" name="title" value="<?php echo $current['title'];?>">
                        <button name="updateCat" class="btn btn-primary">Update Category</button>
                    </div>
                </form>
                <?php include "template/list.php"?>
            </div>
        </div>
    </div>
</div>
<?php include "template/footer.php" ?>

