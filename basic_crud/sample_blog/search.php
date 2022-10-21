
<?php require_once "front_panel/head.php"?>
<title>Home</title>
<?php require_once "front_panel/side_header.php"?>
<?php
$key=$_POST['search_key'];
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
                        Search by &nbsp; <b>" <?php echo $key;?> "</b>
                    </li>
                </ol>
            </nav>
            <div class="">
                <?php
                    if(count(fSearch($key))==0){
                        echo alert("Ther is no data for '$key'","warning");
                    }
                ?>
                <?php foreach (fSearch($key) as $p){ ?>
                    <div class="card shadow-sm border-0 mb-4 post">
                        <div class="card-body">
                            <a href="detail.php?id=<?php echo $p['id']; ?>" class="text-primary">
                                <h4>
                                    <?php echo $p['title'];?>
                                </h4>
                            </a>
                            <div class="my-3">
                                <i class="feather-user text-primary"></i>
                                <?php echo user($p['user_id'])['name']?>
                                <i class="feather-layers text-success"></i>
                                <?php echo category($p['category_id'])['title']?>
                                <i class="feather-calendar text-danger"></i>
                                <?php echo date("j-M-Y",strtotime($p['created_at'])) ?>
                            </div>
                            <p class="text-black-50">
                                <?php echo short(strip_tags(html_entity_decode($p['description'])),200);?>
                            </p>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
        <?php require_once "right_side_bar.php"?>
    </div>
</div>

<?php require_once "front_panel/foot.php"?>




