<?php
session_start();
// echo $_SESSION['m_Img'];
// echo "<hr>";

require_once ("../../condb.php");
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// echo "</pre>";
// exit();


$m_ID = $_POST['m_ID']; 
$m_NameTitle = $_POST['m_NameTitle']; 
$m_FName = $_POST['m_FName']; 
$m_LName = $_POST['m_LName']; 
$m_Tel = $_POST['m_Tel']; 
$m_Department = $_POST['m_Department']; 
$m_img = $_POST['m_img'];

// echo $_FILES['m_Img']['name'];

if($_FILES['m_Img']['name']==""){
    $m_Img = $m_img;
    // echo "ว่าง : ".$m_Img;

    $GLOBALS['sql'] = "UPDATE tbl_member SET 
    m_ID ='$m_ID',
    m_NameTitle ='$m_NameTitle',
    m_FName ='$m_FName',
    m_LName ='$m_LName',
    m_Tel ='$m_Tel',
    m_Img ='$m_Img',
    m_Department ='$m_Department' 
    WHERE m_ID = $m_ID";

}else{
    // $m_Img = $_FILES['m_Img']['name'];
    // echo "ไม่ว่าง : ".$m_Img;

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


    // echo $newname;
    // exit();
    }

    $GLOBALS['sql'] = "UPDATE tbl_member SET 
    m_ID ='$m_ID',
    m_NameTitle ='$m_NameTitle',
    m_FName ='$m_FName',
    m_LName ='$m_LName',
    m_Tel ='$m_Tel',
    m_Img ='$newname',
    m_Department ='$m_Department' 
    WHERE m_ID = $m_ID";

    include("delete_img.php");

}

// echo $sql;
// exit();




// echo "<br>";
// echo $sql;
// echo "<br>";
// echo $newname;
// echo "<br>";

// exit();


$result = mysqli_query($condb, $sql) or die ("Error in query: $sql ");

mysqli_close($condb);
// echo "<hr>";
// echo $_SESSION['m_Img'];
// echo "<hr>";
// $_SESSION['m_Img'] = ''; //******* */
// echo $_SESSION['m_Img'];
// echo "<hr>";
// $_SESSION['m_Img'] = $newname; //******* */
// echo $_SESSION['m_Img'];
// exit();
if($result){
	echo "<script type='text/javascript'>";
        echo "alert('Update Succesfuly ');";
        echo "window.location = 'index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}

?>