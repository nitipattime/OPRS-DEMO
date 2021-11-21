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
                    <?php include("show_eval_graph.php"); ?>
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