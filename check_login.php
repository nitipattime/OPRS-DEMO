<?php
    session_start();
    //! Check $_POST
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // exit();

    //! ปิดแสดง Error   
    error_reporting(0);

    require_once ("condb.php");
    //! Check Connect Database
        // if($condb){
        //         echo"Connect Database";
        //     }else{
        //         echo"Error connect database";
        //     }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_member WHERE  m_Email = '".$username."' AND m_Password = '".$password."' ";
    //! Check SQL
        // echo $sql;
        // echo "<hr>";

    $result = mysqli_query($condb,$sql) or die("Error in sql : $sql");
    // $gg =  mysqli_fetch_row($result);
    // echo $gg[0];
    // echo"<br>";
    // echo $gg[1];
    // echo"<br>";
    // echo $gg[2];
    // echo"<br>";
    // echo $gg[3];
    // exit();


    $row = mysqli_fetch_array($result);
    //mysqli_fetch_row($result)==1
    // if($row["m_Email"] == null and $row["m_Password"] == null){
    //     echo "<script>";
    //             echo "alert('Username หรือ Password ไม่ถูกต้อง !!!');";
    //             echo "window.location = 'login.php'; ";
    //         echo "</script>";
    // } 
    if( $username == $row["m_Email"] and $password == $row["m_Password"]){
        // echo "in";
        // $row = mysqli_fetch_array($result);
        // echo $row["m_Department"];
        // echo"<br>";
        
        $_SESSION["Email"] = $row["m_Email"];
        $_SESSION["Name"] = $row["m_FName"]." ".$row["m_LName"] ;
        $_SESSION["Department"] = $row["m_Department"];
        $_SESSION["m_Img"] = $row["m_Img"];
        //! Check $_SESSION
            // print_r($_SESSION);
            // echo $_SESSION["Email"];
            // echo $_SESSION["Name"];
            // echo $_SESSION["Department"];
            // exit();

        if($_SESSION["Department"]=="admin"){
            header("Location: page/admin/");
        }
        elseif($_SESSION["Department"]=="boss"){
            header("Location: page/boss/");
        }
        elseif($_SESSION["Department"]=="staff"){
            header("Location: page/staff/");
        }
        elseif($_SESSION["Department"]=="employee"){
            header("Location: page/employee/");
        }

    }
    else{
            
            echo "<script>";
                echo "alert('Username หรือ Password ไม่ถูกต้อง !!!');";
                echo "window.location = 'login.php'; ";
            echo "</script>";
            // header("Location: login.php");
        }
    // echo "out";
    // echo $row["m_Email"];

?>