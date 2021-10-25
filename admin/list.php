<?php

    session_start();
    include_once "db.php";
    if( !isset($_SESSION["id"]) ){
        echo "<script>
                alert('관리자 로그인 후 이용하세요.');
                location.href = 'login.php';
            </script>";
    }else{
        if( $_SESSION["id"] != "dlsdk0601" ){
            echo "<script>
                alert('관리자 로그인 후 이용하세요.');
                location.href = 'login.php';
            </script>";
        }
    }


    $query = "SELECT * FROM portfolio ORDER BY num ASC";
    $result = mysqli_query($connect, $query);
    $array = array();
    
    while( $row = mysqli_fetch_array($result) ){
        array_push($array,array(
            "num"=>$row['num'],
            "name"=>$row["name"],
            "sitename"=>$row["sitename"],
            "subs"=>$row["subs"],
            "part"=>$row["part"],
            "mission"=>$row["mission"],
            "exp"=>$row["exp"],
            "skill"=>$row["skill"],
            "func"=>$row["func"],
            "git"=>$row["git"],
            "sitepage"=>$row["sitepage"],
            "thum"=>$row["thum"],
            "howlong"=>$row["howlong"],
            "responsive"=>$row["responsive"],
            "color" =>$row["color"],
        ));
    }

    @mkdir('../data');
    $json = json_encode($array);
    file_put_contents('../data/work.json',$json);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Portfolio Admin</h2>
    </header>
    
    
    <main>
        <nav class="menu">
            <div class="login">
                <figure><img src="./img/account.svg" alt="no"></figure>
                <span class="login__name">Admin</span>
                <a href="login-ok.php?mode=logout">Logout</a>
            </div>
            <div class="content con1">
                <div class="menu__name">
                    <img src="./img/dashboard_white.svg" alt="no">
                    <span>Dashboard</span>
                </div>
                <ul class="menu__list menu__dashboard">
                    <?php
                        $query = "SELECT * FROM portfolio ORDER BY num ASC";
                        $result = mysqli_query($connect, $query);

                        while( $row = mysqli_fetch_array($result) ){
                        ?>
                        <li>
                        <span><a href="list.php?num=<?=$row["num"]?>"><?=$row["name"]?></a></span>
                        <span>
                            <a href="write.php?mode=update&num=<?=$row["num"]?>"><img class="edit" src="./img/outline_edit.png" alt="no"></a>
                            <a href="res.php?mode=delete&num=<?=$row["num"]?>"><img class="edit" src="./img/delete.png" alt="no"></a>
                        </span>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="content con2">
                <div class="menu__name">
                    <img src="./img/upload_white.svg" alt="no">
                    <span>Upload</span>
                </div>
                <ul class="menu__list menu__upload">
                    <li>
                        <span><a href="write.php">Portfolio</a></span>
                        <a href="write.php"><img class="edit" src="./img/outline_edit.png" alt="no"></a>
                    </li>
                    <li>
                        <span><a href="write_testimonials.php">testimonial</a></span>
                        <a href="write_testimonials.php"><img class="edit" src="./img/outline_edit.png" alt="no"></a>
                    </li>
                </ul>
            </div>
            <div class="content con3">
                <div class="menu__name">
                    <img src="./img/people_white.svg" alt="no">
                    <span>testimonial</span>
                </div>
                <ul class="menu__list menu__testimonial">
                <?php
                $query = "SELECT * FROM testimonial ORDER BY num ASC ";
                $result = mysqli_query($connect, $query);

                while( $row = mysqli_fetch_array($result) ){
                
                ?>
                    <li>
                        <span><a href="list_tes.php?num=<?=$row["num"]?>"><?=$row["tes_name"]?></a></span>
                        <span>
                            <a href="write_testimonials.php?num=<?=$row["num"]?>"><img class="edit" src="./img/outline_edit.png" alt="no"></a>
                            <a href="res_testimonial.php?mode=delete&num=<?=$row["num"]?>"><img class="edit" src="./img/delete.png" alt="no"></a>
                        </span>
                    </li>
                    
                <?php } ?>
                </ul> 
            </div>
            
        </nav>  

        <?php

        if( isset($_GET["num"]) ){
            $num = $_GET["num"];
        }else{
            $query = "SELECT * FROM portfolio ORDER BY num ASC";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_array( $result );
            $num = $row["num"][0];
        }
        $query = "SELECT * FROM portfolio WHERE num='$num'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);

      
        ?>
        <section class="information">
            <div class="information__container">
                <h1 class="title top__title"><?=$row["name"]?></h1>
                <div class="container__top">
                    <ul class="top__list">
                        <li>
                            <p>사이트 이름</p>
                            <p><?=$row["sitename"]?></p>
                        </li>
                        <li>
                            <p>참여도</p>
                            <p><?=$row["part"]?></p>
                        </li>
                        <li>
                            <p>제작기간</p>
                            <p><?=$row["howlong"]?></p>
                        </li>
                        <li>
                            <p>Site URL</p>
                            <p><?=$row["sitepage"]?></p>
                        </li>
                        <li>
                            <p>skill</p>
                            <p><?=$row["skill"]?></p>
                        </li>
                        <li>
                            <p>기능</p>
                            <p><?=$row["func"]?></p>
                        </li>
                    </ul>
                </div>
                <div class="container__middle">
                    <h2 class="overview__title">Overview</h2>
                    <p>
                    <?=$row["mission"]?>
                    </p>
                    <h2 class="focus__title">Focus</h2>
                    <p>
                    <?=$row["exp"]?>
                    </p>
                </div>
                
            </div>
        </section>
        <div class="container__bottom">
                    <?php
                        $thumname = explode('/', $row["thum"]);
                        foreach($thumname as $k => $v){
                            if($k != 3){
                    ?>
                    <figure><img src="./files/<?=$thumname[$k]?>" alt="no"></figure>
                    <?php } ?>
                    <?php   } ?>
                </div>
        <figure class="pages">
            <img src="./files/<?=$thumname[3]?>" alt="no">
        </figure>
        
    </main>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
        html,
        body {
            margin: 0;
            font-size: 16px;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            box-sizing: border-box;
        }

        ul,
        li,
        ol {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        figure,
        p {
            margin: 0;
        }

        img {
            vertical-align: top;
        }

        a {
            text-decoration: none;
            color: #333;
            padding: 0;
        }
        .hidden{
            display: none;
        }
        .show{
            display: block;
        }

        /*-----------------------------------------------*/
        header{
            width: 100%; height: 48px;
            background-color: #35464e;
            color: white;
        }
        header h2{
            padding-left: 50px;
            line-height: 2;
        }
        main{
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        main nav{
            width: 12%; height: 135vh;
            background-color: #283138;
            color: white;
            
        }
        .menu .login{
            width: 100%; height: 10%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            border-bottom: 1px solid white;
            margin-bottom: 60px;
        }
        .menu .login figure{
            width: 45px; height: 45px;
        }
        .menu .login figure img{
            width: 100%; height: 100%;
        }
        .menu .login span{
            font-size: 24px;
        }
        .menu .login a{
            color: white;
            font-size: 0.8rem;
        }
        .content{
            width: 95%;
            padding: 5% 0 5% 5%;
            margin: 20px 0 ;
            border-radius: 20px 0 0 20px;
            cursor: pointer;
            transition: max-height 0.8s ease-in;
            max-height: 60px;
        }
        .content.back{
            background-color: white;
            max-height: 500px;
        }
        .con1:hover{
            background-color: #35464e;
        }
        .con1.back:hover{
            background-color: white;
        }
        .con2:hover{
            background-color: #35464e;
        }.con2.back:hover{
            background-color: white;
        }
        .con3:hover{
            background-color: #35464e;
        }.con3.back:hover{
            background-color: white;
        }
        .menu__name{
            width: 90%;
            margin: 0px 0px 0px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu__name img{
            padding-left: 10px;
            width: 35px; height: 35px;
        }
        .menu__name span{
            display: inline-block;
            width: 60%; 
            /* color: #283138; */
            font-size: 20px;
        }
        .menu__name > span.active{
            color: #283138;
        }
        .menu__list{
            width: 100%; 
            overflow: hidden;
            display: none;
        }
        .menu__list.active{
            /* max-height: 500px; */
            display: block;
        }
        .menu__list .edit_icon{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu__list li{
            width: 80%; height: 10%;
            margin: 20px auto 20px auto;
            font-size: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #283138;
        }
        .edit{
            width: 16px; height: 16px;
        }


        main .information{
            width: 40%; height: 90vh;
        }
        .information__container{
            padding: 10px 0px 10px 50px;
        }
        .information__container .container__top{
            border-left: 1.5px solid #eee;
            margin-bottom: 30px;
        }
        .information__container .container__top .top__list{
            width: 100%;
            /* display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap; */
        }
        .information__container .container__top .top__list li{
            width: 30%; height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .information__container .container__top .top__list p{
            text-align: left;
            width: 80%;
            margin: 0 auto;
        }
        .information__container .container__top .top__list p:nth-of-type(1){
            font-size: 1.5rem;
            font-weight: 700;
        }
        .information__container .container__middle p{
            padding-left: 3%;
            width: 80%;
            border-left: 2px solid #eee;
        }
        .information__container .container__middle .focus__title{
            margin-top: 50px;
        }
        .container__bottom{
            width: 30%;
            margin-top: 30px;
            /* display: flex;
            justify-content: space-around;
            align-items: center; */
        }
        .container__bottom figure{
            overflow: hidden;
            width: 300px; height: 300px;
            margin: 10px auto 10px auto;
            border: 2px solid gray;
        }
        .container__bottom figure img{
            width: 100%; height: 100%;
        }

        main .pages{
            width: 18%; height: 135vh;
           
        }
        main .pages img{
            width: 100%; height: 99%;
        }
    </style>
    <script>
        const contents = document.querySelectorAll(".content");
        const menu__list = document.querySelectorAll(".content .menu__list");
        const menu__name = document.querySelectorAll(".content .menu__name span");
        const menu__icon = document.querySelectorAll(".content .menu__name img");
        let active = 0;
        const default_img = [];
        const active_img = ["./img/dashboard_dark.png", "./img/upload_dark.png", "./img/people_darkblue.png"];
        for(let i = 0; i < menu__icon.length; i++){
            default_img.push(menu__icon[i].src);
        }
    
        //젤 처음 페이지에 이거 보여야함
        menu__icon[0].src = active_img[0];
        menu__name[0].classList.add("active");
        menu__list[0].classList.add("active");
        contents[0].classList.add("back");


        for(let i = 0; i < contents.length; i++){
            menu__name[i].addEventListener("click", function(){
                if(active == i){
                    //똑같은 거 클릭했을때 토글
                    if(menu__icon[i].src == default_img[i]){
                        menu__icon[i].src = active_img[i]
                    }else{
                        menu__icon[i].src = default_img[i]
                    }
                    menu__name[i].classList.toggle("active");
                    menu__list[i].classList.toggle("active");
                    contents[i].classList.toggle("back");
                    return;
                }
                //전에 눌렀던거 리무브
                menu__icon[active].src = default_img[active];
                menu__name[active].classList.remove("active");
                contents[active].classList.remove("back");
                menu__list[active].classList.remove("active");

                //클릭한 놈 액티브
                menu__icon[i].src = active_img[i];
                menu__name[i].classList.add("active");
                menu__list[i].classList.add("active");
                contents[i].classList.add("back");
                
                //전단계 인덱스 
                active = i;
            })
        }
    </script>
</body>
</html>