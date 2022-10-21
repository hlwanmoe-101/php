
<?php include "template/header.php"?>

<link
    rel="stylesheet"
    href="<?php echo $url; ?>assets/vendor/data_table/dataTables.bootstrap4.min.css"
/>
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item">
                    <a href="index.php"><i class="feather-home"></i></a>
                </li>

                <li class="breadcrumb-item active" aria-current="page">
                    Category List
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
                        Category List
                    </h4>
                    <div>
                        <a
                            href="#"
                            class="btn btn-sm btn-outline-secondary full-screen-btn"
                        >
                            <i class="feather-maximize-2"></i
                            ></a>
                        <a
                            href="categories_add.php"
                            class="feather-plus-circle btn btn-outline-primary"
                        ></a>
                    </div>
                </div>
                <hr />
                <div>
                    <table
                        id="data-table"
                        class="table table-hover table-striped"
                        style="width: 100%"
                    >
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Control</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php
                                foreach (categorylist() as $row){
                                    $time = date("g:i", strtotime($row['created_at']));
                             ?>
                         <tr>
                             <td><?php echo $row['id']?></td>
                             <td><?php echo $row['message']?></td>
                             <td>
                                 <a class="btn btn-danger" href='categories_delete.php?id=<?php echo $row['id']?>'><i class="feather-trash-2"></i>Delete</a>
                                 <a class="btn btn-warning" href='categories_update.php?id=<?php echo $row['id']?>'><i class="feather-check-circle"></i>Update</a>
                             </td>
                             <td><?php echo $time?></td>
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
</div>

<?php include "template/footer.php" ?>
<script src="<?php echo $url; ?>assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url; ?>assets/vendor/data_table/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $("#data-table").DataTable({
            "order":[[0,"desc"]]
        });
    });
</script>
