<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> ChooseYourApp! </title>
        <style>
            body{
                font-family: Consolas, monospace;
                font-family: 12px;
            }
            table{
                width: 100%;
            }
            th, td{
                padding: 10px;
                border-bottom: 1px solid #dadada;
            }
        </style>
</head>
<body>
    <h1> 구글 플레이 스토어 앱을 추천해드려요! </h1>
    (1) 전체 앱 조회
        <button onclick="location.href='price_free.php'">무료</button>
        <button onclick="location.href='price_charge.php'">유료</button>
        <br>
    <a href="rating.php">(2) 평점순</a>
    <form action="content_age.php" method="GET">
        (3) 이용 가능 연령별
        <input type="number" name="age" min=0 step=1 placeholder="Age">
        <input type="submit" value="Search">
    </form>
</body>
</html>
