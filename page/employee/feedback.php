<?php include("../service/head.php"); ?>
<?php include("show_report_db.php"); ?>
<?php $count = 1; ?>

<head>

    <style>
        thead tr th {
            text-align: center;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body class="skin-red sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <?php include("../service/header.php"); ?>

        <!-- Sidebar -->
        <?php include("../service/sidebar_emp.php"); ?>

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
                            <h2 class="box-title">ตารางข้อความเสนอแนะ</h2>
                        </div>
                        <!-- <div style="text-align:right;">
                            <a class="btn btn-success" href="form_addreport.php" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                        </div> -->

                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <br />

                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" class="info">
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ลำดับ</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วันเดือนปี</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 30%;">หัวข้อ</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายละเอียด</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">สถานะ</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!--  -->
                                            <?php foreach ($result as $row) { ?>
                                                <tr id="del" role="row" align="center">
                                                    <td><?php echo $count++; ?> </td>
                                                    <td><?php //echo $row['create_time']; ?></td>
                                                    <td><?php //echo $row['s_header']; ?></td>
                                                    <td><?php //echo $row['s_detail']; ?></td>
                                                    <td><?php echo " "; ?></td>

                                                    <td>
                                                        <a href="view_data.php" class="btn btn-info btn-xs">
                                                            ดู
                                                        </a>


                                                        <a href="form_addfeedback.php" class="btn btn-warning btn-xs">
                                                            ตอบกลับ
                                                        </a>


                                                        <a class="btn btn-danger btn-xs" href="delete_db.php?iddel=<?php //echo $row["reportdetail_ID"];  ?>" role="button"><i class="fa fa-fw fa-trash"></i>
                                                            ลบ
                                                        </a>

                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>




                                    <br>
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

    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
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
</script>
<!-- <script type="text/javascript">
$(function () {
});
</script>
 -->

<script type="text/javascript">



</script>