<?php include("../service/head.php"); ?>
<?php include("show_report_db.php"); ?>
<?php $count = 1; ?>

<head>
    <!-- <link rel="stylesheet" href="../bootstrap/css/template_timeline.css"> -->
    <!-- <script src="../../adddemo/demo2/js/jquery.js"></script> -->
    <!-- <script src="../../adddemo/demo2/js/timeline.min.js"></script> -->
    <link rel="stylesheet" href="../../adddemo/demo2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../adddemo/demo2/css/timeline.min.css" />



    <style>
        .timeline__content:hover {
            background: #028CB3;
            color: white;
            font-size: 18px;
            border: solid 4px #AFE6F6;

        }

        .ce_tl {
            margin-left: 200px;
            text-align: center;

        }

        .ce_tr {
            text-align: center;
            margin-right: 200px;
        }

        button {

            background: #028CB3;
            color: white;
            padding: 15px;
            border-radius: 10px;
            border: none;
            outline: none;
        }
    </style>
</head>

<body class="skin-red sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <?php include("../service/header.php"); ?>

        <!-- Sidebar -->
        <?php include("../service/sidebar_staff.php"); ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <!-- แสดงผลการรายงาน -->
                </h1>
            </section>
            <!-- Top menu -->
            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                <div class="box">
                    <div class="box-header">
                        <div style="text-align:left;">
                            <!-- <h3 class="box-title">ตารางข้อมูล</h3> -->
                        </div>

                        <div style="text-align:right;">
                            <!-- <a class="btn btn-success" href="form_addreport.php" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a> -->
                        </div>

                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <div class="container">
                            <br />
                            <h3 align="center"><a href="">ข้อมูลการรายงานปฏิบัติงาน</a></a></h3><br />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <!-- <h3 class="panel-title"></h3> -->
                                </div>
                                <div class="panel-body">
                                    <div class="timeline">
                                        <div class="timeline__wrap">
                                            <div class="timeline__items">
                                                <?php

                                                foreach ($result as $row) {

                                                ?>
                                                    <div class="timeline__item">
                                                        <div>
                                                            <h5><?php echo $row["created"]; ?></h5>
                                                        </div>
                                                        <div class="timeline__content" style="text-align: center;">
                                                            <h2><?php echo $row["m_FName"]; ?></h2>
                                                            <p><?php echo $row["m_LName"]; ?></p>
                                                        </div>
                                                    </div>
                                                    <br><br><br>

                                                   
                                                <?php
                                                } ?>
                                            </div>
                                            <div style="text-align: center;">
                                                        <button>อัปเดตงาน</button>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.box-body -->

                </div>
            </section><!-- /.content -->

        </div><!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php include("../service/footer.php"); ?>


    </div><!-- ./wrapper -->
    </div>
</body>

</html>
<!-- <script>
    $(document).ready(function() {
        $('#example1').DataTable({
            "aaSorting": [
                [0, 'desc']
            ],
            //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
        });
    });
</script> -->
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

    function confirm() {

        var el = document.getElementById('del');
        el.remove();

    }
</script>
<!-- <script type="text/javascript">
$(function () {
});
</script>
 -->


<script>
    // Get the modal
    var modal = document.getElementById("Modal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $(document).ready(function() {
        jQuery('.timeline').timeline({
            //mode: 'horizontal',
            //visibleItems: 4
            //Remove this comment for see Timeline in Horizontal Format otherwise it will display in Vertical Direction Timeline
        });
    });
</script>