<?php

//1. เชื่อมต่อ database: 
require_once("../../condb.php");  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$s_header = $_POST['header']; //รับค่าไฟล์จากฟอร์ม	
$s_detail = $_POST['detail']; //รับค่าไฟล์จากฟอร์ม	
$fileupload = $_FILES['s_photo'];
$recipient = implode(",",$_POST['recipient']); //เก็บเป็น arrAy

//ฟังก์ชั่นวันที่
date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");
//ฟังก์ชั่นสุ่มตัวเลข
$numrand = (mt_rand());
//เพิ่มไฟล์
$upload = $_FILES['s_photo'];
if ($upload != '') {   //not select file
    //โฟลเดอร์ที่จะ upload file เข้าไป 
    $path = "../../assets/image_report/";

    //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล0
    $type = strrchr($_FILES['s_photo']['name'], ".");

    //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    $newname = $date . $numrand . $type;
    $path_copy = $path . $newname;
    $path_link = "s_photo/" . $newname;

    //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
    move_uploaded_file($_FILES['s_photo']['tmp_name'], $path_copy);
}

// เพิ่มไฟล์เข้าไปในตาราง uploadfile

$sql = "INSERT INTO tbl_report 
    (
    s_header,
    s_detail,
    s_photo,
    recipient
    ) 
    VALUES
    (
    '$s_header',
    '$s_detail',
    '$newname',
    '$recipient'
    )";

 
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql ");
	

// javascript แสดงการ upload file

if($result){
echo "<script type='text/javascript'>";
echo "alert('Upload File Succesfuly');";
echo "window.location = 'index.php'; ";
echo "</script>";
}
else{
echo "<script type='text/javascript'>";
echo "alert('Error back to upload again');";
echo "</script>";
}
?>

Html