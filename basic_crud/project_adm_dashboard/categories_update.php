
<?php include "template/header.php"?>
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item">
                    <a href="index.php"><i class="feather-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="categories_list.php">Category List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add Category
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
                        <i class="feather-plus-circle mr-2 text-primary"></i>Add
                        Category
                    </h4>
                    <a
                        href="categories_list.php"
                        class="feather-menu btn btn-outline-primary"
                    ></a>
                </div>
                <hr />

                <?php
                    $row=categoryShow($_GET['id']);

                    if(isset($_GET['updateBtn'])){
                        if(categoryUpdate()){
                            echo "<script> location.href='categories_list.php'</script>";
                        }
                    }
                ?>
                <form method="get">
                    <div class="input-group">
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        <input type="text" name="message" class="form-control" value="<?php echo $row['message']?>" required>
                        <button class="btn btn-primary" name="updateBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"?>
