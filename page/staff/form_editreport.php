<?php include("../service/head.php"); ?>
<?php include("edit_report.php"); ?>


<?php foreach ($result as $row) { ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> </title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="plugins/datatables/jquery.dataTables.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

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
                        ฟอร์มแก้ไขรายงานการปฎิบัติงาน
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="http://127.0.0.1/eprojectv1.1/"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                        <li><a href="http://127.0.0.1/eprojectv1.1/member"> จัดการสมาชิก </a></li>
                        <li class="active">เพิ่มข้อมูลใหม่</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="container">
                        <!-- Your Page Content Here -->
                        <div class="box box-primary">
                            <br><br>
                            <!-- form start -->
                            <form action="edit_report.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        ชื่อหัวข้อรายงาน
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="header" required class="form-control" value="<?php echo $row['r_Header'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        รายละเอียดการปฎิบัติงาน:
                                    </div>
                                    <div class="col-sm-8">
                                        <!-- <textarea id="editor1" name="detail" rows="10" cols="110" value=""><?php //echo $row['s_detail'] ?></textarea> -->
                                        <textarea id="editor1" name="detail" rows="10" cols="110" value=""><?php echo $row['r_Header'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        สถานที่ปฎิบัติงาน :
                                    </div>
                                    <div class="col-sm-3">
                                        <select name="station" class="form-control" value="" required>
                                            <option value="t_id">-เลือกข้อมูล-</option>
                                            <option value="สำนักงาน">สำนักงาน</option>
                                            <option value="บ้าน">บ้าน</option>

                                        </select>
                                    </div>

                                    <div class="col-sm-2 control-label">
                                        ความสำเร็จของงาน :
                                    </div>
                                    <div class="col-sm-3">
                                        <select name="succ" class="form-control" required>
                                            <option value="t_id"><?php echo $row['succ']; ?></option>
                                            <option value="10">10 %</option>
                                            <option value="20">20 %</option>
                                            <option value="30">30 %</option>
                                            <option value="40">40 %</option>
                                            <option value="50">50 %</option>
                                            <option value="60">60 %</option>
                                            <option value="70">70 %</option>
                                            <option value="80">80 %</option>
                                            <option value="90">90 %</option>
                                            <option value="100">100 %</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        วันที่ทำงาน :
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" placeholder="Username" aria-label="วันเริ่มทำงาน" name="ds">
                                        <div style="background:#D3D3D3; text-align:center; font-size: 15px; " class="gg">ถึง</div>
                                        <input type="date" class="form-control" placeholder="Server" aria-label="Server" name="de">
                                    </div>

                                    <div class="col-sm-2 control-label">
                                        เวลาทำงาน :
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="time" class="form-control " name="ts">
                                        <div style="background:#D3D3D3; text-align:center; font-size:15px; " class="gg">ถึง</div>
                                        <input type="time" class="form-control" name="te">
                                    </div>


                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        ปัญหาที่พบ :
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="problem"></textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        รูปภาพ :
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="file" name="s_photo" required class="form-control" accept="image/*">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        ส่งให้กับ
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="select2" multiple="multiple" data-placeholder=" <?php echo $row['recipient'] ?>" style="width: 100%; color:black;" name="member" disabled> </select>
                                    </div>
                                </div>



                                <div class="col" style="text-align: center;">
                                    <input type="hidden" name="ref_m_id" value="7">
                                    <button type="submit" class="btn btn-primary">อัพเดตข้อมูล</button>
                                </div>

                                <br><br>
                            </form>
                        </div>
                    </div>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <?php include("../service/footer.php"); ?>

        <?php } ?>
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