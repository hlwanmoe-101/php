<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="feather-icons-web/feather.css">
    <link rel="stylesheet" href="css/all.css">\
    <style>
        td,th{
            vertical-align: middle !important;
        }
    </style>
</head>
<body class="bg-dark">

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card my-5 shadow">
                <div class="card-content">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <h4 class="text-primary">Contact App</h4>
                        <div class="">
                            <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#staticBackdrop">Add Contact</button>
                            <button class="btn btn-outline-info" onclick="showList()"><i class="feather-list"></i></button>
                            <button class="btn btn-outline-warning" onclick="showGrid()"><i class="feather-grid"></i></button>
                        </div>
                    </div>
                    <div class="output">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New Contact <span id="result"></span> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="save.php" method="post" id="addContact">
                    <div class="form-row">
                        <div class="col-12 col-md-6">
                            <label><i class="feather-user mr-2 text-info"></i>Contact Name</label>
                            <input type="text" class="form-control" name="contactName">
                        </div>
                        <div class="col-12 col-md-6">
                            <label><i class="feather-phone mr-2 text-info"></i>Phone Number</label>
                            <input type="text" class="form-control" name="phoneNumber">
                        </div>
                    </div>
                    <div class="mt-2 d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel">Edit Contact <span id="edit_result"></span> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="update.php" method="post" id="updateContact">
                    <div class="form-row">
                        <div class="col-12 col-md-6">
                            <label><i class="feather-user mr-2 text-info"></i>Contact Name</label>
                            <input type="text" class="form-control" name="contactName" id="edit_name">
                        </div>
                        <div class="col-12 col-md-6">
                            <label><i class="feather-phone mr-2 text-info"></i>Phone Number</label>
                            <input type="text" class="form-control" name="phoneNumber" id="edit_phone">
                        </div>
                    </div>
                    <input type="hidden" name="id" id="edit_id">
                    <div class="mt-2 d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal contact-m fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="staticBackdropLabel"> <i class="feather-users"></i> Contact Detail<span id="result"></span> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body contact-detail-body ">

            </div>

        </div>
    </div>
</div>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function showGrid() {
        $.get("grid.php",function (data) {
            $(".output").html(data);
        })
    }

    function showList(){
        $.get("list.php",function (data) {
            $(".output").html(data);
        })
    }
    $("#addContact").on("submit",function (e) {//addEventListener ဖြစ်တယ်။
        e.preventDefault();
        let inputs= $(this).serialize(); // form ထဲက data တွေကို အကုန်ယူခြင်းဖြစ်တယ်။
        // $.ajax({
        //     type : "POST",
        //     url : $(this).attr('action'),
        //     data : inputs,
        //     success : function(data) { // data သည် post method ဖြင့် ပေးလိုက်သော save.php အလုပ်လုပ်၍ထွက်လာ အချက်အလက်များဖြစ်သည်။
        //     console.log(data);
        //     },
        // })
        $.post($(this).attr('action'),inputs,function (data) {//save.php မှ return ပြန်လာသော data များအား callback function ဖြင့် အလုပ်လုပ်သည်။
            console.log(data);
            if(data=="successful"){
                $("#result").html("<span class='badge badge-pill badge-success'>Contact Added</span>");
                $("input").val("");
                showList();
            }else {
                $("#result").html("<span class='badge badge-pill badge-danger'>fail</span>");
            }
        })
    });
    showList();

    $(".output").delegate(".del","click",function () {
        let currentId=$(this).attr("data-id");
        $.get("delete.php?id="+currentId,function (data) {
            if(data=="success"){
                showList();
            }
        })
    })
    $(".output").delegate(".edit","click",function () {
        let currentId=$(this).attr("data-id");
        $.get("detail.php?id="+currentId,function (data) {
           $currentDetail= JSON.parse(data);
           $("#edit_name").val($currentDetail['name']);
           $("#edit_phone").val($currentDetail['phone']);
           $("#edit_id").val($currentDetail['id']);
           $("#edit").modal("show");
        })

    })
    $("#updateContact").on("submit",function (e) {
        e.preventDefault();
        let inputs= $(this).serialize(); // form ထဲက data တွေကို အကုန်ယူခြင်းဖြစ်တယ်။
        $.post($(this).attr('action'),inputs,function (data) {//save.php မှ return ပြန်လာသော data များအား callback function ဖြင့် အလုပ်လုပ်သည်။
            console.log(data);
            if(data=="successful"){
                $("#edit_result").html("<span class='badge badge-pill badge-success'>Contact Updated</span>");
                $("input").val("");
                showList();
                $("#edit").modal("hide");
            }else {
                $("#edit_result").html("<span class='badge badge-pill badge-danger'>Update Fail</span>");
            }
        })
    })



    $(".output").delegate(".contact","click",function () {
        let currentId=$(this).attr("data-id");
        $.get("contact_data.php?id="+currentId,function (data) {
            console.log(data);
            $('.contact-detail-body').html(data);
            $('.contact-m').modal('show');
        })

    })
</script>
</body>
</html>