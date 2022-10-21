<?php require_once "core/auth.php"?>
<?php require_once "core/isAdmin.php"?>
<?php include "template/header.php" ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item">
                    <a href="<?php echo $url;?>dashboard.php"><i class="feather-home"></i></a>
                </li>
                <li class="breadcrumb-item active">
                    User
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
                        <i class="feather-users mr-2 text-primary"></i>
                        User List
                    </h4>
                </div>
                <hr />
                <table class="table table-hover mt-3 mb-0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
<!--                        <th>Photo</th>-->
<!--                        <th>Control</th>-->
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (users() as $c){
//                        print_r($c);
                        ?>
                        <tr>
                            <td><?php echo $c['id'];?></td>
                            <td><?php echo $c['name'];?></td>
                            <td><?php echo $c['email'];?></td>
                            <td><?php echo $role[$c['role']];?></td>
<!--                            <td>--><?php //echo $c['photo'];?><!--</td>-->
<!--                            <td>-->
<!--                                <a href="post_delete.php?id=--><?php //echo $c['id'];?><!--" onclick="return confirm('Sure to Delete This')" class="btn btn-outline-danger btn-sm"><i class="feather-trash-2 fa-fw"></i></a>-->
<!--                                <a href="post_update.php?id=--><?php //echo $c['id'];?><!--" class="btn btn-outline-warning btn-sm"><i class="feather-edit fa-fw"></i></a>-->
<!--                            </td>-->
                            <td><?php echo showTime($c['created_at']);?></td>
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
