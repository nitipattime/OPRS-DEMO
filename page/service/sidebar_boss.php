<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../assets/images/<?php echo $_SESSION['m_Img']; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>
                    <!-- BILLMURRAYY -->
                    <?php echo $_SESSION['Name'] ?>
                </p>
                <!-- Status -->
                <a href="#">
                    <i class="fa fa-circle text-success">
                    </i><span>Online</span> 
                </a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <!-- Admin -->

        <ul class="sidebar-menu" id="menu">
            <li class="btns active"><a href="index.php">
                <i class="fa fa-home"></i> <span>หน้าหลัก</span> </a>
            </li>
            <li class="btns"><a href="#">
                <i class="fa fa-home"></i> <span>Feedback</span> </a>
            </li>
            <li class="btns"><a href="#">
                <i class="fa fa-home"></i> <span>Evaluate</span> </a>
            </li>
            <!-- <li><a href="http://127.0.0.1/eprojectv1.1/admin/devices">
                    <i class="fa fa-files-o"></i> <span>รายการครุภัณฑ​์ </span> </a></li> -->
            <li class="btns">
                <a href="view.php">
                    <i class="fa fa-files-o"></i>
                    <span>รายงานภาพรวม</span>
                </a>
                <!-- <ul class="treeview-menu">
                    <li>
                        <a href="http://127.0.0.1/eprojectv1.1/member">
                            <i class="fa fa-circle-o"></i> <span>สมาชิก</span>  </a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/eprojectv1.1/position">
                            <i class="fa fa-circle-o"></i> ตำแหน่งงาน </a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/eprojectv1.1/report">
                            <i class="fa fa-circle-o"></i> Report </a>
                    </li>
                    <li>
                        <a href="../../logout.php" onclick="return confirm('ยืนยัน');">
                            <i class="fa fa-circle-o"></i> Logout </a>
                    </li>
                </ul> -->
            </li>
            <li>
                <a href="../../logout.php" onclick="return confirm('ยืนยัน');">
                <i class="fa fa-circle-o"></i> <span>Logout</span> </a>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->

</aside>
<!-- <script type="text/javascript">
        // Add active class to the current button (highlight it)
        var header = document.getElementById("menu");
        var btns = header.getElementsByClassName("btns");
        // console.log(btns);
        // var current = document.getElementsByClassName("active");
        // console.log(current);
        // console.log(current[0]);
        // console.log(current[0].className);
        // console.log(btns.length);
        // console.log(current[0].className.replace(" active", ""));
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                console.log(current[0].className);
                current[0].className = current[0].className.replace(" active", "");
                // current[0].className.replace(" active", "");
                console.log(i);
                // console.log(this.className += " active");
                this.className += " active";
                
            });
            // break;
        }

</script> -->