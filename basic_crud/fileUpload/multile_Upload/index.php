<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .show{
            margin-top: 20px;
        }
        .show img{
            height: 50px;
        }
    </style>
</head>
<body>
<form action="save.php" method="post" enctype="multipart/form-data">
    <lable>File Upload</lable>
    <br>
    <br>
    <input type="file" name="upload[]" accept="image/*" multiple>
    <button>upload</button>

    <div class="show">
    <h4>Uploaded Photo</h4>
        <?php
        $store=scandir("store/");
            foreach ($store as $key=>$s) {
                ?>
                <img src="store/<?php echo $s;?>" alt="">
                <?php
            }
        ?>

    </div>
</form>
</body>
</html>