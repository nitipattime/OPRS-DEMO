<?php
require_once ("../../condb.php");

$m_ID = $_GET['m_ID']; 

$sql = "SELECT * FROM tbl_member WHERE m_ID = $m_ID";

// echo $sql;

$result = mysqli_query($condb, $sql) or die ("Error in query: $sql ");


mysqli_close($condb);




?>