<?php
// require_once ("../../condb.php");

$sql2 = "SELECT * FROM tbl_member WHERE m_ID = $m_ID";

$result2 = mysqli_query($condb, $sql2) or die ("Error in query: $sql2 ");
$row = mysqli_fetch_array($result2);
$rowname =$row['m_Img']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล			 
    $file=$path.$rowname;
    if (unlink($file)){  
    echo ("deleted $file");
    }else{
    echo ("error");
}
// echo $row['m_Img'];

// mysqli_close($condb);

?>