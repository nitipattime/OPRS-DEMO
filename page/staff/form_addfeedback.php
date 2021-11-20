<?php include("../service/head.php"); ?>
<?php include("data_select_db.php"); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- add -->
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="../../adddemo/plugins/fontawesome-free/css/all.min.css"> -->
    <!-- Select2 -->
    <link rel="stylesheet" href="../../adddemo/plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="../../adddemo/dist/css/adminlte.min.css"> -->

    <style>

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
                    <!-- ฟอร์มเพิ่มรายงานการปฎิบัติงาน -->
                </h1>
                <!-- <ol class="breadcrumb">
                    <li><a href="http://127.0.0.1/eprojectv1.1/"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                    <li><a href="http://127.0.0.1/eprojectv1.1/member"> จัดการสมาชิก </a></li>
                    <li class="active">เพิ่มข้อมูลใหม่</li>
                </ol> -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <!-- Your Page Content Here -->
                    <div class="box box-primary">

                        <div class="row ">
                            <div class="col-md-6 col-md-offset-3 ">
                                <h2>ตอบคำแนะนำกลับ</h2>
                                <!-- <p>
                                        Please provide your feedback below:
                                    </p> -->
                                <form  method="post" id="reused_form">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <!-- <label>How do you rate your overall experience?</label>
                                                <p>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="experience" id="radio_experience" value="bad">
                                                        Bad
                                                    </label>

                                                    <label class="radio-inline">
                                                        <input type="radio" name="experience" id="radio_experience" value="average">
                                                        Average
                                                    </label>

                                                    <label class="radio-inline">
                                                        <input type="radio" name="experience" id="radio_experience" value="good">
                                                        Good
                                                    </label>
                                                </p> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label for="comments">
                                                ข้อความ:</label>
                                            <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-2 control-label">
                                        ชื่อผู้ส่ง
                                    </div>
                                    <div class="col-sm-10">
                                        <select class="select2" multiple="multiple" data-placeholder="รายชื่อสมาชิก" style="width: 100%; color:black;" name="recipient[]">
                                            <?php foreach ($result as $row) { ?>
                                                <?php if ($row["m_role"] == "boss" || $row["m_role"] == "staff") { ?>
                                                    <option value="<?php echo $row["m_FName"] . " " . $row["m_LName"]; ?>"><?php echo $row["m_FName"] . " " . $row["m_LName"]; ?> </option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <br><br><br>

                                    <div class="col-sm-2 control-label">
                                        แผนก :
                                    </div>
                                    <div class="col-sm-10">
                                        <select name="station" class="form-control" required>
                                            <option value="t_id">-เลือกข้อมูล-</option>
                                            <option value="สำนักงาน">สำนักงาน</option>
                                            <option value="บ้าน">บ้าน</option>

                                        </select>
                                    </div>


                                    <br><br><br><br>
                                    <div style="text-align: center;">
                                        <button type="submit" class="btn btn-lg btn-warning ">ส่ง </button>
                                    </div>
                                    <br><br>
                                </form>
                            </div>


                        </div>
                    </div>

                </div>
        </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include("../service/footer.php"); ?>


    </div><!-- ./wrapper -->
    </div>

    <script src="jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <!-- <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <!-- <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script> -->
    <script src="datatables.net/js/jquery.dataTables.min.js"></script>
    <!-- <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
    <script src="datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <!-- <script src="../dist/js/adminlte.min.js"></script> -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="../dist/js/demo.js"></script> -->
    <script src="dist/js/demo.js"></script>
    <!-- <script src="../bower_components/ckeditor/ckeditor.js"></script> -->
    <script src="ckeditor/ckeditor.js"></script>
    <!-- page script -->
    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                //"aaSorting" :[[0,'desc']],
                //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
            });
        });
    </script>
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': false,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
    <script>
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>


    <!-- add -->
    <!-- jQuery -->
    <script src="../../adddemo/plugins/jquery/jquery.min.js"></script>

    <!-- Select2 -->
    <script src="../../adddemo/plugins/select2/js/select2.full.min.js"></script>
    <!-- AdminLTE App -->
    <!-- <script src="../../adddemo/dist/js/adminlte.min.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="../../adddemo/dist/js/demo.js"></script> -->

    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>
</body>

</html>