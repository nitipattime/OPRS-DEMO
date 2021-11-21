<?php 

require_once ("../../condb.php");

$edit = $_GET['idreport'];
// $station = $_POST['station'];
// $succ = $_POST['succ'];
// $ds = $_POST['ds'];
// $ds = $_POST['de'];
// $ts = $_POST['ts'];
// $te = $_POST['te'];
// $problem = $_POST['problem'];

$sql = "SELECT *FROM tbl_report WHERE r_ID = $edit";
$result =  mysqli_query($condb,$sql);

?>


