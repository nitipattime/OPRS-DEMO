<?php
require_once ("../../condb.php");

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();

$m_ID = $_POST['m_ID']; 
$m_Password = $_POST['m_Password']; 
$m_Password2 = $_POST['m_Password2']; 
if($m_Password == $m_Password2){
    $sql = "UPDATE tbl_member SET m_Password = $m_Password WHERE m_ID = $m_ID";

    // echo $sql;

    $result = mysqli_query($condb, $sql) or die ("Error in query: $sql ");


    if($result){
        echo "<script type='text/javascript'>";
            echo "alert('Update Password Succesfuly');";
            echo "window.location = 'index.php'; ";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('Error back to upload again');";
            echo "window.location = 'index.php'; ";
        echo "</script>";
    }
}else{
    echo "<script>";
        echo "alert('Password ไม่ตรงกัน !!!');";
        echo "window.location = 'from_repasswmember.php?m_ID=$m_ID'; ";
    echo "</script>";
}



mysqli_close($condb);

?>