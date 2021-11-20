<?php

require_once("../../condb.php");


$sql = "SELECT *FROM tbl_member ORDER BY m_ID asc";
$result = mysqli_query($condb, $sql);

$count = 1;
?>
