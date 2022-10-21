<div class="card-columns p-3">
            <?php

            require_once "base.php";


            $sql="SELECT * FROM contacts ORDER BY id DESC";
            $query=mysqli_query(con(),$sql);
            while ($row=mysqli_fetch_assoc($query)){
                ?>
                <div class="card contact" id="c-<?php echo $row['id']; ?>" data-id="<?php echo $row['id'] ?>">
                    <div class="card-body">
                        <div class="text-center">
                            <h4><?php echo $row['name']; ?></h4>
                            <p><?php echo $row['phone']; ?></p>
                            <button class="btn btn-outline-primary btn-sm">
                                <i class="feather-edit"></i>
                            </button>
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="feather-trash-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
</div>





