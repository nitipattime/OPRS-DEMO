<?php 

require_once ("../../condb.php");

// $sql = "SELECT * FROM tbl_report ORDER BY reportdetail_ID asc";
$sql = "SELECT * FROM timeline ";
$result = mysqli_query($condb, $sql)or die ("Error in query: $sql ");



?>