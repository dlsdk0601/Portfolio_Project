<?php

    include_once "db.php";
    $query = "CREATE TABLE testimonial(
        num INT NOT NULL AUTO_INCREMENT,
        tes_name VARCHAR(20),
        tes_oneline VARCHAR(50),
        tes_text TEXT,
        tex_real VARCHAR(50),
        photo VARCHAR(100),
        PRIMARY KEY(num) )";

    mysqli_query($connect, $query);

    if( isset($_POST["mode"]) ){
        $mode = $_POST["mode"];
    }else{
        $mode = $_GET["mode"];
    }

    if($mode == "insert"){
        $tes_name = $_POST["tes_name"];
        $tes_oneline = $_POST["tes_oneline"]; 
        $tes_text = $_POST["tes_text"];
        $tex_real = $_POST["tex_real"];
        $photo = $_FILES["photo"];


        @mkdir("./files", 0777);
        $fileName = $photo['name'];
        $tmpName = $photo['tmp_name'];
        move_uploaded_file($tmpName, "./files/".$fileName);

        $query = "INSERT INTO testimonial(tes_name, tes_oneline, tes_text, tex_real, photo
                    ) values(
                        '$tes_name', '$tes_oneline', '$tes_text', '$tex_real', '$fileName')";
        mysqli_query($connect, $query);
    }
    if($mode == "update"){
        $num = $_POST["num"];
        $tes_name = $_POST["tes_name"];
        $tes_oneline = $_POST["tes_oneline"]; 
        $tes_text = $_POST["tes_text"];
        $tex_real = $_POST["tex_real"];
        $photo = $_FILES["photo"];

        $fileName = $photo["name"];
        $tmpName = $photo["tmp_name"];
        move_uploaded_file($tmpName, './files/'.$fileName);

        //원래 사진 지우기
        $query = "SELECT * FROM testimonial WHERE num='$num'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
        $del = $row["photo"];
        @unlink("./files/".$del);


        $query = "UPDATE testimonial SET tes_name='$tes_name', tes_oneline='$tes_oneline', tes_text='$tes_text', tex_real='$tex_real', photo='$fileName'  WHERE num='$num'";
        mysqli_query($connect, $query);

    }
    if($mode == "delete"){
        $num = $_GET["num"];
        $query = "DELETE FROM testimonial WHERE num='$num'";
        mysqli_query($connect, $query);
    }
?>

<script>
    location.href = "list_tes.php";
</script>