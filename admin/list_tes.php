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

    $query = "SELECT * FROM testimonial ORDER BY num ASC";
    $result = mysqli_query($connect, $query);
    $array = array();

    while( $row = mysqli_fetch_array($result) ){
        array_push($array, array(
            'num'=> $row["num"],
            'tes_name'=>$row["tes_name"],
            'tes_text'=>$row["tes_text"],
            'tex_real'=>$row['tex_real'],
            'tes_oneline'=>$row['tes_oneline'],
            'photo'=>$row['photo']
        ));
    }

    $json = json_encode($array);
    file_put_contents('../data/testimonial.json', $json);
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
                $query = "SELECT * FROM testimonial ORDER BY num ASC";
                $result = mysqli_query($connect, $query);
                $row = mysqli_fetch_array( $result );
                $num = $row["num"][0];
            }
            $query = "SELECT * FROM testimonial WHERE num='$num'";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_array($result);

        ?>
        <section class="information">
            
            <div class="information__container">
                <figure class="pages">
                    <img src="./files/<?=$row["photo"]?>" alt="no">
                </figure>
                <h1 class="title"><?=$row["tes_name"]?></h1>
                <ul class="top__list">
                    <li>
                        <p><?=$row["tes_oneline"]?></p>
                    </li>
                    <li>
                        <p><?=$row["tex_real"]?></p>
                    </li>
                    <li>
                        <p class="tes_text"><?=$row["tes_text"]?></p>
                    </li>
                </ul>
            </div>

        </section>
        
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
            width: 12%; height: 95vh;
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
        /* --------------------------------------------- */
        main .information{
            width: 100%; height: 90vh;
        }
        main .information .information__container{
            width: 60%; height: 650px;
            margin: 100px auto 0 auto;
            position: relative;
            border: 3px solid #35464e;
            border-radius: 20px;
        }
        main .information .information__container .pages{
            width: 200px; height: 200px; 
            overflow: hidden;
            border-radius: 50%;
            border: 1px solid #eee;
            position: absolute;
            left: 50%; top: -15%;
            transform: translate(-50%, 0);
        }
        main .information .information__container .pages img{
            width: 100%; height: 100%; 
        }
        main .information .information__container .title{
            text-align: center;
            width: 100%;
            margin-top: 15%; 
            position: relative;
        }
        main .information .information__container .title::after{
            content: "";
            width: 50px; height: 3px;
            background-color: #35464e;
            position: absolute;
            left: 50%; bottom: -10px;
            transform: translate(-50%, 0)
        }
        main .information .information__container .top__list{
            margin: 50px auto 0 auto;
        }
        main .information .information__container .top__list li{
            margin: 20px auto 20px auto;
            text-align: center;
        }
        .tes_text{
            width: 60%; margin: auto;
        }



    
    </style>
    <script>
        const contents = document.querySelectorAll(".content");
        const menu__list = document.querySelectorAll(".content .menu__list");
        const menu__name = document.querySelectorAll(".content .menu__name span");
        const menu__icon = document.querySelectorAll(".content .menu__name img");
        let active = 2;
        const default_img = [];
        const active_img = ["./img/dashboard_dark.png", "./img/upload_dark.png", "./img/people_darkblue.png"];
        for(let i = 0; i < menu__icon.length; i++){
            default_img.push(menu__icon[i].src);
        }
    
        //젤 처음 페이지에 이거 보여야함
        menu__icon[2].src = active_img[2];
        menu__name[2].classList.add("active");
        menu__list[2].classList.add("active");
        contents[2].classList.add("back");


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