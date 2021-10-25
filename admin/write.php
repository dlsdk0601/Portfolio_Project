<?php

session_start();
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
                        include_once "db.php";
                        $query = "SELECT * FROM portfolio ORDER BY num ASC";
                        $result = mysqli_query($connect, $query);

                        while( $row = mysqli_fetch_array($result) ){
                        ?>
                        <li>
                        <span><a href="list.php?num=<?=$row["num"]?>"><?=$row["name"]?></a></span>
                        <span class="edit_icon">
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
                        <a href="list_tes.php?num=<?=$row["num"]?>"><?=$row["tes_name"]?></a>
                        <a href="write_testimonials.php?num=<?=$row["num"]?>"><img class="edit" src="./img/outline_edit.png" alt="no"></a>
                    </li>
                    
                <?php } ?>
                </ul> 
            </div>
            
        </nav>  

        <?php

            include_once "db.php";
            $name = "";
            $sitename = "";
            $subs = "";
            $part = "";
            $mission = "";
            $exp = "";
            $skill = "";
            $func = "";
            $git = "";
            $sitepage = "";
            $thum = "";
            $howlong = "";
            $responsive = "";
            $color = "";
            $mode = "insert";


            if( isset($_GET["mode"]) ){
                $mode = $_GET["mode"];
                $num = $_GET["num"];
                $query = "SELECT * FROM portfolio WHERE num='$num'";
                $result = mysqli_query($connect, $query);
                $row = mysqli_fetch_array($result);

                $name = $row["name"];
                $sitename = $row["sitename"];
                $subs = $row["subs"];
                $part = $row["part"];
                $mission = $row["mission"];
                $exp = $row["exp"];
                $skill = $row["skill"];
                $func = $row["func"];
                $git = $row["git"];
                $sitepage = $row["sitepage"];
                $color = $row["color"];
                $howlong = $row["howlong"];

                if( $row["responsive"] == "on") $responsive = "checked";
            } 
        ?>
        <section class="write">
                <form action="res.php" method="post" enctype="multipart/form-data">
                    <div class="ip">
                        <div class="left__top">
                            <h2>Information</h2>
                            <p>포트폴리오 이름</p>
                            <input type="text" name="name" value="<?=$name?>">
                            <p>사이트 이름</p>
                            <input type="text" name="sitename" value="<?=$sitename?>">
                            <p>한줄 설명</p>
                            <input type="text" name="subs" value="<?=$subs?>">
                            <p>참여도</p>
                            <input type="text" name="part" value="<?=$part?>">
                            <p>스킬</p>
                            <input type="text" name="skill" value="<?=$skill?>">
                        </div>
                        <div class="right__top">
                            <h2>Site Address</h2>
                            <p>리드미 주소</p>
                            <input type="url" name="git" value="<?=$git?>">
                            <p>사이트 주소</p>
                            <input type="url" name="sitepage" value="<?=$sitepage?>">
                            <p>프로젝트 기간</p>
                            <input type="text" name="howlong" value="<?=$howlong?>">
                            
                            <div class="color__select">
                                <p class="res">반응형</p>
                                <p class="color">색상</p>
                                <input type="checkbox" name="responsive" <?=$responsive?>>
                                <input type="text" name="color" value=<?=$color?>>
                            </div>
                            <p>기능들</p>
                            <input type="text" name="func" value="<?=$func?>">
                        </div>
                        <div class="left_bottom">
                            <h2>기획의도</h2>
                            <textarea name="mission" id="ir1">
                                    <?=$mission?>
                            </textarea>
                        </div>
                        <div class="right_bottom">
                            <h2>핵심 기능 설명</h2>
                            <textarea name="exp" id="ir1">
                                    <?=$exp?>
                                </textarea>
                        </div>
                        <div class="clone photo_zone">
                            <h2>Photo Zone <span class="add" id="add">[사진추가]</span></h2>
                            <div class="photo_line"><input type="file" name="thum[]"></div>
                        </div>
                    </div>
                <input type="submit" value="save">
                <input type="hidden" name="mode" value="<?=$mode?>">
                <input type="hidden" name="num" value="<?=$num?>">
            </form>
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
            width: 12%; height: 150vh;
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
            width: 14px; height: 14px;
        }



        /* section------------------------ */
        main .write{
            width: 88%; height: 90vh;
        }
        form{
            width: 90%; margin: 50px auto 0 auto;
        }
        form .ip{
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        form .ip .color__select{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        form .ip .color__select .res{
            width: 15%; margin-left: 5%;
        }
        form .ip .color__select .color{
            width: 75%;
        }
        form .ip .color__select input[type="text"]{
            width: 71%;
        }
        form .ip > div{
            width: 47%;
            margin-bottom: 50px;
            /* border: 1px solid black; */
            background-color: #e5e5e7;
        }
        form .ip > div h2{
            line-height: 52px;
            font-size: 26px;
            padding-left: 4%;
            border-bottom: 1px solid white;
            margin-bottom: 25px;
            background-color: #35464e;
            color: white;
        }
        form .ip > div p{
            width: 90%; margin: 0 auto 5px auto;
        }
        form .ip > div input{
            display: block;
            width: 90%; height: 30px;
            border: 1px solid #eee;
            margin: 0 auto 20px auto;
        }
        form .ip > div input[type="checkbox"]{
            width: 10%; 
            margin-left: 2%;
        }
        form .ip > div textarea{
            width: 90%;
            display: block; height: 450px;
            margin: 0 auto 20px auto;
        }
        .clone.photo_zone{
            width: 100%;
        }
        .clone.photo_zone h2 > span{
            font-size: 16px;
            padding-left: 20px;
            cursor: pointer;
        }
        .clone.photo_zone .photo_line{
            width: 95%; margin: 0 auto;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        .clone.photo_zone > input{
            /* display: inline-block; */
            margin-left: 10px;
            width: 12%;
        }
        input[type="submit"]{
            border: none;
            background-color: #35464e;
            color: white;
            width: 100px; height: 50px;
            font-size: 18px;
            border-radius: 40px;
            cursor: pointer;
        }
    </style>
    <script>
        const contents = document.querySelectorAll(".content");
        const menu__list = document.querySelectorAll(".content .menu__list");
        const menu__name = document.querySelectorAll(".content .menu__name span");
        const menu__icon = document.querySelectorAll(".content .menu__name img");
        let active = 1;
        const default_img = [];
        const active_img = ["./img/dashboard_dark.png", "./img/upload_dark.png", "./img/people_darkblue.png"];
        for(let i = 0; i < menu__icon.length; i++){
            default_img.push(menu__icon[i].src);
        }
    
        //젤 처음 페이지에 이거 보여야함
        menu__icon[1].src = active_img[1];
        menu__name[1].classList.add("active");
        menu__list[1].classList.add("active");
        contents[1].classList.add("back");


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
    <script type="text/javascript">

        const addbtn = document.querySelector("form .clone h2 span");
        const clone = document.querySelector("form .clone .photo_line");
        console.log(clone);
        addbtn.onclick = () => {
            const tag = document.createElement("input");
            tag.type = "file";
            tag.name = "thum[]";
            clone.append(tag);
            
            // `<input type="file" name="thum[]">`;
            // clone.innerHTML = tag;
        }


        const btnSubmit = document.querySelector("input[type=submit]");
        btnSubmit.onclick = function(e){
            submitContents(this);
        }


        var oEditors = [];

        // 추가 글꼴 목록
        //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "ir1",
            sSkinURI: "smart2/SmartEditor2Skin.html",	
            htParams : {
                bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
                bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
                bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
                //bSkipXssFilter : true,		// client-side xss filter 무시 여부 (true:사용하지 않음 / 그외:사용)
                //aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
                fOnBeforeUnload : function(){
                    //alert("완료!");
                }
            }, //boolean
            fOnAppLoad : function(){
                //예제 코드
                //oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
            },
            fCreator: "createSEditor2"
        });
            
        function submitContents(elClickedObj) {
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);	
            
            console.log(document.getElementById("ir1").value);
            try {
                elClickedObj.form.submit();
            } catch(e) {}
        }
</script>
</body>
</html>