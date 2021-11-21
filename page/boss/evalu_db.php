<?php

//1. เชื่อมต่อ database: 
require_once("../../condb.php");  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$k1 = $_POST['k1']; //รับค่าไฟล์จากฟอร์ม	
$k2 = $_POST['k2']; //รับค่าไฟล์จากฟอร์ม	
$k3 = $_POST['k3'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$u1 = $_POST['u1'];
$u2 = $_POST['u2'];
$u3 = $_POST['u3'];
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$b3 = $_POST['b3'];


;
// เพิ่มไฟล์เข้าไปในตาราง uploadfile

$sql = "INSERT INTO tbl_evalue
    (
   
        k1,
        k2,
        k3,
        m1,
        m2,
        m3,
        u1,
        u2,
        u3,
        t1,
        t2,
        t3,
        n1,
        n2,
        n3,
        b1,
        b2,
        b3
    ) 
    VALUES
    (
     
        '$k1',
        '$k2',
        '$k3',
        '$m1',
        '$m2',
        '$m3',
        '$u1',
        '$u2',
        '$u3',
        '$t1',
        '$t2',
        '$t3',
        '$n1',
        '$n2',
        '$n3',
        '$b1',
        '$b2',
        '$b3'
    
    )";


$result = mysqli_query($condb, $sql) or die("Error in query: $sql ");

mysqli_close($condb);
// javascript แสดงการ upload file

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Upload File Succesfuly');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to upload again');";
    echo "</script>";
}
