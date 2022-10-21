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
        .showG{
            border: 1px solid black;
            display: inline-block;
        }
        .show img{
            height: 150px;
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
        $conn=mysqli_connect("localhost","root","","my_list");
        $sql="SELECT * FROM photos";
        $query=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($query)) {
                ?>
            <div class="showG">
                <img src="<?php echo $row['photo_links'];?>" alt="">
                <a href="delete.php?id=<?php echo $row['id']?>&file=<?php echo $row['photo_links']?>">Delete</a>
            </div>
                <?php
            }
        ?>

    </div>
</form>
</body>
</html>