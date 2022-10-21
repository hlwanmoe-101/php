<table class="table table-hover mb-0">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
    <?php

    require_once "base.php";


    $sql="SELECT * FROM contacts ORDER BY id DESC";
    $query=mysqli_query(con(),$sql);
    while ($row=mysqli_fetch_assoc($query)){

    ?>
        <tr class="contact" id="c-<?php echo $row['id']; ?>" data-id="<?php echo $row['id'] ?>">
            <td>
                <?php echo $row['id']; ?>
            </td>
            <td>
                <div class="d-flex">
                    <div class="text-info mr-3">
                        <i class="feather-user"></i>
                    </div>
                   <?php echo $row['name']; ?>
                </div>
            </td>
            <td>
                <div class="d-flex">
                    <div class="text-info mr-3">
                        <i class="feather-phone"></i>
                    </div>
                       <?php echo $row['phone']; ?>

                </div>
            </td>
            <td>
                <button class="btn btn-outline-primary btn-sm edit" data-id="<?php echo $row['id'] ?>">
                    <i class="feather-edit"></i>
                </button>
                <button class="btn btn-outline-danger btn-sm del" data-id="<?php echo $row['id'] ?>">
                    <i class="feather-trash-2"></i>
                </button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
