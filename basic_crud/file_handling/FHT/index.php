<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="write.php" method="post">
    <lable>User Name</lable>
    <input type="text" name="username" value="">
    <br>
    <lable>Password</lable>
    <input type="password" name="password" value="">
    <button>Submit</button>
</form>
<ul>
    <?php
        echo "<pre>";
        $list=scandir("store");
        //    print_r($list);

        foreach ($list as $key=>$lists){
            if($key>=2) {
                ?>
                <li>
                    <a href="del.php?name=<?php echo $lists ?>">Del</a>
                    <a href="store/<?php echo $lists ?>" target="_blank"> <?php echo $lists ?></a>
                </li>
                <?php
            }
        }
    ?>
</ul>

</body>
</html>
