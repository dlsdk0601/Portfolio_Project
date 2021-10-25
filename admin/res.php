<?php
    // $root = $_SERVER["DOCUMENT_ROOT"];
    // echo $root."/portfolio/db.php";
    // include_once $root."/portfolio/db.php";

    include_once "db.php";
    $query = "CREATE TABLE portfolio(
        num INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100),
        sitename VARCHAR(100),
        subs VARCHAR(100),
        part VARCHAR(100),
        mission TEXT,
        exp TEXT,
        skill VARCHAR(100),
        func VARCHAR(100),
        git VARCHAR(100),
        sitepage VARCHAR(100),
        thum VARCHAR(1000),
        howlong VARCHAR(100),
        responsive VARCHAR(10),
        color VARCHAR(20),
        PRIMARY KEY(num) )";

    mysqli_query($connect, $query);

    if( isset($_POST["mode"]) ){
        $mode = $_POST["mode"];
    }else{
        $mode = $_GET["mode"];
    }

    if($mode == "insert"){
        $name = $_POST["name"];
        $sitename = $_POST["sitename"];
        $subs = $_POST["subs"];
        $part = $_POST["part"];
        $mission = $_POST["mission"];
        $exp = $_POST["exp"];
        $skill = $_POST["skill"];
        $func = $_POST["func"];
        $git = $_POST["git"];
        $sitepage = $_POST["sitepage"];
        $thum = $_FILES["thum"];
        $howlong = $_POST["howlong"];
        $responsive = $_POST["responsive"];
        $color = $_POST["color"];
        
        $thumname= [];
        // echo "<pre>";
        // var_dump($thum);


        @mkdir("./files", 0777);
        foreach($thum['name'] as $k => $v){
            $fileName = $thum['name'][$k];
            $tmpName = $thum['tmp_name'][$k];
            array_push($thumname, $fileName);

            $type = explode( '/',  $thum["type"][$k] );
            if($type[0] == "image"){
                move_uploaded_file($tmpName, './files/'.$fileName);
            }
        }

        $thumstring = implode('/', $thumname);
        $query = "INSERT INTO portfolio(name, sitename, subs, part, mission, exp, skill, func, git, sitepage, thum, howlong, responsive, color
                    ) values(
                        '$name', '$sitename', '$subs', '$part', '$mission', '$exp', '$skill', '$func', '$git', '$sitepage', '$thumstring', '$howlong', '$responsive', '$color')";
        mysqli_query($connect, $query);
    }
    if($mode == "delete"){
        $num = $_GET["num"];
        $query = "DELETE FROM portfolio WHERE num='$num'";
        mysqli_query($connect, $query);
    }
    if($mode == "update"){ 
        $num = $_POST["num"];
        $name = $_POST["name"];
        $sitename = $_POST["sitename"];
        $subs = $_POST["subs"];
        $part = $_POST["part"];
        $mission = $_POST["mission"];
        $exp = $_POST["exp"];
        $skill = $_POST["skill"];
        $func = $_POST["func"];
        $git = $_POST["git"];
        $sitepage = $_POST["sitepage"];
        $thum = $_FILES["thum"];
        $howlong = $_POST["howlong"];
        $responsive = $_POST["responsive"];
        $color = $_POST["color"];

        $fileName = $thum["name"];
        $tmpName = $thum["tmp_name"];

        
        if( isset($fileName) ){

            $query = "SELECT * FROM portfolio WHERE num='$num'";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_array($result);
            $thumname = array();
            $deletearray = explode('/', $row["thum"]);
            foreach($deletearray as $k => $v){
                @unlink("./files/".$deletearray[$k]);
            }

            foreach($thum['name'] as $k => $v){
                $fileName = $thum['name'][$k];
                $tmpName = $thum['tmp_name'][$k];
                array_push($thumname, $fileName);
    
                $type = explode( '/',  $thum["type"][$k] );
                if($type[0] == "image"){
                    move_uploaded_file($tmpName, './files/'.$fileName);
                }
            }
            $thumstring = implode('/', $thumname);

            $query = "UPDATE portfolio SET thum='$thumstring' WHERE num='$num'";
            mysqli_query($connect, $query);
        }

        $query = "UPDATE portfolio SET name='$name', sitename='$sitename', subs='$subs', part='$part', mission='$mission', exp='$exp', skill='$skill', func='$func', git='git', sitepage='$sitepage', howlong='$howlong', responsive='$responsive', color='$color'  WHERE num='$num'";
        mysqli_query($connect, $query);
    }
?>

<script>
    location.href = "list.php";
</script>
