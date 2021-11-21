<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once("../../condb.php");
//คิวรี่ข้อมูลหาผมรวมยอดขายโดยใช้ SQL SUM
// $sql="SELECT * FROM tbl_evalue sum(k1,k2,k3)";
$sql="SELECT * FROM tbl_evalue";

$result = mysqli_query($condb, $sql) or die ("Error in query: $sql ");
	
foreach ($result as $row) {
//นำข้อมูลที่ได้จากคิวรี่มากำหนดรูปแบบข้อมุลให้ถูกโครงสร้างของกราฟที่ใช้ *อ่าน docs เพิ่มเติม
$report_data = array();
//ทำข้อมูลให้ถูกโครงสร้างก่อนนำไปแสดงในกราฟ ศึกษาเพิ่มเติม https://www.amcharts.com/demos/pie-chart/
$report_data[]= '{K:'.'"'.$row['k1'].' '.number_format($row['k3'],).' THB '.'"'.', '.'value:'.$row['k2'].'}';
}
//ตัด , ตัวสุดท้ายออก
$report_data = implode(",", $report_data);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PHP PDO & PIE CHART : ออกรายงานกราฟวงกลม  devbanban.com 2021</title>
		 <!--bootstrap5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- amcharts  devbanban.com -->
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<!-- กำหนดขนาดของกราฟ -->
		<style>
				#chartdiv {
				width: 100%;
				height: 500px;
				}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10"> <br>
					<h3>PHP PDO Pie Chart from amCharts </h3>
					<?php
					//chart.data structure
					echo 'แสดงโครงสร้างข้อมูลก่อนนำเข้ากราฟ : <br> ';
					
					echo $report_data;
					
					?>
					<div id="chartdiv"></div>
					<script>
						/**
					* ---------------------------------------
					* This demo was created using amCharts 5.
					*
					* For more information visit:
					* https://www.amcharts.com/
					*
					* Documentation is available at:
					* https://www.amcharts.com/docs/v5/ devbanban.com
					* ---------------------------------------
					*/
					// Create root element
					// https://www.amcharts.com/docs/v5/getting-started/#Root_element
					var root = am5.Root.new("chartdiv");
					// Set themes
					// https://www.amcharts.com/docs/v5/concepts/themes/
					root.setThemes([
					am5themes_Animated.new(root)
					]);
					// Create chart
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
					var chart = root.container.children.push(
					am5percent.PieChart.new(root, {
					endAngle: 270
					})
					);
					// Create series
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
					var series = chart.series.push(
					am5percent.PieSeries.new(root, {
					valueField: "value",
					categoryField: "category",
					endAngle: 270
					})
					);
					series.states.create("hidden", {
					endAngle: -90
					});
					// Set data
					// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
					series.data.setAll([<?= $report_data;?>]);
					series.appear(1000, 100);
					</script>
				</div>
			</div>
		</div>
		<center>
			docs : https://www.amcharts.com/demos/pie-chart/
		<br>
		<!-- devbanban.com 2021 -->
	</center> 

	</body>
</html>
