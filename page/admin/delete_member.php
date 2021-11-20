<?php
require_once ("../../condb.php");

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit();

$m_ID = $_GET['m_ID']; 

// $sql = "SELECT * FROM tbl_member WHERE m_ID = $m_ID";
$sql = "DELETE FROM tbl_member WHERE m_ID = $m_ID";

// echo $sql;

$result = mysqli_query($condb, $sql) or die ("Error in query: $sql ");


mysqli_close($condb);

if($result){
    echo "<script type='text/javascript'>";
        echo "alert('Delete Succesfuly');";
        echo "window.location = 'index.php'; ";
    echo "</script>";
}else{
    echo "<script type='text/javascript'>";
        echo "alert('Error back to Delete again');";
        echo "window.location = 'index.php'; ";
    echo "</script>";
}

?>