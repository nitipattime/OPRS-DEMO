<?php include("../service/head.php"); ?>


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
					ฟอร์มเพิ่มข้อมูลสมาชิก
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
					<div class="row">
						<div class="col-sm-12">
							<!-- Your Page Content Here -->
							<div class="box box-primary">
								<div class="box-header with-border">
									<!-- <h3 class="box-title"> +ข่าวใหม่ </h3> -->
								</div><!-- /.box-header -->
								<!-- form start -->
								<form role="form" action="add_member_db.php" method="post" class="form-horizontal" enctype="multipart/form-data" name="upfile">
									<div class="box-body">
										<div class="form-group">
											<div class="col-sm-2 control-label">
												ชื่อตำแหน่ง
											</div>
											<div class="col-sm-3">
												<select name="m_Department" class="form-control" required>
													<option value="">-เลือกข้อมูล-</option>
													<option value="admin">-admin-</option>
													<option value="boss">-Boss-</option>
													<option value="staff">-staff-</option>
													<option value="employee">-Employee-</option>
												</select>
												<span class="fr"></span>
											</div>
										</div>
										<!-- <div class="form-group">
											<div class="col-sm-2 control-label">
												Username
											</div>
											<div class="col-sm-3">
												<input type="text" name="m_username" class="form-control" required placeholder="ภาษาอังกฤษ/ตัวเลข" value="" minlength="4">
												<span class="fr"></span>
											</div>
										</div> -->
										<div class="form-group">
											<div class="col-sm-2 control-label">
												คำนำหน้า
											</div>
											<div class="col-sm-2">
												<select name="m_NameTitle" class="form-control" required>
													<option value="">-เลือกข้อมูล-</option>
													<option value="นาย">-นาย-</option>
													<option value="นางสาว">-นางสาว-</option>
													<option value="นาง">-นาง-</option>
												</select>
												<span class="fr"></span>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-2 control-label">
												ชื่อ
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_FName" class="form-control" required placeholder="ชื่อ" value="" minlength="2">
												<span class="fr"></span>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-2 control-label">
												นามสกุล
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_LName" class="form-control" required placeholder="นามสกุล" value="" minlength="2">
												<span class="fr"></span>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-2 control-label">
												email
											</div>
											<div class="col-sm-4">
												<input type="email" name="m_Email" class="form-control" required placeholder="email" value="" minlength="5">
												<span class="fr"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-2 control-label">
												Password
											</div>
											<div class="col-sm-4">
												<input type="password" name="m_Password" class="form-control" required placeholder="ภาษาอังกฤษ/ตัวเลข/ขั้นต่ำ 4 ตัว" minlength="4" value="">
												<span class="fr"></span>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-2 control-label">
												Mobile
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_Tel" class="form-control" required placeholder="เบอร์โทร 10 หลัก" minlength="10" maxlength="10" value="">
												<span class="fr"></span>
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-2 control-label">
												image
											</div>
											<div class="col-sm-4">
												<input type="file" name="m_Img" class="form-control" required accept="image/*"
												>
												<!-- <input type="file" name="fileupload" id="fileupload"  required="required"/> -->
											</div>
										</div>

										<!-- <div class="form-group">
											<div class="col-sm-2 control-label">
												Mobile
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_Tels" class="form-control" required placeholder="เบอร์โทร 10 หลัก" minlength="10" maxlength="10" value="">
												<span class="fr"></span>
											</div>
										</div> -->


										<div class="form-group">
											<div class="col-sm-2 control-label">

											</div>
											<div class="col-sm-3">
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
												<a class="btn btn-danger" href="index.php" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>


											</div>
										</div>

									</div><!-- /.box-body -->
								</form>
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

<script type="text/javascript">



</script>