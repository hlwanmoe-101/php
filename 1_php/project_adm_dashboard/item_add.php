
<?php include "template/header.php" ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item">
                    <a href="index.php"><i class="feather-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="item_list.php">Item</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add Item
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card mb-3">
            <div class="card-body">
                <div
                    class="d-flex justify-content-between align-items-center"
                >
                    <h4 class="mb-0">
                        <i class="feather-plus-circle mr-2 text-primary"></i>Add
                        Item
                    </h4>
                    <a
                        href="item_list.php"
                        class="feather-menu btn btn-outline-primary"
                    ></a>
                </div>
                <hr />
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="photo">Photo Upload </label>
                                <i
                                    class="feather-info"
                                    data-container="body"
                                    data-toggle="popover"
                                    data-placement="top"
                                    data-content="Only Support jpg, png"
                                ></i>
                                <input
                                    type="file"
                                    name="photo"
                                    id="photo"
                                    class="form-control p-1"
                                />
                            </div>
                            <div class="form-group">
                                <label for="name">Item Name </label>

                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="type">Item Type </label>

                                <select
                                    name="type"
                                    id="type"
                                    class="form-control custom-select"
                                >
                                    <option value="0">ကုန်ဆို</option>
                                    <option value="1">ကုန်ခြောက်</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="m-cat">Category </label>

                                <select
                                    name="m-cat"
                                    id="m-cat"
                                    class="form-control custom-select"
                                >
                                    <option value="" selected disabled>
                                        Select Category
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="s-cat">Sub Category</label>

                                <select
                                    name="s-cat"
                                    id="s-cat"
                                    class="form-control custom-select"
                                >
                                    <option value="" selected disabled>
                                        Select Sub Category
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="qty">Quantity</label>
                                        <input
                                            type="text"
                                            name="qty"
                                            id="qty"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Unit">Unit</label>
                                        <select
                                            name="Unit"
                                            id="Unit"
                                            class="form-control custom-select"
                                        >
                                            <option value="0">ကုန်ဆို</option>
                                            <option value="1">ကုန်ခြောက်</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price">Price </label>

                                <input
                                    type="text"
                                    name="price"
                                    id="price"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="des">Descriotion</label>
                                <textarea
                                    type="text"
                                    name="des"
                                    id="des"
                                    rows="8"
                                    class="form-control"
                                >
                          </textarea>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <button class="btn btn-primary">Add Item</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "template/footer.php" ?>
<script>
    let mCat = ["Phone", "Computer", "TV"];
    let sCat = [
        { name: "Samsung", catId: 0 },
        { name: "Mi", catId: 0 },
        { name: "Hp", catId: 1 },
        { name: "Dell", catId: 1 },
        { name: "Panasonic", catId: 2 },
    ];
    mCat.map(function (el, index) {
        $("#m-cat").append(`<option value="${index}">${el}</option>`);
    });

    sCat.map(function (el, index) {
        $("#s-cat").append(
            `<option value="${index}" data-category=${el.catId}>${el.name}</option>`
        );
    });
    $("#m-cat").on("change", function () {
        let currentCatId = $(this).val();
        $("#s-cat option").hide();
        $(`[data-category=${currentCatId}]`).show();
    });
</script>

