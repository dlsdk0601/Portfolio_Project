<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./common.css">
</head>
<body>
    <section class="login__container">
        <div class="left">
            <div class="welcome">
                <h1>Welcome to Admin</h1>
                <p>
                    포트폴리오 관리자 페이지에 오신 것을 환영합니다. 관리자 페이지에서 Admin 아이디로 로그인 할 경우, 포트폴리오 데이터를 등록, 읽기, 수정 그리고 삭제가 가능합니다. <br> 
                    관리자 모드 아이디, 비밀번호를 모르시면 밑에 태그를 클릭하셔서 메일을 보내주세요. 
                </p>
                <a href="mailto:dlsdk0601@gmail.com">Send Mail</a>
            </div>
        </div>
        <div class="right">
            <form action="login-ok.php" method="post">
                <article>
                    <h2>Signin</h2>
                    <div>
                        <p>
                            <input type="text" name="id" placeholder="Enter Admin...">
                        </p>
                        <p>
                            <input type="password" name="pw" placeholder="Enter Password...">
                        </p>
                        <p>
                            <input class="submit" type="submit" value="login">
                            <input type="hidden" name="mode" value="login">
                        </p>
                    </div>
                </article>
            </form>
        </div>
    </section>
    
    
    
    <style>
        body{
            background-color: #e5e5e7;
            font-weight: 800;
        }
        section{
            max-width: 1200px;
            height: 600px;
            width: 100%;
            border-radius: 25px;
            position: absolute;
            left: 50%; top: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .left{
            width: 50%;
            height: 100%;
            background-color: #35464e;
        }
        .left .welcome{
            width: 60%;
            margin: auto;
        }
        .left .welcome h1{
            margin: 150px 0 50px 0;
            color: white;
            font-size: 32px;
            position: relative;
        }
        .left .welcome h1::after{
            content: "";
            display: block;
            width: 100px;
            height: 2px;
            background-color: white;
            position: absolute;
            left: 0; bottom: -10px;
        }
        .left .welcome p{
            color: white;
            line-height: 2;
            font-size: 14px;
        }
        .left .welcome a{
            color: white;
            display: block;
            padding: 5px;
            margin-top: 50px;
            width: 100px; height: 32px;
            border: 1px solid white;
            text-align: center;
            line-height: 2;
            border-radius: 16px;
        }
        .right{
            width: 50%;
            height: 100%;
            background-color: white;
        }
        .right form article{
            width: 50%; margin: 100px auto 0 auto;
        }
        .right form article h2{
            text-align: center;
            width: 100%;
            margin-bottom: 100px;
            position: relative;
        }
        .right form article h2::after{
            content: "";
            position: absolute;
            left: 50%; bottom: -10px;
            transform: translate(-50%, 0);
            width: 30px; height: 3px;
            background-color: #35464e;
        }
        .right form article p{
            margin: 50px auto 50px auto;
            text-align: center;
        }
        .right form article p:last-child{
            margin-top: 80px;
        }
        .right form input::placeholder{
            color: #b3b3b3;
            font-size: 16px;
            padding-bottom: 5px;
        }
        .right form input{
            border: none;
            border-bottom: 1px solid #b3b3b3;
        }
        .submit{
            width: 150px; 
            font-size: 16px;
            line-height: 3;
            border-radius: 16px;
            border: none;
            background-color: #35464e;
            color: white;
        }
    </style>
</body>
</html>