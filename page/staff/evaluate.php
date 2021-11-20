<?php include("../service/head.php"); ?>

<head>
    <link rel="stylesheet" href="../../adddemo/plugins/select2/css/select2.min.css">
    <style>
        .head_es {
            text-align: center;
            font-size: 20px;
        }

        tr,
        td~.head1 {
            border: 1px solid black;
        }

        tr,
        td {
            padding: 10px;
        }

        .head1 {
            background: #17a2b8;
            color: white;

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
                    <div class="box box-primary"><br>
                        <div>
                            <h1 style="text-align: center;">
                                แบบประเมินการปฏิบัติงาน
                            </h1>
                        </div>

                        <div class="f_select">
                            
                        </div>

                        <br><br><br>
                        <div>
                            <p style="font-size: 18px;"><u>คำชี้แจง </u> โปรดทำการคลิ๊กเลือกสัญลักษณ์ ○ ในช่องว่างที่ตรงกับความคิดเห็นของท่าน 5 = ดีเยี่ยม ,4 = ดีมาก ,3 = ดี ,2 = พอใช้ และ 1 = ควรพัฒนา</p>
                        </div>
                        <div class="card">
                            <form action="evalu_db.php" method="POST">
                                <table>
                                    <!-- <thead class="head_es">
                                    <tr>
                                        <th>แบบประเมิน</th>
                                    </tr>
                                </thead> -->
                                    <tbody>
                                        <tr class="head1">
                                            <td> ความรู้ใฝ่รู้ K (ประยุกต์ใช้ความรู้ได้ตามสถานการณ์)</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <td>สามารถให้ข้อเสนอแนะเพื่อปรับปรุงวิธีการปฎิบัติงานใน
                                                สายงานที่เ้กี้ยวข้องกับตนเอง โดยใช้ความรู้ใหม่ๆ</td>
                                            <td><input type="radio" value="1" name="k1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="k1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="k1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="k1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="k1" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>ลงมือปรับปรุงวิธีการปฎิบัติงานโดยประยุกต์ใช้ความรู้ใหม่ๆ
                                                ที่ได้จากประสบการณ์และแหล่งความรู้อื่นๆจนเกิดความ
                                                คืบหน้าอย่างเห็นได้ชัด</td>
                                            <td><input type="radio" value="1" name="k2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="k2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="k2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="k2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="k2" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>สามารถเปลี่ยนวิธีการปฎิบัติงานโดยอธิบายได้ถึงเหตุผลความ
                                                จำเป็นที่อิงอยู่กับข้อความรู้และประสบการณ์เมื่อเกิดปัญหา
                                                หรือสถานการณ์ความเปลี่ยนแปลง</td>
                                            <td><input type="radio" value="1" name="k3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="k3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="k3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="k3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="k3" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr class="head1">
                                            <td>คุณธรรมและความซื่อสัตย์ M (เป็นแบบอย่างของความซื่อสัตย์และอุทิศตนเพื่อผดุงความยุติธรรม)</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <td>นำเสนอหลักการทำงานด้วยความโปร่งใสในการดำเนินงานร่วม
                                                กับหน่วยงานภายนอก</td>
                                            <td><input type="radio" value="1" name="m1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="m1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="m1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="m1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="m1" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>คิดหาวิธีการสนับสนุนและจูงใจให้บุคคลในองค์กรยึดมั่นและ
                                                ปฎิบัติตนอย่างซื่อสัตย์สุจริต</td>
                                            <td><input type="radio" value="1" name="m2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="m2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="m2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="m2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="m2" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>ธำรงความถูกต้อง ยืนหยัดพิทักษ์ผลประโยชน์และชื่อเสียงของ
                                                มหาวิทยาลัยแม้ในสถานการณ์ที่อาจะเสี่ยงต่อความมั่นคงใน
                                                ตำแหน่งหน้าที่การงานของตนเองหรืออาจเสี่ยงต่อชีm</td>
                                            <td><input type="radio" value="1" name="m3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="m3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="m3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="m3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="m3" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr class="head1">
                                            <td>ความมุ่งมั่นให้เกิดผลสำเร็จของงาน U
                                                ( สามารถทำงานได้ผลงานที่มีประสิทธิภาพมากยิ่งขึ้น )</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <td>มีความละเอียดรอบคอบเอาใจใส่ ตรวจตราความถูกต้องของ
                                                งานเพื่อให้ได้งานที่มีคุณภาพ</td>
                                            <td><input type="radio" value="1" name="u1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="u1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="u1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="u1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="u1" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>ปรับปรุงวิธีการทำงานได้ดีขึ้น เร็วขึ้น มีคุณภาพดีขึ้น
                                                หรือมีประสิทธิภาพมากขึ้น</td>
                                            <td><input type="radio" value="1" name="u2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="u2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="u2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="u2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="u2" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>เสนอหรือทดลองวิธีการทำงานแบบใหม่ที่มีประสิทธิภาพ
                                                มากกว่าเดิมเพื่อให้ได้ผลงานตามที่กำหนดไว้</td>
                                            <td><input type="radio" value="1" name="u3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="u3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="u3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="u3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="u3" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr class="head1">
                                            <td>การทำงานเป็นทีม T ( สามารถเข้าร่วมกำหนดเป้าหมาย
                                                ประสานงาน แก้ไขปัญหาและอุปสรรค )</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <td>เข้าร่วมกำหนดวัตถุประสงค์ เป้าหมาย และวางแผนการดำเนิน
                                                งานของทีม / หน่วยงาน</td>
                                            <td><input type="radio" value="1" name="t1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="t1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="t1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="t1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="t1" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>ไกล่เกลี่ยแก้ไขปัญหาหรือข้อพิพากระหว่างสมาชิก</td>
                                            <td><input type="radio" value="1" name="t2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="t2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="t2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="t2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="t2" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>ประสานงานแก้ไขปัญหาและอุปสรรคในการทำงาน</td>
                                            <td><input type="radio" value="1" name="t3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="t3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="t3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="t3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="t3" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr class="head1">
                                            <td>จิตสำนึกองค์กร N ( สำนึกต่อความเป็นเจ้าของพอสมควร )</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <td>การรับอาสาทำการกิจกรรมเพื่อส่วนรวม</td>
                                            <td><input type="radio" value="1" name="n1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="n1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="n1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="n1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="n1" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>รายงานปัญหาต่อผู้บังคับบัญชาทราบและพร้อมจะรับผิดชอบที่
                                                จะแก้ไขร่วมกับผู้อื่น</td>
                                            <td><input type="radio" value="1" name="n2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="n2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="n2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="n2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="n2" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>สอนแนะผู้ใต้บังคับบัญชาถึงโครงสร้างหน่วยงาน การดำเนินงาน
                                                ตามภารกิจกฎระเบียบ และ กระบวนการทำงานในปัจจุบัน</td>
                                            <td><input type="radio" value="1" name="n3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="n3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="n3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="n3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="n3" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr class="head1">
                                            <td>การพัฒนางานอย่างต่อเนื่อง B ( หาแนวทางใหม่ เพื่อปรับปรุงให้
                                                ดีกว่าเดิม )</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <td>เสนอแนะวิธีการแก้ปัญหาหรือปรับปรุงงานที่ดีกว่าเดิม ซึ่งวิธีการ
                                                ดังกล่าวยังไม่เคยใช่ในหน่วยงานมาก่อน ด้วยความคิด"นอกกรอบ"
                                                หรือคิดแตกต่างจากที่เคยทำ</td>
                                            <td><input type="radio" value="1" name="b1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="b1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="b1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="b1" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="b1" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>ประยุกต์แนวคิด ทฤษฎี หรือองค์ความรู้ใหม่ๆ ที่เกี่ยวข้องมาให้ใน
                                                การพัฒนาหรือปรับปรุงกระบวนการทำงานของตนหรือหน่วยงาน
                                                ของตนให้มีประสิทธิภาพมากขึ้น</td>
                                            <td><input type="radio" value="1" name="b2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="b2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="b2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="b2" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="b2" aria-label="radio for following text input"></td>
                                        </tr>

                                        <tr>
                                            <td>จัดทำแผนปฎิบัติการ ( Action plan ) ในการปฎิบัติงาน</td>
                                            <td><input type="radio" value="1" name="b3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="2" name="b3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="3" name="b3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="4" name="b3" aria-label="radio for following text input"></td>
                                            <td><input type="radio" value="5" name="b3" aria-label="radio for following text input"></td>
                                        </tr>

                                    </tbody>

                                </table>

                                </br>
                                <div style="margin: 15px;">
                                    <label for="">ข้อเสนอแนะ</label></br>
                                    <textarea name="succ" id="succ" cols="100" rows="5" style="width: 100%;"></textarea>
                                </div>


                                <div class="d-grid gap-2 d-md-block" style="text-align: center;">
                                    <input class="btn btn-primary" type="submit" value="ส่งแบบประเมิน"> </input>
                                </div>
                                </br>
                            </form>
                        </div>

                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php include("../service/footer.php"); ?>


    </div><!-- ./wrapper -->
    </div>
</body>

</html>
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
<script type="text/javascript">



</script>