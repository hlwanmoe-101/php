<?php session_start(); ?>
<?php require_once "front_panel/head.php"?>
<title>Home</title>
<?php require_once "front_panel/side_header.php"?>
<?php
$id=$_GET['id'];
$current=post($id);
$currentCat=$current['category_id'];

if(isset($_SESSION['user']['id'])){
    $userId=$_SESSION['user']['id'];
}else{
    $userId=0;
}
userAnalysis($userId,$id,$_SERVER['HTTP_USER_AGENT']);


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
                        Post Detail
                    </li>
                </ol>
            </nav>
            <div class="card my-4">
                <div class="card-body">
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
            <div class="row">
                <?php foreach (fPostsCate($currentCat,2,$id) as $p){ ?>
                    <div class="col-12 col-md-6">
                        <?php include "single.php";?>
                    </div>
                <?php } ?>

            </div>
        </div>
        <?php require_once "right_side_bar.php"?>
    </div>

</div>

<?php require_once "front_panel/foot.php"?>




