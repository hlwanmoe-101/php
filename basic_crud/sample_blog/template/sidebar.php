<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
    <!-- sidebar start -->
    <div
        class="d-flex justify-content-between align-items-center py-3 brand"
    >
        <div class="h4 m-0 p-0">
              <span
                  class="
                  feather-heart
                  text-danger
                  rounded-circle
                  border border-danger
                  bg-white
                  h3
                  p-1
                "
              ></span>
            <span class="text-primary">HOPE</span>
        </div>
        <button class="hide-sidebar-btn btn btn-link d-lg-none">
            <i
                class="feather-x-circle text-primary"
                style="font-size: 3em"
            ></i>
        </button>
    </div>
    <div class="">
        <ul class="item-nav">
            <li class="item-menu active">
                <a href="<?php echo $url; ?>dashboard.php" class="item-link"
                ><i class="feather-home"> Dashboard </i></a
                >
            </li>
            <li class="item-menu active">
                <a href="<?php echo $url; ?>index.php" class="item-link"
                ><i class="feather-arrow-right-circle"> Go News </i></a
                >
            </li>
            <li class="item-menu active">
                <a href="<?php echo $url; ?>wallet.php" class="item-link"
                ><i class="feather-dollar-sign"> Wallet </i></a
                >
            </li>
<!--        </ul>-->
<!--    </div>-->
<!--    <div class="">-->
<!--        <ul class="item-nav">-->
            <li class="item-title">Manage Post</li>

            <li class="item-menu">
                <a href="<?php echo $url; ?>post_add.php" class="item-link">

                    <span><i class="feather-plus-circle"></i>Add Post</span>
                </a>
            </li>
            <li class="item-menu">
                <div class="item-list-menu">
                    <a href="<?php echo $url; ?>post_list.php" class="item-link">

                            <span><i class="feather-list"></i>Post List</span>
                            <span class="badge badge-pill bg-light text-primary shadow-sm"
                            >
                               <?php echo countTotal('posts');?>
                            </span
                            >
                    </a>
                </div>
            </li>
            <li class="spacer"></li>
            <?php if($_SESSION['user']['role'] <= 1){
                ?>
            <li class="item-title">Setting</li>
            <li class="item-menu">
                <div class="item-list-menu">
                    <a href="<?php echo $url; ?>category_add.php" class="item-link">

                        <span><i class="feather-layers mr-2"></i>Category Manager</span>
                        <span class="badge badge-pill bg-light text-primary shadow-sm"
                        >
                               <?php echo countTotal('categories');?>
                            </span
                            >
                    </a>
                </div>
            </li>
            <?php if($_SESSION['user']['role'] == 0){
                ?>
            <li class="item-menu">
                <div class="item-list-menu">
                    <a href="<?php echo $url; ?>user_list.php" class="item-link">

                        <span><i class="feather-user-check mr-2"></i>User Manager</span>
                        <span class="badge badge-pill bg-light text-primary shadow-sm"
                        >
                               <?php echo countTotal('users');?>
                            </span
                            >
                    </a>
                </div>
            </li>
                <?php }?>
            <?php }?>
            <li class="spacer"></li>
            <li class="item-menu">
                <div class="item-list-menu">
                    <a href="<?php echo $url; ?>logout.php" class="btn btn-secondary w-100">

                        <i class="feather-log-out text-white mx-2"></i>Logout

                    </a>
                </div>
            </li>
        </ul>
    </div>

    <!-- sidebar end  -->
</div>

