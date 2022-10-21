<div class="col-12 col-md-4">
    <div class="front-panel-sidebar">
        <div class="card mb-4">
            <div class="card-body">
                <?php if(isset($_SESSION['user']['id'])){ ?>
                    <p>Hi <b><?php echo $_SESSION['user']['name'] ?></b> </p>
                    <a href="dashboard.php" class="btn btn-primary">Go Dashboard</a>
                <?php }else{?>
                    <p>Hi <b> Guest</b> </p>
                    <a href="login.php" class="btn btn-primary">Go to Login</a>
                <?php }?>
            </div>
        </div>
        <h4>Category List</h4>
        <div class="list-group mb-4">
            <div class="list-group">
                <a href="<?php echo $url;?>index.php" class="list-group-item list-group-item-action <?php echo isset($_GET['category_id'])? '':'active' ?>">All Categories</a>
                <?php foreach (fCategories() as $c){ ?>
                    <a href="post_by_category.php?category_id=<?php echo $c['id'];?>"
                       class="list-group-item list-group-item-action
                       <?php echo isset($_GET['category_id'])? $_GET['category_id']==$c['id']? "active" :'' :'' ?>">
                        <?php if($c['ordering']==1){ ?>
                            <i class="feather-paperclip text-primary"></i>
                        <?php }?>
                        <?php echo $c['title']; ?></a>
                <?php } ?>
            </div>
        </div>
<!--        <div class="mb-4">-->
<!--            <h4>Advertisement</h4>-->
<!--            <img src="--><?php //echo $url;?><!--/assets/img/ad.png " class="w-100" alt="">-->
<!--        </div>-->
        <div class="">
            <h4>Search By Date</h4>
            <div class="card">
                <div class="card-body">
                    <form action="serach_by_date.php" method="post">
                        <div class="form-group">
                            <lable>Start Date</lable>
                            <input type="date" name="start" required class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>End Date</lable>
                            <input type="date" name="end" required class="form-control">
                        </div>
                        <button class="btn btn-primary"><i class="feather-calendar"></i>Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>