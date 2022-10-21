
<?php require_once "front_panel/head.php"?>
<title>Home</title>
<?php require_once "front_panel/side_header.php"?>
<?php
$id=$_GET['category_id'];
$current=category($id);
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item">
                        <a href="<?php echo $url;?>index.php"><i class="feather-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php echo $current['title'];?>
                    </li>
                </ol>
            </nav>
            <div class="">
                <?php foreach (fPostsCate($id) as $p){ ?>
                    <?php include "single.php";?>
                <?php } ?>
            </div>
        </div>
        <?php require_once "right_side_bar.php"?>
    </div>
</div>

<?php require_once "front_panel/foot.php"?>




