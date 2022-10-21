<?php require_once "core/auth.php"?>
<?php include "template/header.php" ?>
<?php
if(isset($_POST['payNow'])){
   if(payNow()){
       linkto("wallet.php");
   }
}

?>
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item">
                    <a href="<?php echo $url;?>dashboard.php"><i class="feather-home"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Wallet
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
                        <i class="feather-dollar-sign mr-2 text-primary"></i>
                        My Wallet
                    </h4>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="feather-user">Your Money <?php echo user($_SESSION['user']['id'])['money'] ;?></i>
                    </a>

                </div>
                <hr />

                <form method="post">
                    <div class="form-inline">
                        <hr />
                        <select name="to_user" id="" class="custom-select mr-2 w-25" required>
                            <option value="0" selected disabled>Select User</option>
                            <?php foreach (users() as $user){?>
                                <?php if($user['id']!=$_SESSION['user']['id']){ ?>
                                    <option value="<?php echo $user['id'];?>"><?php echo $user['name']; ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                        <input type="number" class="form-control mr-3 w-25" name="amount" placeholder="$Pay Amount" min="100" max="<?php echo user($_SESSION['user']['id'])['money'] ;?>" required>
                        <input type="text" class="form-control mr-3" name="description" placeholder="For What" required>
                        <button name="payNow" class="btn btn-primary">Transfer</button>
                    </div>
                </form>
                <hr>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Date / Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (trans() as $tran){ ?>

                        <tr>
                            <td><?php echo $tran['id']; ?></td>
                            <td><?php echo user($tran['from_user'])['name']; ?></td>
                            <td><?php echo user($tran['to_user'])['name']; ?></td>
                            <td><?php echo $tran['amount']; ?></td>
                            <td><?php echo $tran['description']; ?></td>
                            <td><?php echo date('d-m-Y / h:m', strtotime($tran['created_at'])) ; ?></td>
                        </tr>
                        <?php } ?>
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
