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
                        Edit Post
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
                            <i class="feather-plus-circle mr-2 text-primary"></i>Edit
                            Post
                        </h4>
                        <a
                            href="<?php echo $url;?>post_list.php"
                            class="feather-menu btn btn-outline-primary"
                        ></a>
                    </div>
                    <hr />

                    <?php
                    $id=$_GET['id'];
                    $current= post($id);

                    if(isset($_POST['updatePost'])){
                        if(postUpdate()){
                            linkto('post_list.php');
                        }
                    }

                    ?>
                    <form action="#" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $current['title']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Select Category</label>
                            <select name="category_id" id="" class="custom-select">
                                <?php
                                foreach (categories() as $c)
                                {
                                    ?>
                                    <option value="<?php echo $c['id']?>" <?php echo  $c['id']==$current['category_id']?"selected":""?>><?php echo $c['title']?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Post Description</label>
                            <textarea type="text" name="description" rows="10" class="form-control" required><?php echo $current['description']?></textarea>
                        </div>
                        <hr />
                        <button class="btn btn-primary" name="updatePost">Edit Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include "template/footer.php" ?>