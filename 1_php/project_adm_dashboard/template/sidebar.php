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
                <a href="<?php echo $url; ?>index.php" class="item-link"
                ><i class="feather-home"> Dashboard </i></a
                >
            </li>
<!--        </ul>-->
<!--    </div>-->
<!--    <div class="">-->
<!--        <ul class="item-nav">-->
            <li class="item-title">Manage Item</li>

            <li class="item-menu">
                <a href="<?php echo $url; ?>item_add.php" class="item-link">

                    <span><i class="feather-plus-circle"></i>Add Item</span>
                </a>
            </li>
            <li class="item-menu">
                <div class="item-list-menu">
                    <a href="<?php echo $url; ?>item_list.php" class="item-link">

                            <span><i class="feather-list"></i>Item List</span>
                            <span class="badge badge-pill bg-light text-primary shadow-sm"
                            >15</span
                            >


                    </a>

                </div>
            </li>
            <li class="spacer"></li>
        </ul>
    </div>

    <!-- sidebar end  -->
</div>

