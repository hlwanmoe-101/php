<?php require_once "core/auth.php"?>
<?php include "template/header.php"?>

<div class="row">
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3 shadow-sm status">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 h1 text-center my-auto text-primary">
                        <i class="feather-eye"></i>
                    </div>
                    <div class="col-8 text-center">
                        <p class="mb-1 font-weight-bold h3">
                            <span class="counter-up"><?php echo countTotal('viwers'); ?></span>
                        </p>
                        <span class="mb-1 text-black-50">Today Viewer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3 shadow-sm status" onclick="go('<?php Echo $url; ?>/post_list.php')">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 h1 text-center my-auto text-primary">
                        <i class="feather-list"></i>
                    </div>
                    <div class="col-8 text-center">
                        <p class="mb-1 font-weight-bold h3">
                            <span class="counter-up"><?php echo countTotal('posts'); ?></span>
                        </p>
                        <span class="mb-1 text-black-50">Today Post</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3 shadow-sm status" onClick="go('<?php Echo $url; ?>/category_add.php')">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 h1 text-center my-auto text-primary">
                        <i class="feather-layers"></i>
                    </div>
                    <div class="col-8 text-center">
                        <p class="mb-1 font-weight-bold h3">
                            <span class="counter-up"><?php echo countTotal('categories'); ?></span>
                        </p>
                        <span class="mb-1 text-black-50">Total Category</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3 shadow-sm status" onclick="go('<?php Echo $url; ?>/user_list.php')">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 h1 text-center my-auto text-primary">
                        <i class="feather-users"></i>
                    </div>
                    <div class="col-8 text-center">
                        <p class="mb-1 font-weight-bold h3">
                            <span class="counter-up"><?php echo countTotal('users'); ?></span>
                        </p>
                        <span class="mb-1 text-black-50">Total User</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-7">
        <div class="card shadow mb-3">
            <div class="card-body">
                <div
                        class="
                      d-block d-lg-flex d-md-flex
                      justify-content-between
                      align-items-center
                    "
                >
                    <span class="h4 mb-0">Visitors</span>
                    <div class="ml-4 my-2 ml-lg-0 my-lg-0">
                        <img
                                src="<?php echo $url; ?>/assets/img/user/avatar2.jpg"
                                class="ov-img rounded-circle shadow-sm"
                                alt=""
                        />
                        <img
                                src="<?php echo $url; ?>/assets/img/user/avatar1.jpg"
                                class="ov-img rounded-circle shadow-sm"
                                alt=""
                        />
                        <img
                                src="<?php echo $url; ?>/assets/img/user/avatar3.jpg"
                                class="ov-img rounded-circle shadow-sm"
                                alt=""
                        />
                        <img
                                src="<?php echo $url; ?>/assets/img/user/avatar4.jpg"
                                class="ov-img rounded-circle shadow-sm"
                                alt=""
                        />
                        <img
                                src="<?php echo $url; ?>/assets/img/user/avatar5.jpg"
                                class="ov-img rounded-circle shadow-sm"
                                alt=""
                        />
                    </div>
                </div>

                <canvas id="myChart" height="150"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-5">
        <div class="card mb-3 shadow">
            <div class="card-body">
                <div
                        class="
                      d-block d-lg-flex d-md-flex
                      justify-content-between
                      align-items-center
                    "
                >
                    <span class="h4 mb-4">Category / Post</span>
                    <i class="feather-pie-chart h4 text-primary"></i>
                </div>
                <canvas id="placer" height="220"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card overflow-hidden mb-3">
            <div class="">
                <div
                        class="d-flex justify-content-between align-items-center p-3"
                >
                    <h4 class="mb-0 font-weight-bold">Recent Post</h4>
                    <div class="">
                        <?php
                            $currentUser=$_SESSION['user']['id'];
                            $postTotal=countTotal('posts');
                            $currentUserTotal=countTotal('posts',"user_id='{$currentUser}'");
                            $currentUserPercentage=($currentUserTotal/$postTotal)*100;
                            $finalPercentage=floor($currentUserPercentage);
                        ?>
                        <small>Your Post: <?php echo $currentUserTotal; ?></small>
                        <div class="progress" style="width: 300px;height: 10px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $finalPercentage;?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <table class="table table-hover mb-0 table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description </th>
                        <th>Category</th>
                        <?php if($_SESSION['user']['role']==0){ ?>
                            <th>User</th>
                        <?php }?>
                        <th>Viwers</th>
                        <th>Control</th>
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (dashboardPosts(5) as $c){
                        ?>
                        <tr>
                            <td><?php echo $c['id'];?></td>
                            <td><?php echo short($c['title']);?></td>
                            <td><?php echo short(strip_tags(html_entity_decode($c['description'])));?></td>
                            <td class="text-nowrap"><?php echo category($c['category_id'])['title'];?></td>
                            <?php if($_SESSION['user']['role']==0){ ?>
                                <td class="text-nowrap"><?php

                                    echo user($c['user_id'])['name'];
                                    ?>
                                </td>
                            <?php }?>
                            <td>
                                <?php echo count(countByPost($c['id'])); ?>
                            </td>
                            <td class="text-nowrap">
                                <a href="post_detail.php?id=<?php echo $c['id'];?>" class="btn btn-outline-info btn-sm"><i class="feather-info fa-fw"></i></a>
                                <a href="post_delete.php?id=<?php echo $c['id'];?>" onclick="return confirm('Sure  to Delete This')" class="btn btn-outline-danger btn-sm"><i class="feather-trash-2 fa-fw"></i></a>
                                <a href="post_update.php?id=<?php echo $c['id'];?>" class="btn btn-outline-warning btn-sm"><i class="feather-edit fa-fw"></i></a>
                            </td>
                            <td class="text-nowrap"><?php echo showTime($c['created_at']);?></td>
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

<?php include "template/footer.php"?>
<script>
    $(".counter-up").counterUp({
        delay: 10,
        time: 1000,
    });
    <?php

    $dateArr=[];
    $viewerRate=[];
    $transitionRate=[];
    $today= date("Y-m-d");
    $date=date_create($today);
    for($i=0;$i<10;$i++){
        date_sub($date,date_interval_create_from_date_string("1Days"));
        $current=date_format($date,'Y-m-d');
        array_push($dateArr,$current);
        $result=countTotal('viwers',"CAST(created_at AS DATE)='$current'");
        array_push($viewerRate,$result);
        $result1=countTotal('transition',"CAST(created_at AS DATE)='$current'");
        array_push($transitionRate,$result1);
    }
    ?>
    let labelArr = <?php echo json_encode($dateArr); ?>;
    let viewCountArr=<?php echo json_encode($viewerRate); ?>;
    let transArr=<?php echo json_encode($transitionRate); ?>;
    const ctx = document.getElementById("myChart").getContext("2d");
    const myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labelArr,
            datasets: [
                {
                    label: "Viewer",
                    data: viewCountArr ,
                    backgroundColor: ["#007bff30"],
                    borderColor: ["#007bff"],
                    borderWidth: 1,
                    tension: 0.01,
                },
                {
                    label: "Transition",
                    data: transArr ,
                    backgroundColor: ["#0dcaf030"],
                    borderColor: ["#0dcaf0"],
                    borderWidth: 1,
                    tension: 0.01,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
                xAxes: [
                    {
                        display: true,
                        gridLines: [
                            {
                                display: false,
                            },
                        ],
                    },
                ],
            },

            legend: {
                display: true,
                position: "top",
                labels: {
                    fontColor: "#333",
                    usePointStyle: true,
                },
            },
        },
    });
    <?php
    $catName=[];
    $countPostByCategory=[];
    foreach (categories() as $c){
        array_push($catName,$c['title']);
        array_push($countPostByCategory,countTotal('posts',"category_id={$c['id']}"));
    }
    ?>

    let catArr = <?php echo json_encode($catName); ?>;
    let countArr = <?php echo json_encode($countPostByCategory); ?>;

    const ctx1 = document.getElementById("placer");
    const myChart1 = new Chart(ctx1, {
        type: "doughnut",
        data: {
            labels: catArr,
            datasets: [
                {
                    label: "# of Votes",
                    data: countArr,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                    ],
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    usePointStyle: true,
                },
            },
        },
    });

</script>
