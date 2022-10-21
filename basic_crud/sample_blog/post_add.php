<?php require_once "core/auth.php"?>
<?php include "template/header.php" ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item">
                    <a href="<?php echo $url;?>dashboard.php"><i class="feather-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?php echo $url;?>post_list.php">Post</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add Post
                </li>
            </ol>
        </nav>
    </div>
</div>
<?php
if(isset($_POST['addPost'])){
    postAdd();
}

?>
<form class="row" method="post">
    <div class="col-12 col-xl-8">
        <div class="card mb-3">
            <div class="card-body">
                <div
                    class="d-flex justify-content-between align-items-center"
                >
                    <h4 class="mb-0">
                        <i class="feather-plus-circle mr-2 text-primary"></i>Add
                        Post
                    </h4>
                    <a
                        href="<?php echo $url;?>post_list.php"
                        class="feather-menu btn btn-outline-primary"
                    ></a>
                </div>
                <hr />


                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="form-group mb-0">
                        <label for="title">Post Description</label>
                        <textarea type="text" id="description" name="description" rows="10" class="form-control" required></textarea>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div
                        class="d-flex justify-content-between align-items-center"
                >
                    <h4 class="mb-0">
                        <i class="feather-layers mr-2 text-primary"></i>Select Category

                    </h4>
                    <a
                            href="<?php echo $url;?>post_list.php"
                            class="feather-menu btn btn-outline-primary"
                    ></a>
                </div>
                <hr>
                <div class="form-group">
                    <label>Select Category</label>

                        <?php
                        foreach (categories() as $c)
                        {
                            ?>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio<?php echo $c['id']?>" value="<?php echo $c['id']?>" name="category_id" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio<?php echo $c['id']?>"><?php echo $c['title']?></label>
                            </div>
                            <?php
                        }
                        ?>
                </div>
                <button class="btn btn-primary" name="addPost">Add Post</button>
            </div>
        </div>
    </div>
</form>
<?php include "template/footer.php" ?>
<script>
    $('#description').summernote({
        placeholder: 'Hello',
        tabsize: 2,
        height: 400,

    });
</script>
