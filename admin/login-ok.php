<?php

    if( isset($_GET["mode"]) ){
        $mode = $_GET["mode"];
    }else{
        $mode = $_POST["mode"];
    }

    echo $mode;
    if( $mode == "login"){
        @session_start();
        $id = $_POST["id"];
        $pw = $_POST["pw"];
    
        include_once "db.php";
        $query = "SELECT * FROM admindata WHERE id='$id' and pw='$pw'";
        $result = mysqli_query($connect, $query); 
        $row = mysqli_num_rows($result);
    
        if($row){
            //성공
            $_SESSION["id"] = "dlsdk0601";
            echo "<script> 
                    location.href = 'list.php'; 
                </script>";
        }else{
            //실패
            echo "<script>
                    alert('관리자 정보가 잘못되었습니다.');
                    history.back();
                </script>";
        }
    }
    if( $mode == "logout"){
        @session_start();
        @session_destroy();
        echo "<script> location.href = 'login.php'; </script>";
    }
    

?>