<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
//1. เชื่อมต่อ database: 
require_once ("../../condb.php");  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$m_Department = $_POST['m_Department']; //รับค่าไฟล์จากฟอร์ม	
$m_NameTitle = $_POST['m_NameTitle']; //รับค่าไฟล์จากฟอร์ม	
$m_FName = $_POST['m_FName']; //รับค่าไฟล์จากฟอร์ม	
$m_LName = $_POST['m_LName']; //รับค่าไฟล์จากฟอร์ม	
$m_Email = $_POST['m_Email']; //รับค่าไฟล์จากฟอร์ม	
$m_Password = $_POST['m_Password']; //รับค่าไฟล์จากฟอร์ม	
$m_Tel = $_POST['m_Tel']; //รับค่าไฟล์จากฟอร์ม	
$fileupload = $_FILES['m_Img']; //รับค่าไฟล์จากฟอร์ม	
// echo $fileupload;
// exit();
// echo date("H:i:s");
// exit();

//ฟังก์ชั่นวันที่
date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
$numrand = (mt_rand());
//เพิ่มไฟล์
$upload=$_FILES['m_Img'];
if($upload != '') {   //not select file
    //โฟลเดอร์ที่จะ upload file เข้าไป 
    $path="../../assets/images/";  

    //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
    $type = strrchr($_FILES['m_Img']['name'],".");
        
    //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    $newname = $date.$numrand.$type;
    $path_copy=$path.$newname;
    $path_link="m_Img/".$newname;

    //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
    move_uploaded_file($_FILES['m_Img']['tmp_name'],$path_copy);  	
}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
    $sql = "INSERT INTO tbl_member 
    (
    m_NameTitle,
    m_FName,
    m_LName,
    m_Email,
    m_Password,
    m_Tel,
    m_Img,
    m_Department
    ) 
    VALUES
    (
    '$m_NameTitle',
    '$m_FName',
    '$m_LName',
    '$m_Email',
    '$m_Password',
    '$m_Tel',
    '$newname',
    '$m_Department'
    )";
    
    $result = mysqli_query($condb, $sql) or die ("Error in query: $sql ");
	
	mysqli_close($condb);
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