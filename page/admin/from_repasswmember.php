<?php 
//echo "m_ID : ".$_GET['m_ID'];
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
					ฟอร์มแก้ไข password
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
								<form role="form" action="repwd_member_db.php" method="post" class="form-horizontal">
									<div class="box-body">
										<div class="form-group">
											<div class="col-sm-2 control-label">
												ชื่อตำแหน่ง
											</div>
											<div class="col-sm-3">
												<select name="m_Department" class="form-control" required disabled>
													<option value="<?php echo $row['m_Department']?>">
														-<?php echo $row['m_Department']?>-
													</option>
													<option value="">-เลือกข้อมูล-</option>
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-2 control-label">
												คำนำหน้า
											</div>
											<div class="col-sm-2">
												<select name="m_NameTitle" class="form-control" required disabled>
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
												<input type="text" name="m_FName" class="form-control" required value="<?php echo $row['m_FName']?>" disabled>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-2 control-label">
												นามสกุล
											</div>
											<div class="col-sm-4">
												<input type="text" name="m_LName" class="form-control" required value="<?php echo $row['m_LName']?>" disabled>
												
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
												New Password
											</div>
											<div class="col-sm-3">
												<!-- Input Hidden m_ID -->
												<input type="hidden" name="m_ID" class="form-control" required value="<?php echo $row['m_ID']?>">
												<input type="password" name="m_Password" class="form-control" required minlength="3" placeholder="password" value="">

												
											</div>
										</div>


										<div class="form-group">
											<div class="col-sm-2 control-label">
												Confirm Password
											</div>
											<div class="col-sm-3">
												<input type="password" name="m_Password2" class="form-control" required minlength="3" placeholder="confirm password" value="">
												<span class="fr"></span>
											</div>
										</div>



										<div class="form-group">
											<div class="col-sm-2 control-label">

											</div>
											<div class="col-sm-3">
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
												<a class="btn btn-danger" href="http://127.0.0.1/eprojectv1.1/member" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>


											</div>
										</div>

									</div><!-- /.box-body -->
								</form>
								<?php } ?>

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
</script> -->
<!-- <script type="text/javascript">
$(function () {
});
</script>
 -->

<script type="text/javascript">



</script>