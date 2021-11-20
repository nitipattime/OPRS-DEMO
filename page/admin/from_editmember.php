<?php
//echo $_GET['m_ID'];
?>
<?php include("../service/head.php"); ?>

<?php include("show_edit_member_db.php"); ?>
<?php foreach ($result as $row) { ?>

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
					ฟอร์มแก้ไขข้อมูลสมาชิก
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
					<li><a href="from_editmember.php?m_ID=<?php echo $row['m_ID']?>"> จัดการสมาชิก </a></li>
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

								
								<form role="form" action="edit_member_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="box-body">
										<div class="form-group">
											<div class="col-sm-2 control-label">
												ชื่อตำแหน่ง
											</div>
											<div class="col-sm-3">
												<select name="m_Department" class="form-control" required>
													<option value="<?php echo $row['m_Department']?>">
													-<?php echo $row['m_Department']?>-
													</option>
													<option value="">-เลือกข้อมูล-</option>
													<option value="admin">-admin-</option>
													<option value="boss">-Boss-</option>
													<option value="staff">-staff-</option>
													<option value="employee">-Employee-</option>
												</select>
											</div>
										</div>
										<!-- <div class="form-group">
											<div class="col-sm-2 control-label">
												Username
											</div>
											<div class="col-sm-3">
												<input type="text" name="m_username" class="form-control" required value="staff" disabled>

											</div>
										</div> -->
										<div class="form-group">
											<div class="col-sm-2 control-label">
												คำนำหน้า
											</div>
											<div class="col-sm-2">
												<select name="m_NameTitle" class="form-control" required >
													<option value="นาย">-<?php echo $row['m_NameTitle']?>-</option>
													<option value="">-เลือกข้อมูล-</option>
													<option value="นาย">-นาย-</option>
													<option value="นางสาว">-นางสาว-</option>
													<option value="นาง">-นาง-</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-2 control-label">
												ชื่อ
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_FName" class="form-control" required value="<?php echo $row['m_FName']?>">
												</span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-2 control-label">
												นามสกุล
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_LName" class="form-control" required value="<?php echo $row['m_LName']?>">
												<input type="hidden" name="m_ID" class="form-control" required value="<?php echo $row['m_ID']?>">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-2 control-label">
												email
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_Email" class="form-control" required value="<?php echo $row['m_Email']?>" disabled>
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-2 control-label">
												phone
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_Tel" class="form-control" required value="<?php echo $row['m_Tel']?>">
											</div>
										</div>


										<div class="form-group">
											<div class="col-sm-2 control-label">
												img
											</div>
											<div class="col-sm-4">
												<br>
												ภาพเก่า <br><br>
												<img src="../../assets/images/<?php echo $row['m_Img']?>" width="300px">
												<br>
												<?php echo $row['m_Img']?><br><br>
												เลือกไฟล์ใหม่<br>
												<input type="file" name="m_Img" id="m_Img"
												class="form-control" accept="image/*" value="C://Users//nitip//Downloads//spotify-logo-png-7053.png">

												<input type="hidden" name="m_img" class="form-control" required value="<?php echo $row['m_Img']?>">
											</div>
										</div>


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
								
								<?php } ?>
								<script>document.getElementById('m_Img').submit();</script>
							</div>
						</div>
					</div>
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
<!-- <script>
$(document).ready(function() {
$('#example1').DataTable( {
"aaSorting" :[[0,'desc']],
//"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
});
} );

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
</script>
<!-- <script type="text/javascript">
$(function () {
});
</script>
 -->

<script type="text/javascript">



</script>