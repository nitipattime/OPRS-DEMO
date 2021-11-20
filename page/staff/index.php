<?php include("../service/head.php"); ?>
<?php include("show_report_db.php"); ?>
<?php $count = 1; ?>

<head>
    <style>
        thead tr th {
            text-align: center;
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
                         <!-- menu -->
 
                                
                            <div class="row">
                                <div class="col-sm-4 " >
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>150</h3>

                                            <p>รายงานเข้าใหม่</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>

                                <div class="col-sm-4 ">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                                            <p>ติดตามงานของพนักงาน</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>

                                <div class="col-sm-4 ">
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>65</h3>
                                            <p>แบบประเมินพนักงาน
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>

                  
                                                    
                        </div>
                         <!-- /menu -->
                        <div style="text-align:left;">
                            <h2 class="box-title">ผลการรายงานการปฏิบัติงานของพนักงาน</h2>
                        </div>
                        <div style="text-align:right;">
                            <!-- <a class="btn btn-success" href="form_addreport.php" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a> -->
                        </div>

                    </div><!-- /.box-header -->

                    <div class="box-body">

                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <br />

                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" class="info">
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วันเดือนปี</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อจริง</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">นามสกุล</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 25%;">หัวข้อ</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">แผนก</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">#</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">#</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!--  -->
                                            <?php foreach ($result as $row) { ?>
                                                <tr id="del" role="row" align="center">
                                                    <td><?php echo $count++; ?> </td>
                                                    <td><?php //echo $row['create_time']; ?></td>
                                                    <td><?php echo " "; ?></td>
                                                    <td><?php echo " "; ?></td>
                                                    <td><?php echo " "; ?></td>
                                                    <td><?php echo $row['r_Header']; ?></td>
                                                    <td><?php //echo " "; ?></td>
                                                    <td>
                                                    <a href="view_data.php" class="btn btn-info btn-xs">
                                                            อ่าน
                                                        </a>
                                                        
                                                        <!-- <a href="form_editreport.php?idreport=<?php //echo $row["r_ID"];  ?>" class="btn btn-warning btn-xs">
                                                            
                                                        </a> -->
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger btn-xs" href="delete_db.php?iddel=<?php echo $row["r_ID"];  ?>" role="button"><i class="fa fa-fw fa-trash"></i>
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
</script>
<!-- <script type="text/javascript">
$(function () {
});
</script>
 -->

<script type="text/javascript">



</script>