</div>
</div>
</section>
<script src="<?php echo $url; ?>assets/vendor/jquery-3.6.0.min.js"></script>
<!--<script src="https://unpkg.com/@popperjs/core@2"></script>-->
<script src="<?php echo $url; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url; ?>assets/vendor/way_point/jquery.waypoints.js"></script>
<script src="<?php echo $url; ?>assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url; ?>assets/vendor/chart_js/Chart.min.js"></script>
<script src="<?php echo $url; ?>assets/vendor/summer_note/summernote.js"></script>
<script src="<?php echo $url; ?>assets/vendor/data_table/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $url; ?>assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url; ?>assets/js/app.js"></script>
<!--<script src="--><?php //echo $url; ?><!--assets/js/dashboard.js"></script>-->
<script>
    let currentPage = location.href;
    // console.log(currentPage);

    $(".item-link").each(function () {
        let links=$(this).attr("href");
        console.log(links);

        // console.log(links);
        if(currentPage==links){
            $(this).addClass('active');
        }
    })
</script>
</body>
</html>
