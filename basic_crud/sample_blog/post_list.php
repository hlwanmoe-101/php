<?php require_once "core/auth.php"?>
<?php include "template/header.php" ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item">
                    <a href="<?php echo $url;?>index.php"><i class="feather-home"></i></a>
                </li>
                <li class="breadcrumb-item active">
                    Post
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card mb-3">
            <div class="card-body">
                <div
                    class="d-flex justify-content-between align-items-center"
                >
                    <h4 class="mb-0">
                        <i class="feather-list mr-2 text-primary"></i>
                        Post List
                    </h4>
                    <a
                        href="<?php echo $url;?>post_add.php"
                        class="feather-plus-circle btn btn-outline-primary"
                    ></a>
                </div>
                <hr />
                <table class="table table-hover mt-3 mb-0 table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description </th>
                        <th>Category</th>
                        <?php if($_SESSION['user']['role']==0){ ?>
                        <th>User</th>
                        <?php }?>
                        <th>Viwers</th>
                        <th>Control</th>
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (posts() as $c){
                        ?>
                        <tr>
                            <td><?php echo $c['id'];?></td>
                            <td><?php echo short($c['title']);?></td>
                            <td><?php echo short(strip_tags(html_entity_decode($c['description'])));?></td>
                            <td class="text-nowrap"><?php echo category($c['category_id'])['title'];?></td>
                            <?php if($_SESSION['user']['role']==0){ ?>
                                <td class="text-nowrap"><?php

                                    echo user($c['user_id'])['name'];
                                    ?>
                                </td>
                            <?php }?>
                            <td>
                                <?php echo count(countByPost($c['id'])); ?>
                            </td>
                            <td class="text-nowrap">
                                <a href="post_detail.php?id=<?php echo $c['id'];?>" class="btn btn-outline-info btn-sm"><i class="feather-info fa-fw"></i></a>
                                <a href="post_delete.php?id=<?php echo $c['id'];?>" onclick="return confirm('Sure  to Delete This')" class="btn btn-outline-danger btn-sm"><i class="feather-trash-2 fa-fw"></i></a>
                                <a href="post_update.php?id=<?php echo $c['id'];?>" class="btn btn-outline-warning btn-sm"><i class="feather-edit fa-fw"></i></a>
                            </td>
                            <td class="text-nowrap"><?php echo showTime($c['created_at']);?></td>
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
