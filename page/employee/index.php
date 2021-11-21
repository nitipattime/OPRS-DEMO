<?php include("../service/head.php"); ?>

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
                    รายงานผมการปฎิบัติงาน
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://127.0.0.1/eprojectv1.1/"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                    <li class="active"> จัดการxxx </li>
                </ol>
            </section>
            <!-- Top menu -->
            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                <div class="box">
                    <!-- <div class="box-header">
                        <h3 class="box-title">ตารางข้อมูล</h3>
                    </div>/.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a class="btn btn-success" href="from_addReport.php" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                                    <a class="btn btn-default" href="http://127.0.0.1/eprojectv1.1/position" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                                </div>
                                <div class="col-sm-6">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <br />
                                    
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" class="info">
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">id</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">FName</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">LName</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row">
                                                <td align="center">1</td>
                                                <td>admin</td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/1" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/1" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/1" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/1" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/1" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">2</td>
                                                <td>Boss</td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/2" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/2" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/2" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/2" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/2" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            
                                            <tr role="row">
                                                <td align="center">3</td>
                                                <td>staff</td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/3" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/3" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/3" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/3" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/3" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">4</td>
                                                <td>Employee</td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/4" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/4" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/4" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/4" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/4" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">4</td>
                                                <td>Employee</td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/4" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/4" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/position/edit/4" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/4" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/position/del/4" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                eProject SYSTEM
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2019 All rights reserved.
        </footer>
    </div><!-- ./wrapper -->
    </div>
</body>

</html>

<!-- Sort DESC -->
<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            "aaSorting": [
                [0, 'desc']
            ],
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
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
<!-- <script type="text/javascript">
$(function () {
});
</script>
 -->

<script type="text/javascript">



</script>