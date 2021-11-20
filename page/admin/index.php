<?php include("../service/head.php"); ?>
<?php include("show_member_db.php"); ?>

<body class="skin-red sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <?php include("../service/header.php"); ?>

        <!-- Sidebar -->
        <?php include("../service/sidebar_admin.php"); ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    จัดการสมาชิก
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                    <li class="active"> จัดการสมาชิก </li>
                </ol>
            </section>
            <!-- Top menu -->

            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">ตารางข้อมูล</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a class="btn btn-success" href="from_addmember.php" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                                    <a class="btn btn-default" href="index.php" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <br />
                                    <table id="example1" class="table table-bordered table-striped dataTable " role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" class="info" >
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;" >id</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">Name Title</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">LName</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">FName</th>
                                                
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">Email</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">Password</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">Tel</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">Department</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 7%;">RePwd</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 7%;">Edit</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 7%;">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($result as $row) { ?>
                                                <tr role="row" align="center">
                                                    <td><?php echo $row['m_ID'] ?> </td>
                                                    <td><?php echo $row['m_NameTitle'] ?></td>
                                                    <td><?php echo $row['m_FName'] ?></td>
                                                    <td><?php echo $row['m_LName'] ?></td>
                                                    <td><?php echo $row['m_Email'] ?></td>
                                                    <td><?php echo $row['m_Password'] ?></td>
                                                    <td><?php echo $row['m_Tel'] ?></td>
                                                    <td><?php echo $row['m_Department'] ?></td>
                                                    <td>
                                                        <a href="from_repasswmember.php?m_ID=<?php echo $row['m_ID'] ?>" class="btn btn-info btn-xs">
                                                        Rpwd
                                                        </a>
                                                    </td>
                                                    <td>
                                                    <a href="from_editmember.php?m_ID=<?php echo $row['m_ID'] ?>" class="btn btn-warning btn-xs">
                                                        Edit
                                                    </a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger btn-xs" href="delete_member.php?m_ID=<?php echo $row['m_ID'] ?>" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i>Delete</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                            <!-- <tr role="row">
                                                <td align="center">2</td>
                                                <td align="center">
                                                    <img src="http://127.0.0.1/eprojectv1.1/uploads/634d442e800b9154f5661c18d5bc9642.png" width="100%">

                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit_img/2" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>


                                                </td>
                                                <td>admin</td>
                                                <td>
                                                    นาย1 1<br>email : <br>mobile :
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/pwd/2" class="btn btn-info btn-xs">
                                                        pwd
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit/2" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/member/del/2" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr> -->


                                            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->


                                            <!-- <tr role="row">
                                                <td align="center">3</td>
                                                <td align="center">
                                                    <img src="http://127.0.0.1/eprojectv1.1/uploads/634d442e800b9154f5661c18d5bc9642.png" width="100%">

                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit_img/3" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>


                                                </td>
                                                <td>admin</td>
                                                <td>
                                                    นายadmin2 system<br>email : admin@g.com<br>mobile : 0111111111
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/pwd/3" class="btn btn-info btn-xs">
                                                        pwd
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit/3" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/member/del/3" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">4</td>
                                                <td align="center">
                                                    <img src="http://127.0.0.1/eprojectv1.1/uploads/c45885de2d8769524a8bc6f9ba3ca78c.png" width="100%">

                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit_img/4" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>


                                                </td>
                                                <td>Boss</td>
                                                <td>
                                                    นายboss1 boss1<br>email : boss1@a.com<br>mobile : 02324242424
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/pwd/4" class="btn btn-info btn-xs">
                                                        pwd
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit/4" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/member/del/4" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">5</td>
                                                <td align="center">
                                                    <img src="http://127.0.0.1/eprojectv1.1/uploads/634d442e800b9154f5661c18d5bc9642.png" width="100%">

                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit_img/5" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>


                                                </td>
                                                <td>admin</td>
                                                <td>
                                                    นายaaaa aaaa<br>email : aa@email.com<br>mobile : 1111111111
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/pwd/5" class="btn btn-info btn-xs">
                                                        pwd
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit/5" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/member/del/5" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">6</td>
                                                <td align="center">
                                                    <img src="http://127.0.0.1/eprojectv1.1/uploads/634d442e800b9154f5661c18d5bc9642.png" width="100%">

                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit_img/6" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>


                                                </td>
                                                <td>admin</td>
                                                <td>
                                                    นายadminadminadminadmin adminadminadminadmin<br>email : aa@email.com<br>mobile : 1111111111
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/pwd/6" class="btn btn-info btn-xs">
                                                        pwd
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit/6" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/member/del/6" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">7</td>
                                                <td align="center">
                                                    <img src="http://127.0.0.1/eprojectv1.1/uploads/634d442e800b9154f5661c18d5bc9642.png" width="100%">

                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit_img/7" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>


                                                </td>
                                                <td>staff</td>
                                                <td>
                                                    นายstafff stafffstafff<br>email : aa@email.com<br>mobile : 1111111111
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/pwd/7" class="btn btn-info btn-xs">
                                                        pwd
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit/7" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/member/del/7" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">8</td>
                                                <td align="center">
                                                    <img src="http://127.0.0.1/eprojectv1.1/uploads/aedf0d6334650bff760bef1f32b0d208.png" width="100%">

                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit_img/8" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>


                                                </td>
                                                <td>staff</td>
                                                <td>
                                                    นายstaff2 staff2<br>email : aa@email.com<br>mobile : 1111111111
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/pwd/8" class="btn btn-info btn-xs">
                                                        pwd
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit/8" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/member/del/8" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">9</td>
                                                <td align="center">
                                                    <img src="http://127.0.0.1/eprojectv1.1/uploads/8e6104392ccdd4da3714b45eda2a7d3a.png" width="100%">

                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit_img/9" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>


                                                </td>
                                                <td>Employee</td>
                                                <td>
                                                    นายพนง.1 ดีมาก1<br>email : dddd21@email.com<br>mobile : 099999999999
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/pwd/9" class="btn btn-info btn-xs">
                                                        pwd
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit/9" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/member/del/9" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td align="center">10</td>
                                                <td align="center">
                                                    <img src="http://127.0.0.1/eprojectv1.1/uploads/ff2fe2e3de23846f7bdaa874ab8af3eb.png" width="100%">

                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit_img/10" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>


                                                </td>
                                                <td>staff</td>
                                                <td>
                                                    นายจัดการ12 พัสดุ12<br>email : abc12@g.com<br>mobile : 099999999222
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/pwd/10" class="btn btn-info btn-xs">
                                                        pwd
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="http://127.0.0.1/eprojectv1.1/member/edit/10" class="btn btn-warning btn-xs">
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="http://127.0.0.1/eprojectv1.1/member/del/10" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                </td>
                                            </tr> -->
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
        <?php include("../service/footer.php"); ?>


    </div><!-- ./wrapper -->
    <!-- </div> -->
</body>

</html>
<!-- !!! Sort id DESC -->
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
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
            // 'paging': true,
            // 'lengthChange': true,
            // 'searching': true,
            // 'ordering': true,
            // 'info': true,
            // 'autoWidth': true
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