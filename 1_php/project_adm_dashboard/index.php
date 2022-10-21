
<?php include "template/header.php"?>

<div class="row">
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 h1 text-center my-auto text-primary">
                        <i class="feather-shopping-bag"></i>
                    </div>
                    <div class="col-8 text-center">
                        <p class="mb-1 font-weight-bold h3">
                            <span class="counter-up">123</span>
                        </p>
                        <span class="mb-1 text-black-50">Today Order</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 h1 text-center my-auto text-primary">
                        <i class="feather-user"></i>
                    </div>
                    <div class="col-8 text-center">
                        <p class="mb-1 font-weight-bold h3">
                            <span class="counter-up">454</span>
                        </p>
                        <span class="mb-1 text-black-50">Today User</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3" onClick="go('item_list.html')">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 h1 text-center my-auto text-primary">
                        <i class="feather-package"></i>
                    </div>
                    <div class="col-8 text-center">
                        <p class="mb-1 font-weight-bold h3">
                            <span class="counter-up">223</span>
                        </p>
                        <span class="mb-1 text-black-50">Total Item</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 h1 text-center my-auto text-primary">
                        <i class="feather-map-pin"></i>
                    </div>
                    <div class="col-8 text-center">
                        <p class="mb-1 font-weight-bold h3">
                            <span class="counter-up">14</span>
                        </p>
                        <span class="mb-1 text-black-50">Location</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row align-items-end">
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
                    <span class="h4 mb-0">Order & Viewer</span>
                    <div class="ml-4 my-2 ml-lg-0 my-lg-0">
                        <img
                                src="<?php echo $url; ?>assets/img/user/avatar2.jpg"
                                class="ov-img rounded-circle shadow-sm"
                                alt=""
                        />
                        <img
                                src="<?php echo $url; ?>assets/img/user/avatar1.jpg"
                                class="ov-img rounded-circle shadow-sm"
                                alt=""
                        />
                        <img
                                src="<?php echo $url; ?>assets/img/user/avatar3.jpg"
                                class="ov-img rounded-circle shadow-sm"
                                alt=""
                        />
                        <img
                                src="<?php echo $url; ?>assets/img/user/avatar4.jpg"
                                class="ov-img rounded-circle shadow-sm"
                                alt=""
                        />
                        <img
                                src="<?php echo $url; ?>assets/img/user/avatar5.jpg"
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
        <div class="card item-corsal-card mb-3">
            <div class="card-body">
                <div
                        id="carouselExampleIndicators"
                        class="carousel slide item-carrosal"
                        data-bs-ride="carousel"
                >
                    <ol class="carousel-indicators" style="bottom: -30px">
                        <li
                                data-target="#carouselExampleIndicators"
                                data-slide-to="0"
                                class="bg-secondary active"
                        ></li>
                        <li
                                data-target="#carouselExampleIndicators"
                                data-slide-to="1"
                                class="bg-secondary"
                        ></li>
                        <li
                                data-target="#carouselExampleIndicators"
                                data-slide-to="2"
                                class="bg-secondary"
                        ></li>
                        <li
                                data-target="#carouselExampleIndicators"
                                data-slide-to="3"
                                class="bg-secondary"
                        ></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div
                                    class="
                            d-flex
                            justify-content-between
                            align-items-end
                            item-card
                          "
                            >
                                <div class="flex-grow-1">
                                    <h4 class="mb-0">Coffe Cup</h4>
                                    <p class="text-black-50 font-weight-bolder mb-2">
                                        500 MMK
                                    </p>
                                    <div class="progress mb-3">
                                        <div
                                                class="progress-bar"
                                                role="progressbar"
                                                style="width: 75%"
                                                aria-valuenow="25"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                        ></div>
                                    </div>
                                </div>

                                <img
                                        src="<?php echo $url; ?>assets/img/item/item1.png"
                                        class="item-img"
                                        alt=""
                                />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item-card">
                                <div
                                        class="
                              d-flex
                              justify-content-between
                              align-items-end
                            "
                                >
                                    <div class="flex-grow-1">
                                        <h4 class="mb-0">Moemory Stick</h4>
                                        <p class="text-black-50 font-weight-bolder mb-2">
                                            15000 MMK
                                        </p>
                                        <div class="progress mb-3">
                                            <div
                                                    class="progress-bar"
                                                    role="progressbar"
                                                    style="width: 75%"
                                                    aria-valuenow="25"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                            ></div>
                                        </div>
                                    </div>

                                    <img
                                            src="<?php echo $url; ?>assets/img/item/item2.png"
                                            class="item-img"
                                            alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div
                                    class="
                            d-flex
                            justify-content-between
                            align-items-end
                            item-card
                          "
                            >
                                <div class="flex-grow-1">
                                    <h4 class="mb-0">Note Book</h4>
                                    <p class="text-black-50 font-weight-bolder mb-2">
                                        6000 MMK
                                    </p>
                                    <div class="progress mb-3">
                                        <div
                                                class="progress-bar"
                                                role="progressbar"
                                                style="width: 75%"
                                                aria-valuenow="25"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                        ></div>
                                    </div>
                                </div>

                                <img
                                        src="<?php echo $url; ?>assets/img/item/item3.png"
                                        class="item-img"
                                        alt=""
                                />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div
                                    class="
                            d-flex
                            justify-content-between
                            align-items-end
                            item-card
                          "
                            >
                                <div class="flex-grow-1">
                                    <h4 class="mb-0">Something</h4>
                                    <p class="text-black-50 font-weight-bolder mb-2">
                                        1500 MMK
                                    </p>
                                    <div class="progress mb-3">
                                        <div
                                                class="progress-bar"
                                                role="progressbar"
                                                style="width: 75%"
                                                aria-valuenow="25"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                        ></div>
                                    </div>
                                </div>

                                <img
                                        src="<?php echo $url; ?>assets/img/item/item4.png"
                                        class="item-img"
                                        alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-5">
        <div class="card mb-3">
            <div class="card-body">
                <div
                        class="
                      d-block d-lg-flex d-md-flex
                      justify-content-between
                      align-items-center
                    "
                >
                    <span class="h4 mb-4">Order & Places</span>
                    <i class="feather-pie-chart h4 text-primary"></i>
                </div>
                <canvas id="placer" height="300"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-7">
        <div class="card overflow-hidden mb-3">
            <div
                    class="d-flex justify-content-between align-items-center p-3"
            >
                <p class="mb-0">Subscriber List</p>
                <div class="">
                    <i class="feather-more-vertical h4 mb-0 text-primary"></i>
                </div>
            </div>
            <table class="table table-hover sub-list mb-0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Start Date</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Michael Austin</td>
                    <td>ABC Fintech LTD.</td>
                    <td>Jan 1,2019</td>
                    <td>
                        <span class="badge badge-pill badge-danger">Close</span>
                    </td>
                    <td>$ 1000.00</td>
                    <td class="center-align">
                        <a href="#"
                        ><i class="feather-trash-2 text-danger"></i
                            ></a>
                    </td>
                </tr>
                <tr>
                    <td>Aldin Rakić</td>
                    <td>ACME Pvt LTD.</td>
                    <td>Jan 10,2019</td>
                    <td>
                        <span class="badge badge-pill badge-success">Open</span>
                    </td>
                    <td>$ 3000.00</td>
                    <td class="center-align">
                        <a href="#"
                        ><i class="feather-trash-2 text-danger"></i
                            ></a>
                    </td>
                </tr>
                <tr>
                    <td>İris Yılmaz</td>
                    <td>Collboy Tech LTD.</td>
                    <td>Jan 12,2019</td>
                    <td>
                        <span class="badge badge-pill badge-success">Open</span>
                    </td>
                    <td>$ 2000.00</td>
                    <td class="center-align">
                        <a href="#"
                        ><i class="feather-trash-2 text-danger"></i
                            ></a>
                    </td>
                </tr>
                <tr>
                    <td>Lidia Livescu</td>
                    <td>My Fintech LTD.</td>
                    <td>Jan 14,2019</td>
                    <td>
                        <span class="badge badge-pill badge-danger">Close</span>
                    </td>
                    <td>$ 1100.00</td>
                    <td class="center-align">
                        <a href="#"
                        ><i class="feather-trash-2 text-danger"></i
                            ></a>
                    </td>
                </tr>
                <tr>
                    <td>Michael Austin</td>
                    <td>ABC Fintech LTD.</td>
                    <td>Jan 1,2019</td>
                    <td>
                        <span class="badge badge-pill badge-danger">Close</span>
                    </td>
                    <td>$ 1000.00</td>
                    <td class="center-align">
                        <a href="#"
                        ><i class="feather-trash-2 text-danger"></i
                            ></a>
                    </td>
                </tr>
                <tr>
                    <td>Aldin Rakić</td>
                    <td>ACME Pvt LTD.</td>
                    <td>Jan 10,2019</td>
                    <td>
                        <span class="badge badge-pill badge-success">Open</span>
                    </td>
                    <td>$ 3000.00</td>
                    <td class="center-align">
                        <a href="#"
                        ><i class="feather-trash-2 text-danger"></i
                            ></a>
                    </td>
                </tr>
                <tr>
                    <td>İris Yılmaz</td>
                    <td>Collboy Tech LTD.</td>
                    <td>Jan 12,2019</td>
                    <td>
                        <span class="badge badge-pill badge-success">Open</span>
                    </td>
                    <td>$ 2000.00</td>
                    <td class="center-align">
                        <a href="#"
                        ><i class="feather-trash-2 text-danger"></i
                            ></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "template/footer.php"?>
