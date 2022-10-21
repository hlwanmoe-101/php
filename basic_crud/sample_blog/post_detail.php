<?php require_once "core/auth.php"?>
<?php include "template/header.php" ?>
<?php
    $id=$_GET['id'];
    $current=post($id);
?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item">
                    <a href="<?php echo $url;?>index.php"><i class="feather-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?php echo $url;?>index.php">Post Detail</a>
                </li>
                <li class="breadcrumb-item active">
                   <?php
                   echo $current['title'];
                   ?>
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="card mb-3">
            <div class="card-body">
                <div
                    class="d-flex justify-content-between align-items-center"
                >
                    <h4 class="mb-0">
                        <i class="feather-info mr-2 text-primary"></i>
                        Post Detail
                    </h4>
                    <div class="">
                        <a
                                href="<?php echo $url;?>post_add.php"
                                class="feather-plus-circle btn btn-outline-primary"
                        ></a>
                        <a
                                href="<?php echo $url;?>post_list.php"
                                class="feather-list btn btn-outline-primary"
                        ></a>
                    </div>
                </div>
                <hr />
                        <h4>
                            <?php echo $current['title']?>
                        </h4>
                        <div class="my-3">
                            <i class="feather-user text-primary"></i>
                            <?php echo user($current['user_id'])['name']?>
                            <i class="feather-layers text-success"></i>
                            <?php echo category($current['category_id'])['title']?>
                            <i class="feather-calendar text-danger"></i>
                            <?php echo date("j-M-Y",strtotime($current['created_at'])) ?>
                        </div>
                        <div class="">
                            <?php echo  html_entity_decode($current['description'])?>
                        </div>




            </div>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-6">
        <div class="card mb-3">
            <div class="card-body">
                <div
                        class="d-flex justify-content-between align-items-center"
                >
                    <h4 class="mb-0">
                        <i class="feather-user mr-2 text-primary"></i>
                        Post Viewer
                    </h4>
                </div>
                <hr />
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Who</th>
                            <th>Device</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach (countByPost($id) as $v){
                    ?>
                        <tr>
                            <td class="text-nowrap text-capitalize">
                                <?php if($v['user_id']==0){
                                    echo 'guest';
                                }else{
                                    echo user($v['user_id'])['name'];
                                }

                                ?>
                            </td>
                            <td><?php echo $v['device']; ?></td>
                            <td class="text-nowrap"><?php echo showTime($v['created_at']); ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<?php include "template/footer.php" ?>
<script>
    $('.table').dataTable({
        "order": [[ 0, "desc" ]]
    });
</script>
